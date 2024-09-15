<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Iterator\ConcreteIterator;

use FilterIterator;
use Iterator;
use Siiiiisar\OopPlayground\DesignPattern\Iterator\Enum\Job;

class SalesmanIterator extends FilterIterator
{
    /**
     * @param ArrayObject $employees
     */
    public function __construct(
        private Iterator $iterator
    ) {   
        parent::__construct($iterator);
    }

    /**
     * @return boolean
     */
    public function accept(): bool
    {
        $employee = $this->getInnerIterator()->current();
        return $employee->getJob() === Job::SALES;
    }
}