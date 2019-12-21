<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Shared\DateTime;

use DateTime;
use DateTimeImmutable;
use Exception;
use Throwable;
use TimiTao\ValueObject\Core\DateTime\DateFormatValueObject as DateFormatValueObjectInterface;

abstract class DateFormatValueObject implements DateFormatValueObjectInterface
{
    private $value;

    private $format;

    /**
     * @throws Exception if value is invalid
     */
    public function __construct(DateTimeImmutable $value, string $format = DateTime::ATOM)
    {
        try {
            $this->guard($value);
        } catch (Throwable $e) {
            throw $this->throwException($value);
        }
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
     * @throws Throwable if value is invalid
     */
    abstract protected function guard(DateTimeImmutable $value): void;

    abstract protected function throwException(DateTimeImmutable $value): Exception;
}
