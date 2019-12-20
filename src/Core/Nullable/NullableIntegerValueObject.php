<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Nullable;

use Exception;
use TimiTao\ValueObject\Core\Literal\IntegerLiteral;

interface NullableIntegerValueObject extends IntegerLiteral, NullableValueObject
{
    /**
     * @throws Exception when expected value is not integer
     */
    public function getValue(): int;

    public function equals(self $other): bool;
}
