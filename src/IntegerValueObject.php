<?php

declare(strict_types = 1);

namespace TimiTao\ValueObject;

interface IntegerValueObject
{
    public function getValue(): int;

    public function equal(self $object): bool;
}
