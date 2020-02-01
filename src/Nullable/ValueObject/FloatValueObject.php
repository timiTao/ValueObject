<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Nullable\ValueObject;

use TimiTao\ValueObject\Nullable\Literal\FloatLiteral;

interface FloatValueObject extends FloatLiteral
{
    public function equals(self $other): bool;
}
