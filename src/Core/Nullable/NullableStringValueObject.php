<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Nullable;

use Exception;
use TimiTao\ValueObject\Core\Literal\StringLiteral;

interface NullableStringValueObject extends StringLiteral, NullableValueObject
{
    /**
     * @throws Exception when expected value is not string
     */
    public function getValue(): string;

    public function equals(self $other): bool;
}
