<?php

/**
 * KanDisheng DemoPHP
 * @author Candison November <www.kandisheng.com>
 */

namespace KanDisheng\DemoPHP;

/**
 * Class Demo
 * @package KanDisheng\DemoPHP
 */
class Demo implements DemoInterface
{
    /**
     * Demo constructor.
     */
    public function __construct()
    {
    }

    /**
     * Demo
     * @param string $string
     * @return string
     */
    public function demo($string = '')
    {
        return $string;
    }
}
