<?php
namespace TYPO3\CbWishlist\Controller;

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
class GiftController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * giftRepository
	 *
	 * @var \TYPO3\CbWishlist\Domain\Repository\GiftRepository
	 * @inject
	 */
	protected $giftRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$gifts = $this->giftRepository->findAllGifts($this->settings['selectedWishlist']);
		$this->view->assign('gifts', $gifts);
	}

	/**
	 * action show
	 *
	 * @param \TYPO3\CbWishlist\Domain\Model\Gift $gift
	 * @return void
	 */
	public function showAction(\TYPO3\CbWishlist\Domain\Model\Gift $gift) {
		$selectedColumns = explode(',', $this->settings['selectedColumns']);
		$this->view->assign('selectedColumns', $selectedColumns);
		$this->view->assign('gift', $gift);
		
		$user_uid = $GLOBALS['TSFE']->fe_user->user['uid'];
		if($user_uid == $gift-> getReservedby()){
			$this->view->assign('deleteAble', true);
		} else {
			$this->view->assign('deleteAble', false);
		}
	}

	/**
	 * action reserve
	 *
	 * @param \TYPO3\CbWishlist\Domain\Model\Gift $gift
	 * @return void
	 */
	public function reserveAction(\TYPO3\CbWishlist\Domain\Model\Gift $gift) {
		// login check with redirect to login
		$user_uid = $GLOBALS['TSFE']->fe_user->user['uid'];

		if($user_uid > 0){
			// set reserver
			$gift->setReservedby($user_uid);
			// set reserve date
			$gift->setReservdate(new \DateTime());
				
			$this->giftRepository->update($gift);
				
			$selectedColumns = explode(',', $this->settings['selectedColumns']);
			$this->view->assign('selectedColumns', $selectedColumns);
			$this->view->assign('gift', $gift);
				
			if($user_uid == $gift-> getReservedby()){
				$this->view->assign('deleteAble', true);
			} else {
				$this->view->assign('deleteAble', false);
			}
		} else {
			$this->redirectToUri("index.php?id="  . $this->settings['reservationLoginpage']);
		}
	}
	
	/**
	 * action deleteReservation
	 *
	 * @param \TYPO3\CbWishlist\Domain\Model\Gift $gift
	 * @return void
	 */
	public function deleteReservationAction(\TYPO3\CbWishlist\Domain\Model\Gift $gift) {
		
		$user_uid = $GLOBALS['TSFE']->fe_user->user['uid'];
		if($user_uid == $gift-> getReservedby()){
			// set reserver
			$gift->setReservedby(0);
			// set reserve date
			$gift->setReservdate(new \DateTime(0));
				
			$this->giftRepository->update($gift);
		}
	}
}?>