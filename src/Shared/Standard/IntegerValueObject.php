<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Shared\Standard;

use Exception;
use InvalidArgumentException;
use TimiTao\ValueObject\Core\Standard\IntegerValueObject as IntegerValueObjectInterface;

abstract class IntegerValueObject implements IntegerValueObjectInterface
{
    private $value;

    /**
     * @throws InvalidArgumentException|Exception if value is invalid
     */
    public function __construct(int $value)
    {
        try {
            $this->guard($value);
        } catch (Exception $e) {
            throw $this->throwException($value, $e);
        }
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function equals(IntegerValueObjectInterface $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    abstract protected function guard(int $value): void;

    /**
     * @throws InvalidArgumentException|Exception if value is invalid
     */
    abstract protected function throwException(int $value, Exception $e): Exception;
}
