<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Nullable;

interface NullableValueObject
{
    public function isNull(): bool;
}
