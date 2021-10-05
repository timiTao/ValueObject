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

use TimiTao\ValueObject\Contract\Nullable\ValueObject\ArrayValueObject;

trait ArrayValueObjectTrait
{
    /** @var array<mixed>|null */
    private ?array $value;

    public function equals(ArrayValueObject $other): bool
    {
        if (static::class !== get_class($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    /** @return array<mixed>|null */
    public function getValue(): ?array
    {
        return $this->value;
    }
}
