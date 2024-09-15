<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Bridge;

use Exception;
use Siiiiisar\OopPlayground\DesignPattern\Bridge\Abstraction\Listing;
use Siiiiisar\OopPlayground\DesignPattern\Bridge\ConcreteImplementor\FileDataSource;
use Siiiiisar\OopPlayground\DesignPattern\Bridge\RefinedAbstraction\ExtendedListing;

require __DIR__ . '/../../../vendor/autoload.php';

$list1 = new Listing(new FileDataSource(__DIR__ . '/data.txt'));
$list2 = new ExtendedListing(new FileDataSource(__DIR__ . '/data.txt'));

try {
    $list1->open();
    $list2->open();
} catch (Exception $e) {
    die($e->getMessage());
}

$data = $list1->read();
echo $data;

echo PHP_EOL;

$data = $list2->readWithEncode();
echo $data;
