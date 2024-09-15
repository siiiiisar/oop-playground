<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Iterator\Employee;

use Siiiiisar\OopPlayground\DesignPattern\Iterator\Enum\Job;

class Employee
{
    /**
     * @param string $name
     * @param integer $age
     * @param Job $job
     */
    public function __construct(
        private string $name,
        private int $age,
        private Job $job,
    ) {   
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return integer
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return Job
     */
    public function getJob(): Job
    {
        return $this->job;
    }
}