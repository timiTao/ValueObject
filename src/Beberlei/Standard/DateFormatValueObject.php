<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Beberlei\Standard;

use DateTime;
use DateTimeImmutable;
use Exception;
use TimiTao\ValueObject\Standard\DateTime\DateFormatValueObject as DateFormatValueObjectInterface;

abstract class DateFormatValueObject implements DateFormatValueObjectInterface
{
    private $value;

    private $format;

    /**
     * @throws Exception if value is invalid
     */
    public function __construct(DateTimeImmutable $value, string $format = DateTime::ATOM)
    {
        $this->guard($value, $format);
        $this->value = $value;
        $this->format = $format;
    }

    public function getValue(): string
    {
        return $this->value->format($this->format);
    }

    public function equals(DateFormatValueObjectInterface $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getDateTime()->getTimestamp() === $other->getDateTime()->getTimestamp();
    }

    public function getDateTime(): DateTimeImmutable
    {
        return $this->value;
    }

    /**
     * @throws Exception if value is invalid
     */
    abstract protected function guard(DateTimeImmutable $value, string $format): void;
}
