<?php

declare(strict_types=1);

namespace TimiTao\ValueObject\Shared\Standard;

use Exception;
use Throwable;
use TimiTao\ValueObject\Core\Standard\BooleanValueObject as BooleanValueObjectInterface;

abstract class BooleanValueObject implements BooleanValueObjectInterface
{
    private $value;

    /**
     * @throws Exception if value is invalid
     */
    public function __construct(bool $value)
    {
        try {
            $this->guard($value);
        } catch (Throwable $e) {
            throw $this->throwException($value, $e);
        }
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
     * @throws Throwable if value is invalid
     */
    abstract protected function guard(bool $value): void;

    abstract protected function throwException(bool $value, Throwable $e): Exception;
}
