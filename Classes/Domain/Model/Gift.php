<?php
namespace TYPO3\CbWishlist\Domain\Model;

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
*  the Free Software Foundation; either version 3 of the License, or
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
 *
 *
 * @package cb_wishlist
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
*
*/
class Gift extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Name
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * Price
	 *
	 * @var \string
	 */
	protected $price;

	/**
	 * Description
	 *
	 * @var \string
	 */
	protected $description;

	/**
	 * Image
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $image;


	/**
	 * Reserved by
	 *
	 * @var \string
	 */
	protected $reservedby;

	/**
	 * Reservationdate
	 *
	 * @var \DateTime
	 */
	protected $reservdate;

	/**
	 * Reservation Comment
	 *
	 * @var \string
	 */
	protected $reservecomment;

	/**
	 * Gifts on Wishlist
	 *
	 * @var \TYPO3\CbWishlist\Domain\Model\Wishlist
	 */
	protected $giftwishlist;

	/**
	 * Returns the name
	 *
	 * @return \string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param \string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the price
	 *
	 * @return \string $price
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Sets the price
	 *
	 * @param \string $price
	 * @return void
	 */
	public function setPrice($price) {
		$this->price = $price;
	}

	/**
	 * Returns the description
	 *
	 * @return \string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param \string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the image
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
	 */
	public function getImage() {
		return $this->image;
	}


	/**
	 * Sets the image
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}
	

	/**
	 * Returns the reservedby
	 *
	 * @return \string $reservedby
	 */
	public function getReservedby() {
		return $this->reservedby;
	}

	/**
	 * Sets the reservedby
	 *
	 * @param \string $reservedby
	 * @return void
	 */
	public function setReservedby($reservedby) {
		$this->reservedby = $reservedby;
	}

	/**
	 * Returns the reservdate
	 *
	 * @return \DateTime $reservdate
	 */
	public function getReservdate() {
		return $this->reservdate;
	}

	/**
	 * Sets the reservdate
	 *
	 * @param \DateTime $reservdate
	 * @return void
	 */
	public function setReservdate($reservdate) {
		$this->reservdate = $reservdate;
	}

	/**
	 * Returns the reservecomment
	 *
	 * @return \string $reservecomment
	 */
	public function getReservecomment() {
		return $this->reservecomment;
	}

	/**
	 * Sets the reservecomment
	 *
	 * @param \string $reservecomment
	 * @return void
	 */
	public function setReservecomment($reservecomment) {
		$this->reservecomment = $reservecomment;
	}

	/**
	 * Returns the giftwishlist
	 *
	 * @return \TYPO3\CbWishlist\Domain\Model\Wishlist $giftwishlist
	 */
	public function getGiftwishlist() {
		return $this->giftwishlist;
	}

	/**
	 * Sets the giftwishlist
	 *
	 * @param \TYPO3\CbWishlist\Domain\Model\Wishlist $giftwishlist
	 * @return void
	 */
	public function setGiftwishlist(\TYPO3\CbWishlist\Domain\Model\Wishlist $giftwishlist) {
		$this->giftwishlist = $giftwishlist;
	}

}
?>