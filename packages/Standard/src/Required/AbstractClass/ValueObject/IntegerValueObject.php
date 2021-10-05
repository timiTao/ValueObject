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

use TimiTao\ValueObject\Contract\Required\ValueObject\IntegerValueObject as IntegerValueObjectInterface;
use TimiTao\ValueObject\Standard\Required\Trait\ValueObject\IntegerValueObjectTrait;

abstract class IntegerValueObject implements IntegerValueObjectInterface
{
    use IntegerValueObjectTrait;

    public function __construct(int $value)
    {
        $this->value = $value;
    }
}
