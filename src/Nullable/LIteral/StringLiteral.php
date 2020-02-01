<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Nullable\Literal;

interface StringLiteral
{
    public function getValue(): ?string;
}
