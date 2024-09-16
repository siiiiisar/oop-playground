<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Enum;

enum Material: string
{
    case GOLD = 'gold';

    case SILVER = 'silver';

    case BRONZE = 'bronze';

    /**
     * @return string
     */
    public function text(): string
    {
        return match ($this) {
            self::GOLD => '金',
            self::SILVER => '銀',
            self::BRONZE => '銅'
        };
    }
}
