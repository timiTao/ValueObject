<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Nullable\Literal;

interface FloatLiteral
{
    public function getValue(): ?float;
}
