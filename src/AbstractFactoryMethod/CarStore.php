<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 上午7:59
 */

namespace DesignPattern\AbstractFactoryMethod;


abstract class CarStore
{
    abstract public function getDomesticCar();

    abstract public function getGermanCar();
}