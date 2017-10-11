<?php

class Controller_Bord extends Controller
{

    public function action_index()
    {
        $view = View::forge('bord/index.php');
        //if(Input::post('action')=='save'){
        if((!empty(Input::post('user'))) == '1' && (!empty(Input::post('text'))) == '1'){
        $user = Input::post('user');
        $text = Input::post('text');
        date_default_timezone_set('Asia/Tokyo');
        $time=date("Y/m/d H:i");
        $dbobj2 = new Model_bord();

        $dbobj2->username = $user;
        $dbobj2->text = $text;
        $dbobj2->created_at = $time;
        
        
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
