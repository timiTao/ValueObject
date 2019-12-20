<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Literal;

interface StringLiteral
{
    public function getValue(): string;
}
