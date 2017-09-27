<?php
/**
 * Created by PhpStorm.
 * User: x16n064
 * Date: 2017/09/27
 * Time: 11:47
 */
class Controller_Bord extends Controller
{

    public function action_index()
    {
        $view = View::forge('bord/index.php');

        return $view;
    }
}