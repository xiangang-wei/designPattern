<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 上午8:10
 */

require_once '../vendor/autoload.php';

use DesignPattern\AbstractFactoryMethod\CarStore;
use DesignPattern\AbstractFactoryMethod\Impl\AudiStore;
use DesignPattern\AbstractFactoryMethod\Impl\BMWStore;

/**
 * @param CarStore $carStore
 * @return mixed
 */
function buyChineseAudi(CarStore $carStore){
    return $carStore->getDomesticCar();
}

/**
 * @param CarStore $carStore
 * @return mixed
 */
function buyGermanBMW(CarStore $carStore){
    return $carStore->getGermanCar();
}

buyChineseAudi(new AudiStore())->sayCountry();
buyGermanBMW(new BMWStore())->sayCountry();