<?php
/**
 * Created by PhpStorm.
 * User: murajo
 * Date: 2017/09/25
 * Time: 22:50
 */
class Model_jk extends \Orm\Model
{
    protected static $_primary_key = array('id');

    protected static $_properties = array(

        'id',
        'shopname',
        'voice',
    );


    protected static $_table_name = 'jk';

}