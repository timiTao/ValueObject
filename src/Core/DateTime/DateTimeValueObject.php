<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\DateTime;

use DateTimeImmutable;

interface DateTimeValueObject
{
    public function getDateTime(): DateTimeImmutable;
}
