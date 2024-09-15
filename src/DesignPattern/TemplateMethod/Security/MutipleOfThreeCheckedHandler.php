<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\Security;

use Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\RequestHandler\RequestHandlerInterface;

class MutipleOfThreeCheckedHandler extends AbstractCheckedHandler
{
    protected function checkExternally(int $token): bool
    {
        return $token % 3 === 0;
    }
}