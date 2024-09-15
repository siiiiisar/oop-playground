<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\ConcreteClass;

use Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\AbstractClass\AbstractDisplay;

/**
 * ConcreteClassクラスに相当する
 * 
 * 表形式でデータを表示する
 */
class TableDisplay extends AbstractDisplay
{
    /**
     * @inheritDoc
     */
    protected function displayHeader(): void
    {
        echo '<table border="1">';
    }

    /**
     * @inheritDoc
     */
    protected function displayBody(): void
    {
        foreach ($this->getData() as $key => $value) {
            echo '<tr>';
            echo '<th>' . $key . '</th>';
            echo '<td>' . $value . '</td>';
            echo '</tr>';
        }
    }

    /**
     * @inheritDoc
     */
    protected function displayFooter(): void
    {
        echo '</table>';
    }
}