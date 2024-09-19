<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\Excercises\KeyValue;

use Exception;

require __DIR__ . '/../../../vendor/autoload.php';

echo '---------------------------------------------------' . PHP_EOL;
echo '-------------------KeyValue------------------------' . PHP_EOL;
echo '---------------------------------------------------' . PHP_EOL;

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
echo $keyValueStore->count() . PHP_EOL;

echo '---------------------------------------------------' . PHP_EOL;
echo '-------------------KeyedCache----------------------' . PHP_EOL;
echo '---------------------------------------------------' . PHP_EOL;

$cache = new KeyedCache();

$key1 = new Key(1);
$key2 = new Key(2);
$key3 = new Key(3);

$cache->set($key1, 'Value 1');
$cache->set($key2, 'Value 2');
$cache->set($key3, 'Value 3');

try {
    echo $cache->get($key2) . PHP_EOL;
} catch (Exception $e) {
    echo 'エラー: ' . $e->getMessage() . PHP_EOL;
}

// 既存のエントリを上書き
$cache->set($key2, 'Updated Value 2');
echo $cache->get($key2) . PHP_EOL;

// 反復処理
try {
    foreach ($cache as $key => $value) {
        echo 'キー: ' . $key . ', 値: ' . $value . PHP_EOL;
        // 反復処理中にキャッシュを変更しようとする（例外がスローされる）
        if ($key == '2') {
            $cache->set(new Key(4), 'Value 4');
        }
    }
} catch (Exception $e) {
    echo 'エラー: ' . $e->getMessage() . PHP_EOL;
}

// キャッシュをクリア
$cache->clear();
echo 'キャッシュ内の要素数: ' . count($cache) . PHP_EOL;


