<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\Nullable;

use Exception;
use TimiTao\ValueObject\Core\Standard\ArrayValueObject;

interface NullableArrayValueObject extends ArrayValueObject, NullableValueObject
{
    /**
     * @throws Exception when expected value is not array
     */
    public function getValue(): array;
}
