<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Shared\Standard;

use Exception;
use Throwable;
use TimiTao\ValueObject\Core\Standard\IntegerValueObject as IntegerValueObjectInterface;

abstract class IntegerValueObject implements IntegerValueObjectInterface
{
    private $value;

    /**
     * @throws Exception if value is invalid
     */
    public function __construct(int $value)
    {
        try {
            $this->guard($value);
        } catch (Throwable $e) {
            throw $this->throwException($value);
        }
        $this->value = $value;
    }

    public function equals(IntegerValueObjectInterface $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @throws Throwable if value is invalid
     */
    abstract protected function guard(int $value): void;

    abstract protected function throwException(int $value): Exception;
}
