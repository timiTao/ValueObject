<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Beberlei\Nullable;

/**
 * @method getValue()
 *
 * @see \TimiTao\ValueObject\Core\Nullable\NullableValueObject
 */
trait NullableTrait
{
    public function isNull(): bool
    {
        return $this->getValue() === null;
    }
}
