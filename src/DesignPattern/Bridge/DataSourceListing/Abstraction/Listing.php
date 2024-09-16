<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Bridge\DataSourceListing\Abstraction;

use Siiiiisar\OopPlayground\DesignPattern\Bridge\DataSourceListing\Implementor\DataSourceInterface;

/**
 * 「何をするのか」
 * DataSourceに処理を委譲する
 */
class Listing
{
    /**
     * @param DataSourceInterface $dataSource
     */
    public function __construct(
        private DataSourceInterface $dataSource
    ) {
    }

    /**
     * @return void
     */
    public function open(): void
    {
        $this->dataSource->open();
    }

    /**
     * @return string
     */
    public function read(): string
    {
        return $this->dataSource->read();
    }
}