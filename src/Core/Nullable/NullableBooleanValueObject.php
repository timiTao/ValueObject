<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Nullable;

use Exception;
use TimiTao\ValueObject\Core\Standard\BooleanValueObject;

interface NullableBooleanValueObject extends BooleanValueObject, NullableValueObject
{
    /**
     * @throws Exception when expected value is not bool
     */
    public function getValue(): bool;
}
