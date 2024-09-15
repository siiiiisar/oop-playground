<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\Security;

use Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\RequestHandler\RequestHandlerInterface;

class MutipleOfFiveCheckedHandler extends AbstractCheckedHandler
{
    protected function checkExternally(int $token): bool
    {
        return $token % 5 === 0;
    }
}