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

namespace Phalcon\Test\Unit\Assets\Collection;

use UnitTester;

/**
 * Class AddInlineCssCest
 *
 * @package Phalcon\Test\Unit\Assets\Collection
 */
class AddInlineCssCest
{
    /**
     * Tests Phalcon\Assets\Collection :: addInlineCss()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function assetsCollectionAddInlineCss(UnitTester $I)
    {
        $I->wantToTest('Assets\Collection - addInlineCss()');
        $I->skipTest('Need implementation');
    }
}
