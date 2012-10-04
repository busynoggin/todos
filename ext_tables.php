<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'List',
	'Todo List'
);

\TYPO3\CMS\Core\Extension\ExtensionManager::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Todos');

\TYPO3\CMS\Core\Extension\ExtensionManager::addLLrefForTCAdescr('tx_todos_domain_model_todo', 'EXT:todos/Resources/Private/Language/locallang_csh_tx_todos_domain_model_todo.xlf');
\TYPO3\CMS\Core\Extension\ExtensionManager::allowTableOnStandardPages('tx_todos_domain_model_todo');
$TCA['tx_todos_domain_model_todo'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:todos/Resources/Private/Language/locallang_db.xlf:tx_todos_domain_model_todo',
		'label' => 'description',
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
		'dynamicConfigFile' => \TYPO3\CMS\Core\Extension\ExtensionManager::extPath($_EXTKEY) . 'Configuration/TCA/Todo.php',
		'iconfile' => \TYPO3\CMS\Core\Extension\ExtensionManager::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_todos_domain_model_todo.gif'
	),
);

?>