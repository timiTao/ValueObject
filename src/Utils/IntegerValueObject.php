<?php

declare(strict_types = 1);

namespace TimiTao\ValueObject\Utils;

use TimiTao\ValueObject\IntegerValueObject as IntegerValueObjectInterface;

abstract class IntegerValueObject extends ValueObject implements IntegerValueObjectInterface
{
    /** @var int */
    private $value;

    public function __construct(string $type, int $value)
    {
        parent::__construct($type);
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function equal(IntegerValueObjectInterface $object): bool
    {
        if ($object instanceof ValueObject){
            return $this->value === $object->getValue()
                && $this->isType($object->getType());
        } else {
            return $this->value === $object->getValue();
        }
    }
}
