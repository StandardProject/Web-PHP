<?php

/**
 * KanDisheng DemoPHP
 * @author Candison November <www.kandisheng.com>
 */

namespace KanDisheng\DemoPHP\Test;

use KanDisheng\DemoPHP\Demo;

/**
 * Class DemoTest
 * @package KanDisheng\DemoPHP\Test
 */
class DemoTest extends BaseTest
{
    /**
     * DemoTest constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Test Construct
     */
    public function testConstruct()
    {
        new Demo();
        $this->assertTrue(true);
    }

    /**
     * Test Demo
     * @return void
     */
    public function testDemo()
    {
        $demo = new Demo();
        $this->assertEquals($demo->demo(1), 1);
    }
}
