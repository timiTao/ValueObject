<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Standard;

use TimiTao\ValueObject\Core\Literal\BooleanLiteral;

interface BooleanValueObject extends BooleanLiteral
{
    public function equals(self $other): bool;
}
