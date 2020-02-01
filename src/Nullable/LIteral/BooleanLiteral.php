<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Nullable\Literal;

interface BooleanLiteral
{
    public function getValue(): ?bool;
}
