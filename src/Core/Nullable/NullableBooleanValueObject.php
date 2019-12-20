<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Nullable;

use Exception;
use TimiTao\ValueObject\Core\Literal\BooleanLiteral;

interface NullableBooleanValueObject extends BooleanLiteral, NullableValueObject
{
    /**
     * @throws Exception when expected value is not bool
     */
    public function getValue(): bool;

    public function equals(self $other): bool;
}
