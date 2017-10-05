<?php

class Controller_Test extends Controller
{

    public function action_index()
    {
        $view = View::forge('test/index.php');
        if(Input::post('action')=='save'){
        $user = Input::post('user');
        $text = Input::post('tx');
        $dbobj2 = new Model_bord();

        $dbobj2->username = $user;
        $dbobj2->text = $text;
        $dbobj2->created_at = 'now';
        
        // $dbobj2->set('username',$user);
        // $dbobj2->set('text',$text);
        // $dbobj2->set('created_at','now');
        $dbobj2->save();
        }
        $query = Model_bord::query()->get();
        $view->set('dbObj',$query);


        return $view;
    }
}