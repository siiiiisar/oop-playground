<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Bridge\ConcreteImplementor;

use Exception;
use Siiiiisar\OopPlayground\DesignPattern\Bridge\Implementor\DataSourceInterface;
use SplFileObject;

/**
 * どうやって実現するのかの具体
 */
class FileDataSource implements DataSourceInterface
{
    /**
     * @var SplFileObject
     */
    private SplFileObject $handler;

    /**
     * @param string $sourceName
     */
    public function __construct(
        private string $sourceName
    ){   
    }

    /**
     * @inheritDoc
     */
    public function open(): void
    {
        if (!is_readable($this->sourceName)) {
            throw new Exception('データソースが見つかりません。');
        }
        $this->handler = new SplFileObject($this->sourceName, 'r');
        if (!$this->handler) {
            throw new Exception('データソースのオープンに失敗しました。');
        }
    }

    /**
     * @inheritDoc
     */
    public function read(): string
    {
        return $this->handler->fgets();
    }
}