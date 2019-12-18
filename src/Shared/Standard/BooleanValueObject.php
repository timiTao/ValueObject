<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Shared\Standard;

use Exception;
use InvalidArgumentException;
use TimiTao\ValueObject\Core\Standard\BooleanValueObject as BooleanValueObjectInterface;

abstract class BooleanValueObject implements BooleanValueObjectInterface
{
    private $value;

    /**
     * @throws InvalidArgumentException|Exception if value is invalid
     */
    public function __construct(bool $value)
    {
        $this->guard($value);
        $this->value = $value;
    }

    public function getValue(): bool
    {
        return $this->value;
    }

    public function equals(BooleanValueObjectInterface $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    /**
     * @throws InvalidArgumentException|Exception if value is invalid
     */
    abstract protected function guard(bool $value): void;
}
