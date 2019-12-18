<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Nullable;

use Exception;
use TimiTao\ValueObject\Core\Standard\StringValueObject;

interface NullableStringValueObject extends StringValueObject, NullableValueObject
{
    /**
     * @throws Exception when expected value is not string
     */
    public function getValue(): string;
}
