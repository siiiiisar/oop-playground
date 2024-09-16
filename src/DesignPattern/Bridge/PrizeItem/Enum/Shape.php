<?php

declare(strict_types=1);

namespace Siiiiisar\OopPlayground\DesignPattern\Bridge\PrizeItem\Enum;

enum Shape: string
{
    case CUP = 'cup';

    case MEDAL = 'medal';

    /**
     * @return string
     */
    public function text(): string
    {
        return match ($this) {
            self::CUP => 'トロフィー',
            self::MEDAL => 'メダル',
        };
    }
}
