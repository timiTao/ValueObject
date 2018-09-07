<?php

declare(strict_types = 1);

namespace TimiTao\ValueObject;

use DateTimeImmutable;

interface TimestampValueObject
{
    public function getValue(): string;

    public function getDateTime(): DateTimeImmutable;

    public function equal(self $object): bool;
}