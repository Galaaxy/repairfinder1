<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Add an extra categories selection field to the pages table
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    'rep_model',
    'tx_repmodel_domain_model_device',
    // Do not use the default field name ("categories") for pages, tt_content, sys_file_metadata, which is already used
    'categories',
    array(
        // Set a custom label
        'label' => 'Categories',
        // This field should not be an exclude-field
        'exclude' => FALSE,
        // Override generic configuration, e.g. sort by title rather than by sorting
        'fieldConfiguration' => array(
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0) ORDER BY sys_category.title ASC',
        ),
        // string (keyword), see TCA reference for details
        'l10n_mode' => 'exclude',
        // list of keywords, see TCA reference for details
        'l10n_display' => 'hideDiff',
    )
);
