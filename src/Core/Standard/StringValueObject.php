<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Standard;

interface StringValueObject
{
    public function getValue(): string;

    public function equals(self $other): bool;
}
