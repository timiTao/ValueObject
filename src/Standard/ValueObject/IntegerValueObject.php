<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\ValueObject;

use TimiTao\ValueObject\Standard\Literal\IntegerLiteral;

interface IntegerValueObject extends IntegerLiteral
{
    public function equals(self $other): bool;
}
