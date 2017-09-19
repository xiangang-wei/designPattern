<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 上午10:58
 */

namespace DesignPattern\Composite\Impl;


use DesignPattern\Composite\Unit;

class Fighter extends Unit
{
    /**
     * @return int
     */
    public function attack()
    {
        // TODO: Implement attack() method.
        return 1000;
    }

}