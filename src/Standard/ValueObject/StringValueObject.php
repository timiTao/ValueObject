<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\ValueObject;

use TimiTao\ValueObject\Standard\Literal\StringLiteral;

interface StringValueObject extends StringLiteral
{
    public function equals(self $other): bool;
}
