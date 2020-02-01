<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Nullable\Literal;

interface ArrayLiteral
{
    public function getValue(): ?array;
}
