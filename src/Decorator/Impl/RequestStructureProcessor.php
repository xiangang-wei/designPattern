<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 下午3:34
 */

namespace DesignPattern\Decorator\Impl;


use DesignPattern\Decorator\Request;
use DesignPattern\Decorator\RequestProcessorDecorator;

class RequestStructureProcessor extends RequestProcessorDecorator
{

    public function process(Request $request)
    {
        // TODO: Implement process() method.
        print_r(__CLASS__.": doing the structure process"."\n");
        $this->requestProcessor->process($request);
    }
}