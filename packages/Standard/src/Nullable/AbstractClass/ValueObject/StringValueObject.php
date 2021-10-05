<?php
/**
 * This file is part of the Timitao\ValueObject.
 * (c) Tomasz Kunicki <kunicki.tomasz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard\Nullable\AbstractClass\ValueObject;

use TimiTao\ValueObject\Contract\Nullable\ValueObject\StringValueObject as StringValueObjectInterface;
use TimiTao\ValueObject\Standard\Nullable\Trait\ValueObject\StringValueObjectTrait;

abstract class StringValueObject implements StringValueObjectInterface
{
    use StringValueObjectTrait;

    public function __construct(?string $value)
    {
        $this->value = $value;
    }
}
