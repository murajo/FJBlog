<?php

/**
 * Created by PhpStorm.
 * User: x16n064
 * Date: 2017/09/14
 * Time: 10:37
 */
class Controller_Top extends Controller
{
    public function action_index(){
        $view = View::forge('top/index.php');
        if (Input::post('logout')) {
            $auth = Auth::instance();
            $auth->logout();
            Response::redirect('login');
        }
        return $view;
    }

    public function action_logout(){
        if (Input::post('logout')) {
            $auth = Auth::instance();
            $auth->logout();
            Response::redirect('login/logout');
        }
    }
}