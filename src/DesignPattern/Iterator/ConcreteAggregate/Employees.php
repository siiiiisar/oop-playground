<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Iterator\ConcreteAggregate;

use ArrayObject;
use Iterator;
use IteratorAggregate;
use Siiiiisar\OopPlayground\DesignPattern\Iterator\Employee\Employee;

class Employees implements IteratorAggregate
{
    /**
     * @param ArrayObject<Employee> $employees
     */
    public function __construct(
        private ArrayObject $employees = new ArrayObject()
    ) {   
    }

    /**
     * @param Employee $employee
     * @return void
     */
    public function add(Employee $employee): void
    {
        $this->employees[] = $employee;
    }

    /**
     * @return Iterator<Employee>
     */
    public function getIterator(): Iterator
    {
        return $this->employees->getIterator();
    }
}