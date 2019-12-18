<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Shared\DateTime;

use DateTimeImmutable;
use Exception;
use InvalidArgumentException;
use TimiTao\ValueObject\Core\DateTime\TimestampValueObject as TimestampValueObjectInterface;
use TimiTao\ValueObject\Core\Standard\IntegerValueObject;

abstract class TimestampValueObject implements TimestampValueObjectInterface
{
    private $value;

    public function __construct(DateTimeImmutable $value)
    {
        $this->guard($value);
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value->getTimestamp();
    }

    public function getDateTime(): DateTimeImmutable
    {
        return $this->value;
    }

    public function equals(IntegerValueObject $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    /**
     * @throws InvalidArgumentException|Exception if value is invalid
     */
    abstract protected function guard(DateTimeImmutable $value): void;
}
