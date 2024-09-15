<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\TemplateMethod;

use Iterator;
use Siiiiisar\OopPlayground\DesignPattern\Iterator\ConcreteAggregate\Employees;
use Siiiiisar\OopPlayground\DesignPattern\Iterator\ConcreteIterator\SalesmanIterator;
use Siiiiisar\OopPlayground\DesignPattern\Iterator\Employee\Employee;
use Siiiiisar\OopPlayground\DesignPattern\Iterator\Enum\Job;

require __DIR__ . '/../../../vendor/autoload.php';

/**
 * @param Iterator<Employee> $iterator
 * @return void
 */
function dumpWithForeach(Iterator $iterator): void
{
    foreach ($iterator as $employee) {
        print($employee->getName() . PHP_EOL);
        print($employee->getAge() . PHP_EOL);
        print($employee->getJob()->text() . PHP_EOL);
    }
    echo PHP_EOL;
}

$employees = new Employees();
$employees->add(new Employee('田中太郎', 23, Job::SALES));
$employees->add(new Employee('田中次郎', 25, Job::HR));
$employees->add(new Employee('田中三郎', 25, Job::MANAGER));

$iterator = $employees->getIterator();

dumpWithForeach($iterator);

dumpWithForeach(new SalesmanIterator($iterator));

$iterator->rewind();

while ($iterator->valid()) {
    echo $iterator->current()->getName() . PHP_EOL;
    echo $iterator->current()->getAge() . PHP_EOL;
    echo $iterator->current()->getJob()->text() . PHP_EOL;
    $iterator->next();
}

// IteratorAggregateを実装している場合はgetIteratorを省略できる
foreach ($employees as $employee) {
    echo "{$employee->getName()}\n";
}