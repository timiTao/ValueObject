<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\ValueObject;

use TimiTao\ValueObject\Standard\Literal\BooleanLiteral;

interface BooleanValueObject extends BooleanLiteral
{
    public function equals(self $other): bool;
}
