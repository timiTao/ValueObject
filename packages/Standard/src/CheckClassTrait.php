<?php

/**
 * This file is part of the Timitao\ValueObject.
 * (c) Tomasz Kunicki <kunicki.tomasz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace TimiTao\ValueObject\Standard;

trait CheckClassTrait
{
    private function isSameClass(object $other): bool
    {
        if (static::class === get_class($other)) {
            return true;
        }
        if (((new \ReflectionClass($this))->isAnonymous() || (new \ReflectionClass($other))->isAnonymous())
            && class_implements($this) === class_implements($other)) {
            return true;
        }
        return false;
    }
}
