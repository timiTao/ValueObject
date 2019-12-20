<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Shared\Standard;

use Exception;
use InvalidArgumentException;
use TimiTao\ValueObject\Core\Standard\ArrayValueObject as ArrayValueObjectInterface;

abstract class ArrayValueObject implements ArrayValueObjectInterface
{
    private $value;

    /**
     * @throws InvalidArgumentException|Exception if value is invalid
     */
    public function __construct(array $value)
    {
        try {
            $this->guard($value);
        } catch (Exception $e) {
            throw $this->throwException($value, $e);
        }
        $this->value = $value;
    }

    public function getValue(): array
    {
        return $this->value;
    }

    public function equals(ArrayValueObjectInterface $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    abstract protected function guard(array $value): void;

    /**
     * @throws InvalidArgumentException|Exception if value is invalid
     */
    abstract protected function throwException(array $value, Exception $e): Exception;
}
