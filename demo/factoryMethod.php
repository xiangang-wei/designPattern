<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/18
 * Time: 下午6:45
 */
include_once '../vendor/autoload.php';

use DesignPattern\FactoryMethod\Impl\BMWStore;
use DesignPattern\FactoryMethod\Impl\AudiStore;
use DesignPattern\FactoryMethod\CarStore;

/**
 * @param CarStore $carStore
 * @return mixed
 */
function buyBMW(CarStore $carStore){
    return $carStore->getDomesticCar();
}

/**
 * @param CarStore $carStore
 * @return mixed
 */
function buyAudi(CarStore $carStore){
    return $carStore->getDomesticCar();
}

buyAudi(new AudiStore())->sayCountry();

buyBMW(new BMWStore())->sayCountry();