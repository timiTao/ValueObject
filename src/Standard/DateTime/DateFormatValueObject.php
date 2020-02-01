<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\DateTime;

use TimiTao\ValueObject\Standard\Literal\StringLiteral;

interface DateFormatValueObject extends StringLiteral, DateTimeValueObject
{
    public function equals(self $other): bool;
}
