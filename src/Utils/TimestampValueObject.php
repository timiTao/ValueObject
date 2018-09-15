<?php

declare(strict_types = 1);

namespace TimiTao\ValueObject\Utils;

use DateTime;
use DateTimeImmutable;
use TimiTao\ValueObject\TimestampValueObject as TimestampValueObjectInterface;

abstract class TimestampValueObject extends ValueObject implements TimestampValueObjectInterface
{
    /** @var  DateTimeImmutable */
    protected $value;

    /** @var  string */
    private $format;

    public function __construct(string $type, DateTimeImmutable $value, string $format = DateTime::ATOM)
    {
        parent::__construct($type);
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

    public function equal(TimestampValueObjectInterface $object): bool
    {
        if ($object instanceof ValueObject) {
            return $this->value === $object->getValue()
                && $this->isType($object->getType());
        } else {
            return $this->value === $object->getValue();
        }
    }
}
