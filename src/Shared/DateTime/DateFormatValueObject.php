<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Shared\DateTime;

use DateTime;
use DateTimeImmutable;
use Exception;
use InvalidArgumentException;
use TimiTao\ValueObject\Core\DateTime\DateFormatValueObject as DateFormatValueObjectInterface;
use TimiTao\ValueObject\Core\Standard\StringValueObject;

abstract class DateFormatValueObject implements DateFormatValueObjectInterface
{
    private $value;

    private $format;

    public function __construct(DateTimeImmutable $value, string $format = DateTime::ATOM)
    {
        $this->guard($value);
        $this->value = $value;
        $this->format = $format;
    }

    public function getValue(): string
    {
        return $this->value->format($this->format);
    }

    public function getDateTime(): DateTimeImmutable
    {
        return $this->value;
    }

    public function equals(StringValueObject $other): bool
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
