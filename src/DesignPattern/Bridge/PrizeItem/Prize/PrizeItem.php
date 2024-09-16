<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Prize;

use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Enum\Material;
use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Enum\Shape;
use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Material\AbstractPrizeMaterial;
use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Shape\AbstractPrizeShape;

class PrizeItem implements PrizeItemInterface
{
    /**
     * @param AbstractPrizeMaterial $material
     * @param AbstractPrizeShape $shape
     */
    public function __construct(
        private AbstractPrizeMaterial $material,
        private AbstractPrizeShape $shape
    ) { 
    }

    /**
     * @inheritDoc
     */
    public function getMaterial(): Material
    {
        return $this->material->get();
    }

    /**
     * @inheritDoc
     */
    public function getShape(): Shape
    {
        return $this->shape->get();
    }
}