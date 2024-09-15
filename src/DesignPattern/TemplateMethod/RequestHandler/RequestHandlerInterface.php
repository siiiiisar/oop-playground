<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\TemplateMethod\RequestHandler;

interface RequestHandlerInterface
{
    public function handle(int $token): void;
}