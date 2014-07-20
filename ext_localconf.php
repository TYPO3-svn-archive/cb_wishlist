<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'Cbwishlist',
	array(
		'Gift' => 'list, show, reserve, deleteReservation',
	),
	// non-cacheable actions
	array(
		'Gift' => '',
		'Wishlist' => '',
		
	)
);

?>