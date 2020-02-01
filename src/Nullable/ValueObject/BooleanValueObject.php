<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Nullable\ValueObject;

use TimiTao\ValueObject\Nullable\Literal\BooleanLiteral;

interface BooleanValueObject extends BooleanLiteral
{
    public function equals(self $other): bool;
}
