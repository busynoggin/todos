<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'BusyNoggin.Todos',
	'List',
	array(
		'Todo' => 'index, new, create, edit, update, delete',

	),
	// non-cacheable actions
	array(
		'Todo' => 'create, update, delete',

	)
);

?>