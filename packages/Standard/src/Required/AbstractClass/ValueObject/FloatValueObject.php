<?php
/**
 * This file is part of the Timitao\ValueObject.
 * (c) Tomasz Kunicki <kunicki.tomasz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\Required\AbstractClass\ValueObject;

use TimiTao\ValueObject\Contract\Required\ValueObject\FloatValueObject as FloatValueObjectInterface;
use TimiTao\ValueObject\Standard\Required\Trait\ValueObject\FloatValueObjectTrait;

abstract class FloatValueObject implements FloatValueObjectInterface
{
    use FloatValueObjectTrait;

    public function __construct(float $value)
    {
        $this->value = $value;
    }
}
