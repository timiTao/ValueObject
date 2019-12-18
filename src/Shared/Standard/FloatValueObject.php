<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Shared\Standard;

use Exception;
use InvalidArgumentException;
use TimiTao\ValueObject\Core\Standard\FloatValueObject as FloatValueObjectInterface;

abstract class FloatValueObject implements FloatValueObjectInterface
{
    private $value;

    /**
     * @throws InvalidArgumentException|Exception if value is invalid
     */
    public function __construct(float $value)
    {
        $this->guard($value);
        $this->value = $value;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function equals(FloatValueObjectInterface $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    /**
     * @throws InvalidArgumentException|Exception if value is invalid
     */
    abstract protected function guard(float $value): void;
}
