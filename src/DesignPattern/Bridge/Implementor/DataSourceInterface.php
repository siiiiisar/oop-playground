<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Bridge\Implementor;

/**
 * どうやって実現するのかの抽象
 */
interface DataSourceInterface
{
    /**
     * @return void
     */
    public function open(): void;

    /**
     * @return string
     */
    public function read(): string;
}