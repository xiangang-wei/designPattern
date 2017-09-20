<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/20
 * Time: 上午10:44
 */

namespace DesignPattern\Visitor;


class SalaryArmyVisitor extends ArmyVisitor
{
    private $msg = '';

    public function visit(Unit $unit)
    {
        // TODO: Implement visit() method.
        $this->msg .= get_class($unit)."salary : {$unit->getSalary()}"."\n";
    }

    public function getSalary()
    {
        echo "{$this->msg}";
    }
}