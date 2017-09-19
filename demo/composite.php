<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 上午10:59
 */
require_once '../vendor/autoload.php';

use DesignPattern\Composite\Impl\Tank;
use DesignPattern\Composite\Impl\Infantry;
use DesignPattern\Composite\Impl\Fighter;
use DesignPattern\Composite\Impl\Army;
use DesignPattern\Composite\Unit;

/**
 * @param Unit $army
 * @return mixed
 */
function attack(Unit $army){
    return $army->attack();
}

/**
 * @param Unit $army
 * @param Unit $unit
 */
function prepare(Unit $army,Unit $unit){
    $army->addUnit($unit);
}

/**
 * @param Unit $army
 * @param Unit $unit
 */
function dismiss(Unit $army,Unit $unit){
    $army->removeUnit($unit);
}

$army = new Army();
echo "---准备部队！---"."\n";
$tank = new Tank();
prepare($army,$tank);
echo "---开始攻击！---"."\n";
echo "---造成".attack($army)."点伤害！---"."\n";
echo "---胜利！---"."\n";
echo "---解散部队！---"."\n";
dismiss($army,$tank);
echo "---部队解散后，造成".attack($army)."点伤害！---"."\n";