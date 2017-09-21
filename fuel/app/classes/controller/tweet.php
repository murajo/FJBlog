<?php

/**
 * Created by PhpStorm.
 * User: x16n064
 * Date: 2017/09/14
 * Time: 10:37
 */
class Controller_Tweet extends Controller
{

    public function action_index()
    {
        $view = View::forge('tweet/index.php');
        $this->get_tweet($view);
        return $view;
    }

    private function get_tweet($view)
    {
        $tweets = Model_Tweet::forge()->fetch_tweet();
        $view->set('tweets', $tweets);

    }
}