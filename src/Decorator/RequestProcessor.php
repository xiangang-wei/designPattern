<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 下午3:23
 */

namespace DesignPattern\Decorator;


abstract class RequestProcessor
{
    abstract public function process(Request $request);
}