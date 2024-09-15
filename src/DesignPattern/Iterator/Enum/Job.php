<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Iterator\Enum;

enum Job: string
{
    case SALES = 'sales';
    case HR = 'human_resource';
    case MANAGER = 'manager';

    public function text(): string
    {
        return match ($this) {
            self::SALES => '営業',
            self::HR => '人事',
            self::MANAGER => 'マネージャー'
        };
    }
}