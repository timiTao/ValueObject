<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Beberlei\Nullable;

use DateTime;
use DateTimeImmutable;
use Exception;
use TimiTao\ValueObject\Nullable\DateTime\DateFormatValueObject as DateFormatValueObjectInterface;

abstract class DateFormatValueObject implements DateFormatValueObjectInterface
{
    private $value;

    private $format;

    /**
     * @throws Exception if value is invalid
     */
    public function __construct(?DateTimeImmutable $value, string $format = DateTime::ATOM)
    {
        $this->guard($value, $format);
        $this->value = $value;
        $this->format = $format;
    }

    public function equals(DateFormatValueObjectInterface $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        if ($this->getValue() === null xor $other->getValue() === null) {
            return false;
        }
        if ($this->getValue() === $other->getValue()) {
            return true;
        }
        /** @var DateTimeImmutable $dateTime */
        $dateTime = $this->getDateTime();
        /** @var DateTimeImmutable $otherDateTime */
        $otherDateTime = $other->getDateTime();
        return $dateTime->getTimestamp() === $otherDateTime->getTimestamp();
    }

    public function getValue(): ?string
    {
        if ($this->value === null) {
            return null;
        }
        return $this->value->format($this->format);
    }

    public function getDateTime(): ?DateTimeImmutable
    {
        return $this->value;
    }

    /**
     * @throws Exception if value is invalid
     */
    abstract protected function guard(?DateTimeImmutable $value, string $format): void;
}
