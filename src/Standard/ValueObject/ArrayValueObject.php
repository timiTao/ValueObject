<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\ValueObject;

use TimiTao\ValueObject\Standard\Literal\ArrayLiteral;

interface ArrayValueObject extends ArrayLiteral
{
    public function equals(self $other): bool;
}
