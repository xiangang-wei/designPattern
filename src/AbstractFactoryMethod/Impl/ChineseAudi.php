<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 上午8:04
 */

namespace DesignPattern\AbstractFactoryMethod\Impl;


use DesignPattern\AbstractFactoryMethod\MadeInChina;

class ChineseAudi extends MadeInChina
{
    public function sayCountry()
    {
        // TODO: Implement sayCountry() method.
        print_r("Audi: I was made in China!"."\n");
    }

}