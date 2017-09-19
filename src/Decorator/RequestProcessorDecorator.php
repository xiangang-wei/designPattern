<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 下午3:24
 */

namespace DesignPattern\Decorator;


abstract class RequestProcessorDecorator extends RequestProcessor
{
    protected $requestProcessor;

    /**
     * RequestProcessorDecorator constructor.
     * @param $requestProcessor
     */
    public function __construct(RequestProcessor $requestProcessor)
    {
        $this->requestProcessor = $requestProcessor;
    }

}