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
        $user_id = Auth::get_user_id();
foreach ($dbObj as $result):
    <?= $result->id?><br>
    ユーザ名 <?= $result->username ?><br>
    テキスト<?= $result->text ?><br>
    投稿日時<?= $result->created_at ?><br><br>
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