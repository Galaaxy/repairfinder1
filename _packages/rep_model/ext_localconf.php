<?php

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// Include PageTS
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rep_model/Configuration/TypoScript/TsConfig/pageTSConfig.ts">'
);

