<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Nullable;

use Exception;
use TimiTao\ValueObject\Core\Literal\ArrayLiteral;

interface NullableArrayValueObject extends ArrayLiteral, NullableValueObject
{
    /**
     * @throws Exception when expected value is not array
     */
    public function getValue(): array;

    public function equals(self $other): bool;
}
