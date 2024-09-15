<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\Security;

use Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\RequestHandler\RequestHandlerInterface;

abstract class AbstractCheckedHandler implements RequestHandlerInterface
{
    public function handle(int $token): void
    {
        if (
            $this->checkCommonly($token) &&
            $this->checkExternally($token)
        ) {
            echo "OK\n";
        }else {
            echo "エラー\n";
        }
    }

    private function checkCommonly(int $token): bool
    {
        return $token % 2 === 0;
    }

    abstract protected function checkExternally(int $token): bool;
}