<?php

declare(strict_types = 1);

namespace TimiTao\ValueObject\Utils;

use TimiTao\ValueObject\StringValueObject as StringValueObjectInterface;

abstract class StringValueObject extends ValueObject implements StringValueObjectInterface
{
    /** @var string */
    private $value;

    public function __construct(string $type, string $value)
    {
        parent::__construct($type);
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function equal(self $object): bool
    {
        return $this->value === $object->value
            && $this->isType($object->getType());
    }
}
