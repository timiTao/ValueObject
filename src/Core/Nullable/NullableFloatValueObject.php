<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Nullable;

use Exception;
use TimiTao\ValueObject\Core\Standard\FloatValueObject;

interface NullableFloatValueObject extends FloatValueObject, NullableValueObject
{
    /**
     * @throws Exception when expected value is not float
     */
    public function getValue(): float;
}
