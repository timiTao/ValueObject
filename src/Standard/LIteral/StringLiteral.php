<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\Literal;

interface StringLiteral
{
    public function getValue(): string;
}
