<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Beberlei\Standard;

use Exception;
use TimiTao\ValueObject\Standard\ValueObject\StringValueObject as StringValueObjectInterface;

abstract class StringValueObject implements StringValueObjectInterface
{
    private $value;

    /**
     * @throws Exception if value is invalid
     */
    public function __construct(string $value)
    {
        $this->guard($value);
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
     * @throws Exception if value is invalid
     */
    abstract protected function guard(string $value): void;
}
