<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Beberlei\Standard;

use Exception;
use Throwable;
use TimiTao\ValueObject\Standard\ValueObject\ArrayValueObject as ArrayValueObjectInterface;

abstract class ArrayValueObject implements ArrayValueObjectInterface
{
    private $value;

    /**
     * @throws Exception if value is invalid
     */
    public function __construct(array $value)
    {
        try {
            $this->guard($value);
        } catch (Throwable $e) {
            throw $this->throwException($value, $e);
        }
        $this->value = $value;
    }

    public function equals(ArrayValueObjectInterface $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    public function getValue(): array
    {
        return $this->value;
    }

    /**
     * @throws Throwable if value is invalid
     */
    abstract protected function guard(array $value): void;

    abstract protected function throwException(array $value, Throwable $e): Exception;
}
