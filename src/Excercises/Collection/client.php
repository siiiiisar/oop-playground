<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\Excercises\Collection;

use Exception;
use Siiiiisar\OopPlayground\Excercises\KeyValue\Key;

require __DIR__ . '/../../../vendor/autoload.php';

$collection = new Collection('string');
$collection->add('value1');
$collection->add('value2');
$collection->add('value3');
foreach ($collection as $item) {
    echo $item . PHP_EOL;
}
try {
    $collection->add(1);
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

$collection2 = new Collection('int');
$collection2->add(123);
$collection2->add(456);
$collection2->add(PHP_INT_MAX);
foreach ($collection2 as $item) {
    echo $item . PHP_EOL;
}
try {
    $collection2->add('invalid-value');
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

$collection3 = new Collection(Key::class);
$collection3->add(new Key(1));
$collection3->add(new Key(12));
$collection3->add(new Key(18));
foreach ($collection3 as $item) {
    assert($item instanceof Key);
    echo $item->getKey() . PHP_EOL;
}
try {
    $collection3->add('invalid-value');
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}