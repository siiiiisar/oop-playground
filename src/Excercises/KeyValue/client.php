<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\Excercises\KeyValue;

require __DIR__ . '/../../../vendor/autoload.php';

$key = new Key(1);
$keyValueStore = new KeyValueStore();
// キーと値を追加
$keyValueStore[$key] = 'value1';
echo $keyValueStore[$key] . PHP_EOL;
// 値の更新
$keyValueStore[$key] = 'value_change';
echo $keyValueStore[$key] . PHP_EOL;

$key2 = new Key(12);
$keyValueStore[$key2] = 'value2';
echo $keyValueStore[$key2] . PHP_EOL;
// 反復処理
foreach ($keyValueStore as $key => $value) {
    echo $key  . '=>' . $value . PHP_EOL;
}
// カウント
echo $keyValueStore->count();


