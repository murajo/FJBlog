<?php
/**
 * Created by PhpStorm.
 * User: x16n064
 * Date: 2017/11/08
 * Time: 12:26
 */
class Model_authmail extends \Orm\Model
{
    protected static $_primary_key = array('id');

    protected static $_properties = array(

        'id',
        'mailaddress',
        'collationkey',
    );


    protected static $_table_name = 'authmail';

}