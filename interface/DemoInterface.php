<?php

/**
 * KanDisheng DemoPHP
 * @author Candison November <www.kandisheng.com>
 */

namespace KanDisheng\DemoPHP;

/**
 * Interface DemoInterface
 * @package KanDisheng\DemoPHP
 */
interface DemoInterface
{
    /**
     * DemoInterface constructor.
     */
    public function __construct();

    /**
     * Demo
     * @param string $string
     * @return string
     */
    public function demo($string = '');
}
