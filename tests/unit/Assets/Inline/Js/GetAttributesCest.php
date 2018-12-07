<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Assets\Inline\Js;

use UnitTester;

/**
 * Class GetAttributesCest
 *
 * @package Phalcon\Test\Unit\Assets\Inline\Js
 */
class GetAttributesCest
{
    /**
     * Tests Phalcon\Assets\Inline\Js :: getAttributes()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function assetsInlineJsGetAttributes(UnitTester $I)
    {
        $I->wantToTest('Assets\Inline\Js - getAttributes()');
        $I->skipTest('Need implementation');
    }
}
