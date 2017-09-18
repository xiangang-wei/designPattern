<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/18
 * Time: 下午6:27
 */

namespace DesignPattern\FactoryMethod\Impl;

use DesignPattern\FactoryMethod\MadeInChina;

class ChineseBMW extends MadeInChina
{

    public function sayCountry()
    {
        // TODO: Implement sayCountry() method.
        print_r("BMW: I was made in China"."\n");
    }

}