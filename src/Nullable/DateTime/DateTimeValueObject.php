<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Nullable\DateTime;

use DateTimeImmutable;

interface DateTimeValueObject
{
    public function getDateTime(): ?DateTimeImmutable;
}
