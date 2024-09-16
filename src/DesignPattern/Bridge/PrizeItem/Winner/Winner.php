<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Winner;

use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Prize\PrizeItemInterface;

class Winner
{
    /**
     * Get the value of name
     */ 
    public function achieve(PrizeItemInterface $prizeItem): void
    {
        echo $prizeItem->getMaterial()->text() . 'の' . $prizeItem->getShape()->text() . 'を獲得';
    }
}