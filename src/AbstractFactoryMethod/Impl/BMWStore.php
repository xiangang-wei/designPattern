<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 上午8:07
 */

namespace DesignPattern\AbstractFactoryMethod\Impl;


use DesignPattern\AbstractFactoryMethod\CarStore;

class BMWStore extends CarStore
{
    public function getDomesticCar()
    {
        // TODO: Implement getDomesticCar() method.
        return new ChineseBMW();
    }

    public function getGermanCar()
    {
        // TODO: Implement getGermanCar() method.
        return new GermanBMW();
    }
}