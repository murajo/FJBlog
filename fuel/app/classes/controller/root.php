<?php

/**
 * Created by PhpStorm.
 * User: x16n064
 * Date: 2017/09/14
 * Time: 10:37
 */
class Controller_Root extends Controller
{

    public function action_index()
    {
        $view = View::forge('root/index.php');
        if (Input::post('access_password') == $_SERVER['ACOUNT_ROOT_ACCESS_TOKEN']) {
            Session::set('access_password', Input::post('access_password'));
            $view = $this->root_page();
        } elseif (Session::get('access_password') == $_SERVER['ACOUNT_ROOT_ACCESS_TOKEN']) {
            $view = $this->root_page();
        }
        return $view;
    }

    private function root_page()
    {
        $view = View::forge('root/root.php');
        if (Input::post('action') == 'create') {
            $view = $this->root_create_user($view);
        } else if (Input::post('action') == 'delete') {
            $view = $this->root_delete_user($view);
        } else if (Input::post('action') == 'update') {
            $view = $this->root_change_password($view);
        }
        return $view;
    }

    private function root_create_user($view)
    {
        $val = Validation::forge();
        $val = $this->validation_username($val,'create_username');
        $val = $this->validation_password($val,'create_password');
        $val = $this->validation_email($val,'create_email');
        if ($val->run()) {
            $username = Input::post('create_username');
            $password = Input::post('create_password');
            $email = Input::post('create_email');
            Auth::create_user($username, $password, $email);
        }
        $result_validate = $val->show_errors();
        $view->set_global('create_err', $result_validate);
        return $view;
    }

    private function root_delete_user($view)
    {
        $val = Validation::forge();
        $val->add('delete_username','ユーザ名')
            ->add_rule('required');
        if($val->run()){
            $username = Input::post('delete_username');
            Auth::delete_user($username);
        }
        $result_validate = $val->show_errors();
        $view->set_global('delete_err', $result_validate);
        return $view;
    }

    private function root_change_password($view)
    {
        $val = Validation::forge();
        $val = $this->validation_password($val,'change_password');
        $val = $this->validation_username($val,'change_user');
        if($val->run()){
            $username = Input::post('change_user');
            $new_password = Input::post('change_password');
            Auth::update_user(array('password' => $new_password),$username);
        }
        $result_validate = $val->show_errors();
        $view->set_global('update_err', $result_validate);
        return $view;
    }

    private function validation_username($val,$set_name){
        $val->add($set_name, 'ユーザ名')
            ->add_rule('required')
            ->add_rule('max_length', '12')
            ->add_rule('min_length', '4');
        return $val;
    }

    private function validation_password($val,$set_pass){
        $val->add($set_pass,'パスワード')
            ->add_rule('required')
            ->add_rule('max_length','20')
            ->add_rule('min_length','7');
        return$val;
    }

    private function validation_email($val,$set_mail){
        $val->add($set_mail,'メールアドレス')
            ->add_rule('required')
            ->add_rule('valid_email');
        return$val;
    }


}