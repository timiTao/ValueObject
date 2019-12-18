<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Nullable;

use Exception;
use TimiTao\ValueObject\Core\Standard\IntegerValueObject;

interface NullableIntegerValueObject extends IntegerValueObject, NullableValueObject
{
    /**
     * @throws Exception when expected value is not integer
     */
    public function getValue(): int;
}