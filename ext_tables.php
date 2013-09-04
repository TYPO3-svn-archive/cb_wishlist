<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

/**
 * Register Frontend Plugin
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Cbwishlist',
	'Wishlist'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Wishlist');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cbwishlist_domain_model_gift', 'EXT:cb_wishlist/Resources/Private/Language/locallang_csh_tx_cbwishlist_domain_model_gift.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cbwishlist_domain_model_gift');
$TCA['tx_cbwishlist_domain_model_gift'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:cb_wishlist/Resources/Private/Language/locallang_db.xlf:tx_cbwishlist_domain_model_gift',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,price,description,image,reservedby,reservdate,reservecomment,giftwishlist,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Gift.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_cbwishlist_domain_model_gift.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cbwishlist_domain_model_wishlist', 'EXT:cb_wishlist/Resources/Private/Language/locallang_csh_tx_cbwishlist_domain_model_wishlist.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cbwishlist_domain_model_wishlist');
$TCA['tx_cbwishlist_domain_model_wishlist'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:cb_wishlist/Resources/Private/Language/locallang_db.xlf:tx_cbwishlist_domain_model_wishlist',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Wishlist.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_cbwishlist_domain_model_wishlist.gif'
	),
);

// Include flex forms
$extensionName = strtolower(\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY));
$pluginName = strtolower('Cbwishlist');
$pluginSignature = $extensionName.'_'.$pluginName; 
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,pages'; 
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY . '/Configuration/FlexForms/flexform_plugin_options.xml'); 

// Register wishlist for 'contains plugin' in sysfolders
$TCA['pages']['columns']['module']['config']['items'][] = array('LLL:EXT:cb_wishlist/Resources/Private/Language/locallang_db.xlf:tx_cbwishlist_domain_model_wishlist', 'Cbwishlist', 'EXT:cb_wishlist/ext_icon.gif');
t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-Cbwishlist', '../typo3conf/ext/cb_wishlist/ext_icon.gif');
?>
