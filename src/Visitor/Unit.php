<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/20
 * Time: 上午9:53
 */

namespace DesignPattern\Visitor;


class Unit
{
    protected $salary = 0;

    public function accept(ArmyVisitor $visitor)
    {
        $visitor->visit($this);
    }

    /**
     * @return int
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param int $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}