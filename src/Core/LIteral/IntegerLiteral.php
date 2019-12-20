<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Literal;

interface IntegerLiteral
{
    public function getValue(): int;
}
