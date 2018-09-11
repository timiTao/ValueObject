<?php

declare(strict_types = 1);

namespace TimiTao\ValueObject;

interface BooleanValueObject
{
    public function getValue(): bool;

    public function equal(BooleanValueObject $object): bool;
}
