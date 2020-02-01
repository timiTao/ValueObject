<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\Literal;

interface ArrayLiteral
{
    public function getValue(): array;
}
