<?php
/**
 * This file is part of the Timitao\ValueObject.
 * (c) Tomasz Kunicki <kunicki.tomasz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\Nullable\Trait\ValueObject;

use TimiTao\ValueObject\Contract\Nullable\ValueObject\IntegerValueObject;
use TimiTao\ValueObject\Standard\CheckClassTrait;

trait IntegerValueObjectTrait
{
    use CheckClassTrait;

    private ?int $value;

    public function equals(IntegerValueObject $other): bool
    {
        if (!$this->isSameClass($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    public function getValue(): ?int
    {
        return $this->value;
    }
}
