<?php

/**
 * Created by PhpStorm.
 * User: x16n064
 * Date: 2017/09/14
 * Time: 10:37
 */
class Controller_Top extends Controller
{

    public function action_index()
    {
        $view = View::forge('top/index.php');
        $err = "";
        $auth = Auth::instance(); // Authのインスタンス化
        try {
            if ($auth->update_user( 'test', 'n971030', 'x16064@chiba-fjb.ac.jp', '1') ) {
                // 登録成功
            }
            else {
                $err = '登録失敗';
            }
        }
        catch (SimpleUserUpdateException $e) {
            $err = $e->getMessage();
        }
        return $view;
    }

}