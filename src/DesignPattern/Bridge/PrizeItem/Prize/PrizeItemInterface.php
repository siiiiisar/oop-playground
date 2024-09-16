<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Prize;

use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Enum\Material;
use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Enum\Shape;

interface PrizeItemInterface
{
    /**
     * @return Material
     */
    public function getMaterial(): Material;

    /**
     * @return Shape
     */
    public function getShape(): Shape;
}