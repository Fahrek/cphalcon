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

namespace Phalcon\Test\Unit\Assets\Inline;

use UnitTester;

/**
 * Class GetAssetKeyCest
 *
 * @package Phalcon\Test\Unit\Assets\Inline
 */
class GetAssetKeyCest
{
    /**
     * Tests Phalcon\Assets\Inline :: getAssetKey()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function assetsInlineGetAssetKey(UnitTester $I)
    {
        $I->wantToTest('Assets\Inline - getAssetKey()');
        $I->skipTest('Need implementation');
    }
}
