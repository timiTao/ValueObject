<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Standard;

interface ArrayValueObject
{
    public function getValue(): array;

    public function equals(self $other): bool;
}
