<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 上午8:05
 */

namespace DesignPattern\AbstractFactoryMethod\Impl;


use DesignPattern\AbstractFactoryMethod\MadeInGarmany;

class GermanBMW extends MadeInGarmany
{
    public function sayCountry()
    {
        // TODO: Implement sayCountry() method.
        print_r("BMW: I was made in Germany!"."\n");
    }

}