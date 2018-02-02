<?php

/**
 * KanDisheng DemoPHP
 * @author Candison November <www.kandisheng.com>
 */

namespace KanDisheng\DemoPHP\Script;

use CodeMommy\TaskPHP\Console;
use CodeMommy\TaskPHP\FileSystem;

/**
 * Class Clean
 * @package KanDisheng\DemoPHP\Script;
 */
class Clean
{
    /**
     * Clean constructor.
     */
    public function __construct()
    {
    }

    /**
     * Start
     */
    public static function start()
    {
        PHPUnit::clean();
        $removeList = array(
            'workbench'
        );
        $result = FileSystem::remove($removeList);
        if ($result) {
            Console::printLine('Clean Finished.', 'success');
        } else {
            Console::printLine('Clean Error.', 'error');
        }
    }
}
