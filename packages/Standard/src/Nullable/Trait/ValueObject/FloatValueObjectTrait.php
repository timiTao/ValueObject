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

use TimiTao\ValueObject\Contract\Nullable\ValueObject\FloatValueObject;

trait FloatValueObjectTrait
{
    private ?float $value;

    public function equals(FloatValueObject $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    public function getValue(): ?float
    {
        return $this->value;
    }
}
