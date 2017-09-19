<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/19
 * Time: 下午3:29
 */

namespace DesignPattern\Decorator;


class Request
{
    private $date;

    /**
     * Request constructor.
     * @param $date
     */
    public function __construct()
    {
        $this->date = date('Y-m-d');
    }

    /**
     * @return false|string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param false|string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }


}