<?php

declare(strict_types=1);

trait Singletonnable
{
    private static $instance;

    static public function getInstance(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

class SomeManager
{
    use Singletonnable;

    public function getSomething(): void
    {
        echo 'something';
    }
}

class AnyManager
{
    use Singletonnable;

    public function getAnything(): void
    {
        echo 'anything';
    }
}

$manager = SomeManager::getInstance();
$manager->getSomething();

$manager = AnyManager::getInstance();
$manager->getAnything();