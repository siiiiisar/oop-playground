<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Shape;

use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Enum\Shape;

abstract class AbstractPrizeShape
{
    /**
     * @return Shape
     */
    abstract public function get(): Shape;
}