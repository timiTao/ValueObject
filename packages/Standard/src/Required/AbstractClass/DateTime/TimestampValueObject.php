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

use DateTimeImmutable;
use TimiTao\ValueObject\Contract\Required\DateTime\TimestampValueObject as TimestampValueObjectInterface;
use TimiTao\ValueObject\Standard\Required\Trait\DateTime\TimestampValueObjectTrait;

abstract class TimestampValueObject implements TimestampValueObjectInterface
{
    use TimestampValueObjectTrait;

    public function __construct(DateTimeImmutable $value)
    {
        $this->value = $value;
    }
}
