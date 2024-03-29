<?php
/**
 * This file is part of the Timitao\ValueObject.
 * (c) Tomasz Kunicki <kunicki.tomasz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\Required\Trait\DateTime;

use DateTimeImmutable;
use TimiTao\ValueObject\Contract\Required\DateTime\TimestampValueObject;
use TimiTao\ValueObject\Standard\CheckClassTrait;

trait TimestampValueObjectTrait
{
    use CheckClassTrait;

    private DateTimeImmutable $value;

    public function getDateTime(): DateTimeImmutable
    {
        return $this->value;
    }

    public function equals(TimestampValueObject $other): bool
    {
        if (!$this->isSameClass($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    public function getValue(): int
    {
        return $this->value->getTimestamp();
    }
}
