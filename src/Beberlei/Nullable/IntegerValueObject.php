<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Beberlei\Nullable;

use Exception;
use TimiTao\ValueObject\Nullable\ValueObject\IntegerValueObject as IntegerValueObjectInterface;

abstract class IntegerValueObject implements IntegerValueObjectInterface
{
    private $value;

    /**
     * @throws Exception if value is invalid
     */
    public function __construct(?int $value)
    {
        $this->guard($value);
        $this->value = $value;
    }

    public function equals(IntegerValueObjectInterface $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * @throws Exception if value is invalid
     */
    abstract protected function guard(?int $value): void;
}
