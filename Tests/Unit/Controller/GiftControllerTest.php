<?php
namespace TYPO3\CbWishlist\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Christian Geser <wishlist-typo3@gmx.de>
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class Tx_Cb_wishlist_Controller_GiftController.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Wishlist
 *
 * @author Christian Geser <wishlist-typo3@gmx.de>
 */
class GiftControllerTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	
	/**
	 * @var 
	 */
	protected $fixture;
	
	protected $giftController;

	public function setUp() {
		$this->fixture = new \TYPO3\CbWishlist\Domain\Model\Gift();
		$this->giftController = new TYPO3\CbWishlist\Controller\GiftController();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function testReserveAction() {
		$GLOBALS['TSFE']->fe_user = new  \TYPO3\CMS\Extbase\Domain\Model\FrontendUser();
		$GLOBALS['TSFE']->fe_user->user['uid'] = 400;
		
		$this->giftController->reserveAction($this->fixture);
		$this->assertEquals(400, $this->fixture->getReservedby());
	}

}
?>