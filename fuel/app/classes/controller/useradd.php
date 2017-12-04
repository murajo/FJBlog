<?php

/**
 * Created by PhpStorm.
 * User: x16n064
 * Date: 2017/09/14
 * Time: 10:37
 */

//そのうちcheck_mailadrressの不具合直すべし

class Controller_Useradd extends Controller
{
    public function action_index()
    {
        $view = View::forge('useradd/index.php');
        $view->set('good', '');
        $view->set('msg','');
        if(Input::post('sendmail') == 'メール送信' && Input::post('mailaddress')){
            if($this->check_user_mailaddress(Input::post('mailaddress'))) {
                if($this->sendmail($view, Input::post('mailaddress'))){
                    $view->set('good','メールが送信されました');
                }else{
                    $view->set('msg','メールの送信に失敗しました');
                }
            }else{
                $view->set('msg','そのメールアドレスはすでに使われています');
            }
        }

        return $view;
    }

    public function action_createuser(){
        $view = View::forge('useradd/createuser.php');
        if(Input::get('collationkey')){
            Session::set('collationkey', Input::get('collationkey'));
        }elseif (Session::get('collationkey')){
            $mailaddress = $this->get_mailaddress(Session::get('collationkey'));
            $this->create_user($mailaddress,$view);
        }else{
            Response::redirect('login/index');
        }
        return $view;
    }

    private function sendmail($view,$destinationaddress){
        $sendErr = "";
        //インスタンスの作成
        $email = Email::forge('jis');
        //メール情報の設定
        $collationkey = Str::random('alnum', 16);
        $email->from('murajo16n064@gmail.com');
        $email->to($destinationaddress);
        $email->subject(mb_convert_encoding('FJBlogアカウント作成','jis'));
        $email->body(mb_convert_encoding($this->create_mail_body($collationkey), 'jis'));
        try {
            //メール送信
            $email->send();
            if($this->check_authmail_mailaddress($destinationaddress)) {
                $this->set_collationkey($collationkey, $destinationaddress);
            }else{
                $this->set_update_collationkey($collationkey,$destinationaddress);
            }
        }
        catch (\EmailValidationFailedException $e) {
            // 1 つ以上のメールアドレスがバリデーションで失敗した。
            $sendErr = 'address error（EmailValidationFailedException）。<br />';
            $sendErr .= $e->getMessage();
        }
        catch (\EmailSendingFailedException $e) {
            // ドライバがメールを送信できなかった。
            echo '送信に失敗しました';
            $sendErr = 'send error（EmailSendingFailedException）。<br />';
            $sendErr .= $e->getMessage();
        }
        catch(Exception $e) {
            //その他のエラー
            echo '送信に失敗しました';
            $sendErr = 'error（Exception）。<br />';
            $sendErr .= $e->getMessage();
        }

    }

    private function create_user($mailaddress,$view)
    {
        $val = Validation::forge();
        $val = $this->validation_username($val, 'username');
        $val = $this->validation_password($val, 'password');
        $val = $this->validation_password_retype($val, 'password_retype');
        if ($val->run()) {
            $username = Input::post('username');
            $password = Input::post('password');
            $email = $mailaddress;
            Auth::create_user($username, $password, $email);
            echo('登録成功');
        }
        $result_validate = $this->replace_tag($val->show_errors());
        $view->set_global('create_err', $result_validate);
        return $view;
    }

    private function set_collationkey($collationkey,$mailaddress){
        $mdl = Model_authmail::forge();
        $mdl->collationkey = $collationkey;
        $mdl->mailaddress = $mailaddress;
        $mdl->save();
    }

    private function set_update_collationkey($collationkey,$mailaddress){
        $entry = Model_authmail::$query->where('mailaddress',$mailaddress);
        $entry->collationkey = $collationkey;
        $entry->save();
    }

    private function check_authmail_mailaddress($mailaddress){
        $query = Model_users::query()->where('mailaddress',$mailaddress);
        Debug::dump($query);
        return $query;
    }

    private function check_user_mailaddress($mailaddress){
        $query = Model_users::query()->where('mailaddress',$mailaddress);
        return $query;
    }

    private function get_mailaddress($collationkey){
        $query = Model_authmail::query()->where('collationkey', $collationkey)->get();
        $mailaddress = '';
        foreach ($query as $result):
            $mailaddress = $result->mailaddress;
        endforeach;
        return $mailaddress;
    }

    private function create_mail_body($collationkey){
        $url = Uri::create('useradd/createuser');
        $url_use_get = '?collationkey=';
        $mail_body = '以下のURLからアカウント作成を行ってください' . $url . $url_use_get . $collationkey;
        return $mail_body;
    }

    private function validation_username($val, $set_name)
    {
        $val->add($set_name, 'ユーザ名')
            ->add_rule('required')
            ->add_rule('max_length', '12')
            ->add_rule('min_length', '4');
        return $val;
    }

    private function validation_password($val, $set_pass)
    {
        $val->add($set_pass, 'パスワード')
            ->add_rule('required')
            ->add_rule('max_length', '20')
            ->add_rule('min_length', '7');

        return $val;
    }

    private function validation_password_retype($val,$set_retype){
        $val->add($set_retype,'パスワード(確認用)')
            ->add_rule('required')
            ->add_rule('max_length','20')
            ->add_rule('min_length','7')
            ->add_rule('match_field','password');
        return $val;
    }

    private function replace_tag($val){
        $val = str_replace('/',"",$val);
        $val = str_replace("<ul>","",$val);
        $val = str_replace("<li>","",$val);
        return $val;
    }

}