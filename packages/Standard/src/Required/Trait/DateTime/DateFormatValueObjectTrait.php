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
use TimiTao\ValueObject\Contract\Required\DateTime\DateFormatValueObject;
use TimiTao\ValueObject\Standard\CheckClassTrait;

trait DateFormatValueObjectTrait
{
    use CheckClassTrait;

    private DateTimeImmutable $value;

    private string $format;

    public function getValue(): string
    {
        return $this->value->format($this->format);
    }

    public function equals(DateFormatValueObject $other): bool
    {
        if (!$this->isSameClass($other)) {
            return false;
        }
        return $this->getDateTime()->getTimestamp() === $other->getDateTime()->getTimestamp();
    }

    public function getDateTime(): DateTimeImmutable
    {
        return $this->value;
    }
}
