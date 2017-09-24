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
        return $view;
    }

    public function action_send(){
        $view = View::forge('top/index.php');
        $username = $this->post_cheack('username');
        $password = $this->post_cheack('password');
        $email = $this->post_cheack('email');

        Auth::create_user(
            $username,
            $password,
            $email,
            1,
            array(
                'fullname' => 'A. New User',
            )
        );
        return $view;
    }

    //ポストに値が入っているか確認して入っていれば値を返す、なければ初期値を返す
    private function post_cheack($target){
        if(Input::post($target)){
            $target_return = Input::post($target);
        }else{
            $target_return = '';
        }
        return $target_return;
    }

}