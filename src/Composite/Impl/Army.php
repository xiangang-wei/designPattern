<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 上午10:39
 */

namespace DesignPattern\Composite\Impl;


use DesignPattern\Composite\Unit;

class Army extends Unit
{
    private $units = [];

    /**
     * @return int
     */
    public function attack()
    {
        // TODO: Implement attack() method.
        $amount = 0;
        foreach ($this->units as $item){
            $amount+=$item->attack();
        }
        return $amount;
    }

    /**
     * @param Unit $unit
     */
    public function addUnit(Unit $unit)
    {
        if (in_array($unit,$this->units,true)) {
            return;
        }

        $this->units[] = $unit;
    }

    /**
     * @param Unit $unit
     */
    public function removeUnit(Unit $unit)
    {
        $this->units = array_udiff($this->units, array($unit), function ($a, $b) {
            return ($a === $b ? 0 : 1);
        });
    }


}