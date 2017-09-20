<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/20
 * Time: 上午9:51
 */

namespace DesignPattern\Visitor;


abstract class ArmyVisitor
{
    abstract public function visit(Unit $unit);

    public function visitTank(Unit $unit)
    {
       $this->visit($unit);
    }

    public function visitInfantry(Unit $unit)
    {
        $this->visit($unit);
    }

    public function visitArmy(Unit $unit)
    {
        $this->visit($unit);
    }

}