<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 上午8:06
 */

namespace DesignPattern\AbstractFactoryMethod\Impl;


use DesignPattern\AbstractFactoryMethod\MadeInGarmany;

class GermanAudi extends MadeInGarmany
{
    public function sayCountry()
    {
        // TODO: Implement sayCountry() method.
        print_r("Audi: I was made in Germany!"."\n");
    }

}