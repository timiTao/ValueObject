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

use TimiTao\ValueObject\Contract\Required\ValueObject\StringValueObject;
use TimiTao\ValueObject\Standard\CheckClassTrait;

trait StringValueObjectTrait
{
    use CheckClassTrait;
    
    private string $value;

    public function equals(StringValueObject $other): bool
    {
        if (!$this->isSameClass($other)) {
            return false;
        }
        return $this->getValue() === $other->getValue();
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
