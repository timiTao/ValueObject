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

    public function equal(self $object): bool
    {
        return $this->value === $object->value
            && $this->isType($object->getType());
    }
}
