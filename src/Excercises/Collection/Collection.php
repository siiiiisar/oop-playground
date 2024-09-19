<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\Excercises\Collection;

use InvalidArgumentException;
use Iterator;
use OutOfBoundsException;

class Collection implements Iterator
{
    private array $items = [];
    private int $position;

    public function __construct(
        private string $type // int or string
    ) {
        if (!class_exists($type) && !interface_exists($type) && !in_array($type, ['int', 'string'])) {
            throw new InvalidArgumentException('無効な型が指定されました。');
        }
        $this->position = 0;
    }

    public function add($item)
    {
        if (!$this->checkType($item)) {
            throw new InvalidArgumentException('無効な型が指定されました。');
        }
        $this->items[] = $item;
    }

    public function remove($item)
    {
        $key = array_search($item, $this->items, true);
        if (!$key) {
            throw new OutOfBoundsException('指定された要素は存在しません。');
        }
        unset($this->items[$key]);
        $this->items = array_values($this->items); // インデックスを再編成
    }

    public function get(int $index)
    {
        if (!isset($this->items[$index])) {
            throw new OutOfBoundsException("指定されたインデックスは存在しません。");
        }
        return $this->items[$index];
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function next(): void
    {
        $this->position++;
    }

    public function current(): mixed
    {
        return $this->items[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->items[$this->position]);
    }

    private function checkType($item): bool
    {
        $type = $this->type;
        return match ($type) {
            'int' => is_int($item),
            'string' => is_string($item),// 略
            default => $item instanceof $type
        };
    }
}