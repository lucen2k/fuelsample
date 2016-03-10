<?php
namespace ERSJ\Common\Model;

use ERSJ\Common\Model;

class Model_T_User extends Model
{
    protected static $_properties = array(
        'id',
        'first_name',
        'last_name',
        'username',
        'phone_number',
        'age',
        'del_flag',
        'created_at',
        'updated_at',
    );

    protected static $_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'events' => array('before_insert'),
            'mysql_timestamp' => true,
        ),
        'Orm\Observer_UpdatedAt' => array(
            'events' => array('before_save'),
            'mysql_timestamp' => true,
        ),
    );

    protected static $_table_name = 't_User';
    protected static $_primary_key = array('id');
}