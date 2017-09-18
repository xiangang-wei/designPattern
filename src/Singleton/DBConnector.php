<?php

/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/18
 * Time: 下午3:02
 */
namespace DesignPattern\Singleton;

class DBConnector
{
    private static $instance = null;

    /**
     * DBConnector constructor.
     */
    private function __construct(){}

    public static function getInstance()
    {
        if (empty(self::$instance)){
            self::$instance = new \mysqli('127.0.0.1','root','root','designPattern',3306);
        }

        return self::$instance;
    }


}