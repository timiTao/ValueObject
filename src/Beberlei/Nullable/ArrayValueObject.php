<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Beberlei\Nullable;

use Exception;
use TimiTao\ValueObject\Nullable\ValueObject\ArrayValueObject as ArrayValueObjectInterface;

abstract class ArrayValueObject implements ArrayValueObjectInterface
{
    private $value;

    /**
     * @throws Exception if value is invalid
     */
    public function __construct(?array $value)
    {
        $this->guard($value);
        $this->value = $value;
    }

    public function equals(ArrayValueObjectInterface $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    public function getValue(): ?array
    {
        return $this->value;
    }

    /**
     * @throws Exception if value is invalid
     */
    abstract protected function guard(?array $value): void;
}
