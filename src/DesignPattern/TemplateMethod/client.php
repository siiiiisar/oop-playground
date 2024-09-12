<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\TemplateMethod;

require __DIR__ . '/../../../vendor/autoload.php';

use Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\ConcreteClass\ListDisplay;
use Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\ConcreteClass\TableDisplay;

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
