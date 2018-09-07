<?php

declare(strict_types = 1);

namespace TimiTao\ValueObject;

interface FloatValueObject
{
    public function getValue(): float;

    public function equal(self $object): bool;
}
