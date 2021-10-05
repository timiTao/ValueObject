<?php
/**
 * This file is part of the Timitao\ValueObject.
 * (c) Tomasz Kunicki <kunicki.tomasz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace TimiTao\ValueObject\Contract\Required\DateTime;

use TimiTao\ValueObject\Contract\Required\StandardType\StringLiteral;

interface DateFormatValueObject extends StringLiteral, DateTimeValueObject
{
    public function equals(self $other): bool;
}