<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\TemplateMethod;

require __DIR__ . '/../../../vendor/autoload.php';

use Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\ConcreteClass\ListDisplay;
use Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\ConcreteClass\TableDisplay;
use Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\Security\MutipleOfFiveCheckedHandler;
use Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\Security\MutipleOfThreeCheckedHandler;

$data = [
    'Design Pattern',
    'Gang of Four',
    'Template Method Sample'
];

$listDisplay = new ListDisplay($data);
$tableDisplay = new TableDisplay($data);

$listDisplay->display();
echo '<hr>';
$tableDisplay->display();

$threeCheckedHandler = new MutipleOfThreeCheckedHandler;
$threeCheckedHandler->handle(6);
$threeCheckedHandler->handle(10);

$fiveCheckedHandler = new MutipleOfFiveCheckedHandler;
$fiveCheckedHandler->handle(6);
$fiveCheckedHandler->handle(10);