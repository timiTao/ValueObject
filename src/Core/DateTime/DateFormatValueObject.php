<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\DateTime;

use TimiTao\ValueObject\Core\Literal\StringLiteral;

interface DateFormatValueObject extends StringLiteral, DateTimeValueObject
{
    public function equals(self $other): bool;
}
