<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 上午8:08
 */

namespace DesignPattern\AbstractFactoryMethod\Impl;


use DesignPattern\AbstractFactoryMethod\CarStore;

class AudiStore extends CarStore
{
    public function getDomesticCar()
    {
        // TODO: Implement getDomesticCar() method.
        return new ChineseAudi();
    }

    public function getGermanCar()
    {
        // TODO: Implement getGermanCar() method.
        return new GermanAudi();
    }
}