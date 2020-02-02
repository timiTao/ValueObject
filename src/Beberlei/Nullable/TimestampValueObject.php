<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Beberlei\Nullable;

use DateTimeImmutable;
use Exception;
use TimiTao\ValueObject\Nullable\DateTime\TimestampValueObject as TimestampValueObjectInterface;

abstract class TimestampValueObject implements TimestampValueObjectInterface
{
    private $value;

    /**
     * @throws Exception if value is invalid
     */
    public function __construct(?DateTimeImmutable $value)
    {
        $this->guard($value);
        $this->value = $value;
    }

    public function getDateTime(): ?DateTimeImmutable
    {
        if ($this->value === null) {
            return null;
        }
        return $this->value;
    }

    public function equals(TimestampValueObjectInterface $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    public function getValue(): ?int
    {
        return $this->value->getTimestamp();
    }

    /**
     * @throws Exception if value is invalid
     */
    abstract protected function guard(?DateTimeImmutable $value): void;
}
