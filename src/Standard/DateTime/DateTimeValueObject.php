<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\DateTime;

use DateTimeImmutable;

interface DateTimeValueObject
{
    public function getDateTime(): DateTimeImmutable;
}
