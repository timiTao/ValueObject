<?php

declare(strict_types = 1);

namespace TimiTao\ValueObject\Utils;

use DateTimeImmutable;
use DateTimeInterface;
use TimiTao\ValueObject\TimestampValueObject as TimestampValueObjectInterface;

abstract class TimestampValueObject extends ValueObject implements TimestampValueObjectInterface
{
    /** @var  DateTimeImmutable */
    protected $value;

    /** @var  string */
    private $format;

    public function __construct(string $type, DateTimeImmutable $value, string $format = DateTimeInterface::ATOM)
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

    public function equal(self $object): bool
    {
        return $this->getValue() === $object->getValue()
            && $this->isType($object->getType());
    }
}
