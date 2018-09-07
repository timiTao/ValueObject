<?php

declare(strict_types = 1);

namespace TimiTao\ValueObject;

interface StringValueObject
{
    public function getValue(): string;

    public function equal(self $object): bool;
}