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
        return $view;
    }
}