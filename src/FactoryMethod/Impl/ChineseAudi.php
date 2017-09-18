<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/18
 * Time: 下午6:37
 */

namespace DesignPattern\FactoryMethod\Impl;


use DesignPattern\FactoryMethod\MadeInChina;

class ChineseAudi extends MadeInChina
{
    public function sayCountry()
    {
        // TODO: Implement sayCountry() method.
        print_r("Audi: I was made in China!"."\n");
    }

}