<?php
/**
 * Created by PhpStorm.
 * User: kvadeck
 * Date: 05.03.19
 * Time: 21:08
 */

class Superuser extends User {

    static $countSuperUsers = 0;

    public $role;

    function __construct($n,$l,$p,$r)
    {
        parent::__construct($n,$l,$p);
        ++self::$countSuperUsers;
        --self::$countUsers;
        $this->role =$r;
    }
    function showInfo() {
        parent::showInfo();
        echo $this->role.'<br>';
    }
    function getInfo()
    {
        // TODO: Implement getInfo() method.
        $arr = array();
        foreach ($this as $key=>$value){
            $arr[$key] = $value;
        }
        return $arr;
    }
}