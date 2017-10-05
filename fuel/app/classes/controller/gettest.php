<?php

class Controller_Gettest extends Controller
{

    public function action_index()
    {
        $view = View::forge('test/index.php');
        
        $user = Input::post('user');
        $text = Input::post('tx');
        $dbobj = Model_bord::forge();
        

        return $view;
    }

}

