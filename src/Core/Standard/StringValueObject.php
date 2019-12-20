<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Standard;

use TimiTao\ValueObject\Core\Literal\StringLiteral;

interface StringValueObject extends StringLiteral
{
    public function equals(self $other): bool;
}
