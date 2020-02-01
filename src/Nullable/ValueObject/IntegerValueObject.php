<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Nullable\ValueObject;

use TimiTao\ValueObject\Nullable\Literal\IntegerLiteral;

interface IntegerValueObject extends IntegerLiteral
{
    public function equals(self $other): bool;
}
