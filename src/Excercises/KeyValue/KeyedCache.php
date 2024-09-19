<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\Excercises\KeyValue;

use Countable;
use IteratorAggregate;
use LogicException;
use OutOfBoundsException;
use Traversable;

class KeyedCache implements IteratorAggregate, Countable
{
    private array $cache = [];
    private array $keys = [];
    private bool $isIterating = false;

    /**
     * @param KeyInterface $key
     * @param string $entry
     * @return void
     */
    public function set(KeyInterface $key, string $entry): void
    {
        if ($this->isIterating) {
            throw new LogicException("反復処理中にキャッシュを変更することはできません。");
        }
        if (!isset($this->cache[$key->getKey()])) {
            $this->keys[] = $key->getKey();
        }
        $this->cache[$key->getKey()] = $entry;
    }

    /**
     * @param KeyInterface $key
     * @return string
     */
    public function get(KeyInterface $key): string 
    {
        if (!isset($this->cache[$key->getKey()])) {
            throw new OutOfBoundsException('キーが存在しません。');
        }
        return $this->cache[$key->getKey()];
    }

    /**
     * @param KeyInterface $key
     * @return void
     */
    public function delete(KeyInterface $key): void
    {
        if ($this->isIterating) {
            throw new LogicException("反復処理中にキャッシュを変更することはできません。");
        }
        if (!isset($this->cache[$key->getKey()])) {
            throw new OutOfBoundsException("キーが存在しません");
        }
        unset($this->cache[$key->getKey()]);
        $this->keys = array_keys($this->cache);
    }

    /**
     * @param KeyInterface $key
     * @return boolean
     */
    public function has(KeyInterface $key): bool
    {
        return isset($this->cache[$key->getKey()]);
    }

    /**
     * @return void
     */
    public function clear(): void
    {
        if ($this->isIterating) {
            throw new LogicException("反復処理中にキャッシュを変更することはできません。");
        }
        $this->cache = [];
        $this->keys = [];
    }

    /**
     * @return Traversable
     */
    public function getIterator(): Traversable
    {
        $this->isIterating = true;
        try {
            foreach ($this->keys as $key) {
                yield $key => $this->cache[$key];
            }
        } finally {
            $this->isIterating = false;
        }
    }

    /**
     * @return integer
     */
    public function count(): int
    {
        return count($this->cache);
    }
}