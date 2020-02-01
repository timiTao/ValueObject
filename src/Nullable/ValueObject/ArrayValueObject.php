<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Nullable\ValueObject;

use TimiTao\ValueObject\Nullable\Literal\ArrayLiteral;

interface ArrayValueObject extends ArrayLiteral
{
    public function equals(self $other): bool;
}
