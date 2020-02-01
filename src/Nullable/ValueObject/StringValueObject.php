<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Nullable\ValueObject;

use TimiTao\ValueObject\Nullable\Literal\StringLiteral;

interface StringValueObject extends StringLiteral
{
    public function equals(self $other): bool;
}
