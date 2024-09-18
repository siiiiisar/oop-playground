<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\Excercises\KeyValue;

class Key implements KeyInterface
{
    /**
     * @param int $key
     */
    public function __construct(
        private int $key,
    ) {
    }

    /**
     * @inheritDoc
     */
    public function getKey(): int
    {
        return $this->key;
    }
}