<?php
/**
 * Created by PhpStorm.
 * User: murajo
 * Date: 2017/09/25
 * Time: 22:50
 */
class Model_users extends \Orm\Model
{
    protected static $_primary_key = array('id');

    protected static $_properties = array(

        'username',
        'password',
        'group',
        'email',
        'last_login',
        'login_hash',
        'profile_fields',
        'created_at'
    );


    protected static $_table_name = 'users';

}