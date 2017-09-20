<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/20
 * Time: 上午10:51
 */
require_once "../vendor/autoload.php";

use DesignPattern\Visitor\Unit;
use DesignPattern\Visitor\SalaryArmyVisitor;
use DesignPattern\Visitor\Impl\Army;
use DesignPattern\Visitor\Impl\Tank;
use DesignPattern\Visitor\Impl\Infantry;

$army = new Army();
$tank = new Tank();
$infantry = new Infantry();
$army->addUnit($tank);
$army->addUnit($infantry);

$salaryVisitor = new SalaryArmyVisitor();
$army->accept($salaryVisitor);
$salaryVisitor->getSalary();