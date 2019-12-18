<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Standard;

interface IntegerValueObject
{
    public function getValue(): int;

    public function equals(self $other): bool;
}
