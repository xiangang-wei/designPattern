<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 上午10:29
 */

namespace DesignPattern\Composite;


abstract class Unit
{
    /**
     * @param Unit $unit
     * @throws \Exception
     */
    public function addUnit(Unit $unit)
    {
        throw new \Exception(get_class($unit)." 无法增加部队！");
    }

    /**
     * @param Unit $unit
     * @throws \Exception
     */
    public function removeUnit(Unit $unit)
    {
        throw new \Exception(get_class($unit)." 无法移除部队！");
    }

    abstract public function attack();
}