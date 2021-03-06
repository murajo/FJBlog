<?php
class Controller_Login extends Controller
{
    public function action_index()
    {
        $error = null;
        $view = View::forge('login/index');
//        $form = Fieldset::forge();
//        $form->add('username', 'アカウント', array('maxlength' => 8))
//            ->add_rule('required')
//            ->add_rule('max_length', 8);
//        $form->add('password', 'パスワード', array('type' => 'password'))
//            ->add_rule('required')
//            ->add_rule('max_length', 20);
//        $form->add('submit', '', array('type' => 'submit', 'value' => 'ログイン'));
//        $form->repopulate();
        $auth = Auth::instance();
        Auth::logout();
        if (Input::post()) {
//            if ($form->validation()->run()) {
            if(Input::post('login') == 'ゲストログイン' && $auth->login('guest', 'guestguest')){
                Response::redirect('top/index');
            }else if (Input::post('login') == 'ログイン' && $auth->login(Input::post('username'), Input::post('password'))) {
                    // ログイン成功時
                    Response::redirect('top/index');
                }
                $error = 'ログインに失敗しました';
            }
//        $view->set_safe('form', $form->build(Uri::create('login/index')));
        $view->set('error', $error);
        return $view;

    }
}