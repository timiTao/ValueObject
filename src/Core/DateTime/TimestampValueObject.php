<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\DateTime;

use TimiTao\ValueObject\Core\Literal\IntegerLiteral;

interface TimestampValueObject extends IntegerLiteral, DateTimeValueObject
{
    public function equals(self $other): bool;
}
