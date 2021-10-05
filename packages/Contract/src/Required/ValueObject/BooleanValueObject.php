<?php
/**
 * This file is part of the Timitao\ValueObject.
 * (c) Tomasz Kunicki <kunicki.tomasz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace TimiTao\ValueObject\Contract\Required\ValueObject;

use TimiTao\ValueObject\Contract\Required\StandardType\BooleanLiteral;

interface BooleanValueObject extends BooleanLiteral
{
    public function equals(self $other): bool;
}
