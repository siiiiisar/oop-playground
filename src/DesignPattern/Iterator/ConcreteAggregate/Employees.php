<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Iterator\ConcreteAggregate;

use ArrayObject;
use IteratorAggregate;
use Siiiiisar\OopPlayground\DesignPattern\Iterator\Employee\Employee;
use Traversable;

class Employees implements IteratorAggregate
{
    /**
     * @param ArrayObject $employees
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
     * @return Traversable
     */
    public function getIterator(): Traversable
    {
        return $this->employees->getIterator();
    }
}