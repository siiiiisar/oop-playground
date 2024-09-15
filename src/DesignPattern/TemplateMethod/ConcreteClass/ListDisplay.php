<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\ConcreteClass;

use Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\AbstractClass\AbstractDisplay;

/**
 * ConcreteClassクラスに相当する
 * 
 * 一覧形式でデータを表示する
 */
class ListDisplay extends AbstractDisplay
{
    /**
     * @inheritDoc
     */
    protected function displayHeader(): void
    {
        echo '<dl>';
    }

    /**
     * @inheritDoc
     */
    protected function displayBody(): void
    {
        foreach ($this->getData() as $key => $value) {
            echo '<dt>Item' . $key . '</dt>';
            echo '<dd>' . $value . '</dd>';
        }
    }

    /**
     * @inheritDoc
     */
    protected function displayFooter(): void
    {
        echo '</dl>';
    }
}