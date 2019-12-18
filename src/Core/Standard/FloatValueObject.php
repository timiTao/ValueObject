<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Standard;

interface FloatValueObject
{
    public function getValue(): float;

    public function equals(self $other): bool;
}
