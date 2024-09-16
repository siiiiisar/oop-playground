<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Material;

use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Enum\Material;
use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Material\AbstractPrizeMaterial;

class PrizeMaterialSilver extends AbstractPrizeMaterial
{
    /**
     * @inheritDoc
     */
    public function get(): Material
    {
        return Material::SILVER;
    }
}