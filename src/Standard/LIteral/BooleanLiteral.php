<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\Literal;

interface BooleanLiteral
{
    public function getValue(): bool;
}
