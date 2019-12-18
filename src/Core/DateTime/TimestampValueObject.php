<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Core\DateTime;

use TimiTao\ValueObject\Core\Standard\IntegerValueObject;

interface TimestampValueObject extends IntegerValueObject, DateTimeValueObject
{
}
