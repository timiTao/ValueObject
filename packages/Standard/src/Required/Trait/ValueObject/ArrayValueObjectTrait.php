<?php
/**
 * This file is part of the Timitao\ValueObject.
 * (c) Tomasz Kunicki <kunicki.tomasz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\Required\Trait\ValueObject;

use TimiTao\ValueObject\Contract\Required\ValueObject\ArrayValueObject;
use TimiTao\ValueObject\Standard\CheckClassTrait;

trait ArrayValueObjectTrait
{
    use CheckClassTrait;

    /** @var array<mixed> */
    private array $value;

    public function equals(ArrayValueObject $other): bool
    {
        if (!$this->isSameClass($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    /** @return array<mixed> */
    public function getValue(): array
    {
        return $this->value;
    }
}
