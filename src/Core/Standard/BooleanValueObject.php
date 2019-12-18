<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Standard;

interface BooleanValueObject
{
    public function getValue(): bool;

    public function equals(self $other): bool;
}
