<?php
/**
 * Created by PhpStorm.
 * User: x16n064
 * Date: 2017/09/21
 * Time: 10:19
 *
 *
 */class Controller_Login extends Controller
{

    public function action_index()
    {
        $view = View::forge('login/index.php');
        return $view;
    }
}