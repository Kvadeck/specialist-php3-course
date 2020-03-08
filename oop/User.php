<?php
/**
 * Created by PhpStorm.
 * User: kvadeck
 * Date: 05.03.19
 * Time: 21:07
 */
class User {

    static $countUsers = 0;

    public $name;
    public $login;
    public $password;

    function __construct($n,$l,$p)
    {
        $this->name = $n;
        $this->login = $l;
        $this->password = $p;
        ++self::$countUsers;
    }
    function __clone()
    {
        $this->name = 'Guest';
        $this->login = 'guest';
        $this->password = '1234';
        ++self::$countUsers;
    }

    function showInfo() {
        echo $this->name.'<br>';
        echo $this->login.'<br>';
        echo $this->password.'<br>';
    }
}
