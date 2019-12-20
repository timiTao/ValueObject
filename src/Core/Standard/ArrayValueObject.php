<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Standard;

use TimiTao\ValueObject\Core\Literal\ArrayLiteral;

interface ArrayValueObject extends ArrayLiteral
{
    public function equals(self $other): bool;
}
