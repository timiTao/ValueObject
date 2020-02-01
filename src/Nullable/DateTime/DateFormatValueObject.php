<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Nullable\DateTime;

use TimiTao\ValueObject\Nullable\Literal\StringLiteral;

interface DateFormatValueObject extends StringLiteral, DateTimeValueObject
{
    public function equals(self $other): bool;
}
