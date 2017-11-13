<?php

class Controller_Lunch extends Controller
{

    public function action_index()
    {
        $view = View::forge('lunch/index.php');
        //if(Input::post('action')=='save'){
        if((!empty(Input::post('user'))) == '1' && (!empty(Input::post('text'))) == '1'){
            $user = Input::post('user');
            $text = Input::post('text');
            date_default_timezone_set('Asia/Tokyo');
            $time=date("Y/m/d H:i");
            $dbobj3 = new Model_lunch();

            $dbobj3->username = $user;
            $dbobj3->text = $text;
            $dbobj3->created_at = $time;

            $user = htmlspecialchars($user, ENT_QUOTES);
            $text = htmlspecialchars($text, ENT_QUOTES);

            // $dbobj3->set('username',$user);
            // $dbobj3->set('text',$text);
            // $dbobj3->set('created_at','now');
            $dbobj3->save();
        }
        $query = Model_lunch::query()->get();
        $view->set('dbObj',$query);
        return $view;
    }
    public function action_noodle(){
        $view = View::forge('lunch/noodle.php');
        //if(Input::post('action')=='save'){
        if((!empty(Input::post('shop'))) == '1' && (!empty(Input::post('voice'))) == '1'){
            $shop = Input::post('shop');
            $voice = Input::post('voice');
            $dbobj3 = new Model_noodle();

            $dbobj3->shopname = $shop;
            $dbobj3->voice = $voice;

            $shop = htmlspecialchars($shop, ENT_QUOTES);
            $voice = htmlspecialchars($voice, ENT_QUOTES);
            // $dbobj3->set('shopname',$shop);
            // $dbobj3->set('voice',$voice);
            $dbobj3->save();
        }
        $query = Model_noodle::query()->get();
        $view->set('dbObj',$query);
        return $view;

    }
}