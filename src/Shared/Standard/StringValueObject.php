<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Shared\Standard;

use Exception;
use InvalidArgumentException;
use TimiTao\ValueObject\Core\Standard\StringValueObject as StringValueObjectInterface;

abstract class StringValueObject implements StringValueObjectInterface
{
    private $value;

    /**
     * @throws InvalidArgumentException|Exception if value is invalid
     */
    public function __construct(string $value)
    {
        try {
            $this->guard($value);
        } catch (Exception $e) {
            throw $this->throwException($value, $e);
        }
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function equals(StringValueObjectInterface $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    abstract protected function guard(string $value): void;

    /**
     * @throws InvalidArgumentException|Exception if value is invalid
     */
    abstract protected function throwException(string $value, Exception $e): Exception;
}
