<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Material;

use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Enum\Material;

abstract class AbstractPrizeMaterial
{
    /**
     * @return Material
     */
    abstract public function get(): Material;
}