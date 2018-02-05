<?php

/**
 * KanDisheng DemoPHP
 * @author Candison November <www.kandisheng.com>
 */

require_once('library/Autoload.php');

use KanDisheng\DemoPHP\Library\Autoload;

$autoloaDirectory = array(
    'library' => 'KanDisheng\\DemoPHP\\Library',
    'interface' => 'KanDisheng\\DemoPHP',
    'class' => 'KanDisheng\\DemoPHP'
);

Autoload::directory($autoloaDirectory);
