<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/18
 * Time: 下午3:23
 */
include_once '../vendor/autoload.php';

use DesignPattern\Singleton\DBConnector;

$dbConnector = DBConnector::getInstance();
var_dump($dbConnector);
