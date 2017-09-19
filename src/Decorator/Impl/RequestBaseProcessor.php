<?php

/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 下午3:26
 */
namespace DesignPattern\Decorator\Impl;

use DesignPattern\Decorator\Request;
use DesignPattern\Decorator\RequestProcessor;

class RequestBaseProcessor extends RequestProcessor
{
    public function process(Request $request)
    {
        // TODO: Implement process() method.
        print_r(__CLASS__.": doing the base process"."\n");
    }

}