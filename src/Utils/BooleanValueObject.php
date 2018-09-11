<?php

declare(strict_types = 1);

namespace TimiTao\ValueObject\Utils;

use TimiTao\ValueObject\BooleanValueObject as BooleanValueObjectInterface;

abstract class BooleanValueObject extends ValueObject implements BooleanValueObjectInterface
{
    /** @var  bool */
    private $value;

    public function __construct(string $type, bool $value)
    {
        parent::__construct($type);
        $this->value = $value;
    }

    public function getValue(): bool
    {
        return $this->value;
    }

    public function equal(BooleanValueObjectInterface $object): bool
    {
        if ($object instanceof ValueObject){
            return $this->value === $object->getValue()
                && $this->isType($object->getType());
        } else {
            return $this->value === $object->getValue();
        }
    }
}
