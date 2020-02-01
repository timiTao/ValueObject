<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\ValueObject;

use TimiTao\ValueObject\Standard\Literal\FloatLiteral;

interface FloatValueObject extends FloatLiteral
{
    public function equals(self $other): bool;
}
