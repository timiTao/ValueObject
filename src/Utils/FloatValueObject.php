<?php

declare(strict_types = 1);

namespace TimiTao\ValueObject\Utils;

use TimiTao\ValueObject\FloatValueObject as FloatValueObjectInterface;

abstract class FloatValueObject extends ValueObject implements FloatValueObjectInterface
{
    /** @var  float */
    private $value;

    public function __construct(string $type, float $value)
    {
        parent::__construct($type);
        $this->value = $value;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function equal(FloatValueObjectInterface $object): bool
    {
        if ($object instanceof ValueObject){
            return $this->value === $object->getValue()
                && $this->isType($object->getType());
        } else {
            return $this->value === $object->getValue();
        }
    }
}
