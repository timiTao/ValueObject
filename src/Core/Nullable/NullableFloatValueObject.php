<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Nullable;

use Exception;
use TimiTao\ValueObject\Core\Literal\FloatLiteral;

interface NullableFloatValueObject extends FloatLiteral, NullableValueObject
{
    /**
     * @throws Exception when expected value is not float
     */
    public function getValue(): float;

    public function equals(self $other): bool;
}
