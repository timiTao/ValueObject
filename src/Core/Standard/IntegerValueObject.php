<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Standard;

use TimiTao\ValueObject\Core\Literal\IntegerLiteral;

interface IntegerValueObject extends IntegerLiteral
{
    public function equals(self $other): bool;
}
