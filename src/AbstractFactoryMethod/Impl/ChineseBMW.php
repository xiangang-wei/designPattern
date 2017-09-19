<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 上午8:03
 */

namespace DesignPattern\AbstractFactoryMethod\Impl;


use DesignPattern\AbstractFactoryMethod\MadeInChina;

class ChineseBMW extends MadeInChina
{
    public function sayCountry()
    {
        // TODO: Implement sayCountry() method.
        print_r("BMW: I was made in China!"."\n");
    }

}