<?php

/**
 * KanDisheng DemoPHP
 * @author Candison November <www.kandisheng.com>
 */

declare(strict_types=1);

namespace KanDisheng\Test;

use Exception;
use CodeMommy\DevelopPHP\PHPUnitBase;
use KanDisheng\DemoPHP\Demo;

/**
 * Class DemoTest
 * @package KanDisheng\Test
 */
class DemoTest extends PHPUnitBase
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
     * @throws Exception
     */
    public function testConstruct()
    {
        new Demo();
        $this->assertTrue(true);
    }

    /**
     * Test Demo
     * @throws Exception
     * @return void
     */
    public function testDemo()
    {
        $demo = new Demo();
        $this->assertEquals($demo->demo(1), 1);
    }
}
