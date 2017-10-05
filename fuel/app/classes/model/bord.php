<?php
/**
 * Created by PhpStorm.
 * User: murajo
 * Date: 2017/09/25
 * Time: 22:50
 */
class Model_bord extends \Orm\Model
{
    protected static $_primary_key = array('id');

    protected static $_properties = array(

        'id',
        'username',
        'text',
        'created_at'
    );


    protected static $_table_name = 'bord';

}