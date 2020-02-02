<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Beberlei\Standard;

use Exception;
use TimiTao\ValueObject\Standard\ValueObject\BooleanValueObject as BooleanValueObjectInterface;

abstract class BooleanValueObject implements BooleanValueObjectInterface
{
    private $value;

    /**
     * @throws Exception if value is invalid
     */
    public function __construct(bool $value)
    {
        $this->guard($value);
        $this->value = $value;
    }

    public function equals(BooleanValueObjectInterface $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    public function getValue(): bool
    {
        return $this->value;
    }

    /**
     * @throws Exception if value is invalid
     */
    abstract protected function guard(bool $value): void;
}
