<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\Excercises\KeyValue;

use ArrayAccess;
use Countable;
use InvalidArgumentException;
use Iterator;
use OutOfBoundsException;

class KeyValueStore implements ArrayAccess, Iterator, Countable
{
    private int $position = 0;
    private array $values = [];
    private array $keys = [];

    /**
     * @inheritDoc
     */
    public function offsetExists($offset): bool
    {
        if (!$offset instanceof KeyInterface) {
            throw new InvalidArgumentException('キーはKeyInterfaceを実装している必要があります。');
        }
        return isset($this->values[$offset->getKey()]);
    }

    /**
     * @inheritDoc
     */
    public function offsetGet(mixed $offset): mixed
    {
        if (!$offset instanceof KeyInterface) {
            throw new InvalidArgumentException('キーはKeyInterfaceを実装している必要があります。');
        }

        $key = $offset->getKey();
        if ($this->values[$key]) {
            return $this->values[$key];   
        } else {
            throw new OutOfBoundsException('指定されたキーは存在しません。');
        }
    }

    /**
     * @inheritDoc
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (!$offset instanceof KeyInterface) {
            throw new InvalidArgumentException('キーはKeyInterfaceを実装している必要があります。');
        }
        $key = $offset->getKey();
        $this->values[$key] = $value;
        $this->keys = array_keys($this->values);
    }

    /**
     * @inheritDoc
     */
    public function offsetUnset(mixed $offset): void
    {
        if (!$offset instanceof KeyInterface) {
            throw new InvalidArgumentException('キーはKeyInterfaceを実装している必要があります。');
        }
        unset($this->values[$offset->getKey()]);
        $this->keys = array_keys($this->values);
    }

    /**
     * @inheritDoc
     */
    public function current(): mixed
    {
        $key = $this->keys[$this->position];
        return $this->values[$key];
    }

    /**
     * @inheritDoc
     */
    public function next(): void
    {
        $this->position++;
    }

    /**
     * @inheritDoc
     */
    public function key(): mixed
    {
        return $this->keys[$this->position];
    }

    /**
     * @inheritDoc
     */
    public function valid(): bool
    {
        return isset($this->keys[$this->position]);
    }

    /**
     * @inheritDoc
     */
    public function rewind(): void
    {
        $this->position = 0;
        $this->keys = array_keys($this->values);
    }

    /**
     * @inheritDoc
     */
    public function count(): int
    {
        return count($this->values);
    }
}