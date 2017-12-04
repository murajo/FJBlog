<?php

class Controller_Bord extends Controller
{

    public function action_index()
    {
        $view = View::forge('bord/index.php');
        $username = $this->login_check();
        $view->set('username',$username);
        //if(Input::post('action')=='save'){
        if((!empty(Input::post('text'))) == '1'){
        $user = $username;
        $text = Input::post('text');
        date_default_timezone_set('Asia/Tokyo');
        $time=date("Y/m/d H:i");
        $dbobj2 = new Model_bord();

        $dbobj2->username = $user;
        $dbobj2->text = $text;
        $dbobj2->created_at = $time;

        $user = htmlspecialchars($user, ENT_QUOTES);
        $text = htmlspecialchars($text, ENT_QUOTES);
        
        // $dbobj2->set('username',$user);
        // $dbobj2->set('text',$text);
        // $dbobj2->set('created_at','now');
        $dbobj2->save();
        }
        $query = Model_bord::query()->get();
        $view->set('dbObj',$query);
        return $view;
    }

    private function login_check(){
        if (Input::post('logout')) {
            $auth = Auth::instance();
            $auth->logout();
            Response::redirect('login');
        }
        if(! Auth::check()){
            $auth = Auth::instance();
            $auth->logout();
            Response::redirect('login');
        }
        list(, $userid) = Auth::get_user_id();
        $username = Model_users::find($userid)['username'];
        return $username;
    }
}
