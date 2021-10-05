<?php
/**
 * This file is part of the Timitao\ValueObject.
 * (c) Tomasz Kunicki <kunicki.tomasz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\Required\AbstractClass\DateTime;

use DateTime;
use DateTimeImmutable;
use TimiTao\ValueObject\Contract\Required\DateTime\DateFormatValueObject as DateFormatValueObjectInterface;
use TimiTao\ValueObject\Standard\Required\Trait\DateTime\DateFormatValueObjectTrait;

abstract class DateFormatValueObject implements DateFormatValueObjectInterface
{
    use DateFormatValueObjectTrait;

    public function __construct(DateTimeImmutable $value, string $format = DateTime::ATOM)
    {
        $this->value = $value;
        $this->format = $format;
    }
}
