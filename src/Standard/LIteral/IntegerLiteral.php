<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\Literal;

interface IntegerLiteral
{
    public function getValue(): int;
}
