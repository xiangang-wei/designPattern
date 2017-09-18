<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/18
 * Time: 下午6:44
 */

namespace DesignPattern\FactoryMethod\Impl;


use DesignPattern\FactoryMethod\CarStore;

class AudiStore extends CarStore
{
    public function getDomesticCar()
    {
        // TODO: Implement getDomesticCar() method.
        return new ChineseAudi();
    }

}