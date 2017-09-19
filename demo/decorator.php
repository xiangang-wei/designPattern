<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 下午3:35
 */
require_once '../vendor/autoload.php';

use DesignPattern\Decorator\Request;
use DesignPattern\Decorator\Impl\RequestBaseProcessor;
use DesignPattern\Decorator\Impl\RequestAuthenticateProcessor;
use DesignPattern\Decorator\Impl\RequestLogProcessor;
use DesignPattern\Decorator\Impl\RequestStructureProcessor;

$request = new Request();

//处理请求： 认证、记录日志
$requestProcessor1 = new RequestAuthenticateProcessor(new RequestLogProcessor(new RequestBaseProcessor()));
$requestProcessor1->process($request);

//处理请求：调整、记录日志、认证
$requestProcessor2 = new RequestStructureProcessor(new RequestLogProcessor(new RequestAuthenticateProcessor(new RequestBaseProcessor())));
$requestProcessor2->process($request);
