<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Literal;

interface BooleanLiteral
{
    public function getValue(): bool;
}
