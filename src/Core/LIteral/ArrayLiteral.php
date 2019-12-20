<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Literal;

interface ArrayLiteral
{
    public function getValue(): array;
}
