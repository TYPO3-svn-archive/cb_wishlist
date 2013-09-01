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
 * Test case for class \TYPO3\CbWishlist\Domain\Model\Gift.
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
class GiftTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\CbWishlist\Domain\Model\Gift
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\CbWishlist\Domain\Model\Gift();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getPriceReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setPriceForStringSetsPrice() { 
		$this->fixture->setPrice('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPrice()
		);
	}
	
	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImageForStringSetsImage() { 
		$this->fixture->setImage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImage()
		);
	}
	
	/**
	 * @test
	 */
	public function getReservedbyReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setReservedbyForStringSetsReservedby() { 
		$this->fixture->setReservedby('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getReservedby()
		);
	}
	
	/**
	 * @test
	 */
	public function getReservdateReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setReservdateForDateTimeSetsReservdate() { }
	
	/**
	 * @test
	 */
	public function getReservecommentReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setReservecommentForStringSetsReservecomment() { 
		$this->fixture->setReservecomment('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getReservecomment()
		);
	}
	
	/**
	 * @test
	 */
	public function getGiftwishlistReturnsInitialValueForWishlist() { }

	/**
	 * @test
	 */
	public function setGiftwishlistForWishlistSetsGiftwishlist() { }
	
}
?>