<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Nullable\Literal;

interface IntegerLiteral
{
    public function getValue(): ?int;
}
