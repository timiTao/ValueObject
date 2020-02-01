<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\DateTime;

use TimiTao\ValueObject\Standard\Literal\IntegerLiteral;

interface TimestampValueObject extends IntegerLiteral, DateTimeValueObject
{
    public function equals(self $other): bool;
}
