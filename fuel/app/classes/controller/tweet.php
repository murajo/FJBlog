<?php

/**
 * Created by PhpStorm.
 * User: x16n064
 * Date: 2017/09/14
 * Time: 10:37
 */
class Controller_Tweet extends Controller
{
//    public function before()
//    {
//        parent::before();
//
//        if (Auth::check()) {
//        } else {
//            // 未ログイン時はログインページへリダイレクト
//            Response::redirect('login/index');
//        }
//    }

    public function action_index()
    {
        $serach_word = 'FJBlog';
        $view = View::forge('tweet/index.php');
        if(!empty(Input::post('search'))){
            $serach_word = Input::post('search');
        }
        $this->get_tweet($view,$serach_word);
        return $view;
    }

    private function get_tweet($view,$keyword)
    {
        $tweets = Model_Tweet::forge()->fetch_tweet($keyword);
        $view->set('tweets', $tweets);

    }
}