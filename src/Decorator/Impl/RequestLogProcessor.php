<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 下午3:28
 */

namespace DesignPattern\Decorator\Impl;


use DesignPattern\Decorator\Request;
use DesignPattern\Decorator\RequestProcessorDecorator;

class RequestLogProcessor extends RequestProcessorDecorator
{
    /**
     * @param Request $request
     */
    public function process(Request $request)
    {
        // TODO: Implement process() method.
        print_r(__CLASS__.": doing the log process"."\n");
        $this->requestProcessor->process($request);
    }

}