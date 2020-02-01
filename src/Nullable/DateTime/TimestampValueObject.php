<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Nullable\DateTime;

use TimiTao\ValueObject\Nullable\Literal\IntegerLiteral;

interface TimestampValueObject extends IntegerLiteral, DateTimeValueObject
{
    public function equals(self $other): bool;
}
