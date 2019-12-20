<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Standard;

use TimiTao\ValueObject\Core\Literal\FloatLiteral;

interface FloatValueObject extends FloatLiteral
{
    public function equals(self $other): bool;
}
