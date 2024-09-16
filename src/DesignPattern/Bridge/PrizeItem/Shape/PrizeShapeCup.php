<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Shape;

use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Enum\Shape;

class PrizeShapeCup extends AbstractPrizeShape
{
    /**
     * @inheritDoc
     */
    public function get(): Shape
    {
        return Shape::CUP;
    }
}