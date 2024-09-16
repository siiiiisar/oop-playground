<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Bridge\DataSourceListing\RefinedAbstraction;

use Siiiiisar\OopPlayground\DesignPattern\Bridge\DataSourceListing\Abstraction\Listing;
use Siiiiisar\OopPlayground\DesignPattern\Bridge\DataSourceListing\Implementor\DataSourceInterface;

/**
 * Listingの機能を拡張
 */
class ExtendedListing extends Listing
{
    public function __construct(
        private DataSourceInterface $dataSource
    ) {
        parent::__construct($dataSource);
    }

    /**
     * @return string
     */
    public function readWithEncode(): string
    {
        return htmlspecialchars($this->read(), ENT_QUOTES, 'UTF-8');
    }
}
