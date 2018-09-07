<?php

declare(strict_types = 1);

namespace TimiTao\ValueObject\Utils;

use Assert\Assertion;

abstract class ValueObject
{
    /** @var string */
    private $type;

    /**
     * @param string $type
     * @throws \Assert\AssertionFailedException
     */
    public function __construct(string $type)
    {
        Assertion::classExists($type, null, self::class);
        $this->type = $type;
    }

    public function __clone()
    {

    }

    protected function getType(): string
    {
        return $this->type;
    }

    protected function isType(string $type): bool
    {
        return $this->type === $type;
    }
}
