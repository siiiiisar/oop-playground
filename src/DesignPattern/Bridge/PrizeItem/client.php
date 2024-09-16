<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem;

use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Material\PrizeMaterialGold;
use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Prize\PrizeItem;
use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Shape\PrizeShapeMedal;
use Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Winner\Winner;

require __DIR__ . '/../../../../vendor/autoload.php';

$prizeItem = new PrizeItem(new PrizeMaterialGold, new PrizeShapeMedal);

$winner = new Winner();
$winner->achieve($prizeItem);