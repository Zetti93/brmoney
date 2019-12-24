<?php

namespace brMoney\Formatter;

class Money
{
    public function toReais(float $value): string
    {
        return 'R$ ' . number_format($value, 2, ',', '.');
    }
}