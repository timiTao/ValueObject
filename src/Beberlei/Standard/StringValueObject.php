<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Beberlei\Standard;

use Exception;
use Throwable;
use TimiTao\ValueObject\Core\Standard\StringValueObject as StringValueObjectInterface;

abstract class StringValueObject implements StringValueObjectInterface
{
    private $value;

    /**
     * @throws Exception if value is invalid
     */
    public function __construct(string $value)
    {
        try {
            $this->guard($value);
        } catch (Throwable $e) {
            throw $this->throwException($value, $e);
        }
        $this->value = $value;
    }

    public function equals(StringValueObjectInterface $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @throws Throwable if value is invalid
     */
    abstract protected function guard(string $value): void;

    abstract protected function throwException(string $value, Throwable $e): Exception;
}
