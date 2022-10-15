<?php
return [
    'ctrl' => [
        'title' => 'Device',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => '',
        'iconfile' => 'EXT:rep_model/Resources/Public/Icons/Extension.svg'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, name, damage,
        , --div--;LLL:EXT:rep_model/Resources/Private/Language/locallang_db.xlf:tx_repmodel_domain_model_device.extend, starttime, endtime '],
    ],
    'columns' => [
        'name' => [
            'label' => 'Name',
            'config' => [
                'type' => 'input',
                'eval' => '',
            ],
        ],
        'damage' => array(
            'exclude' => 1,
            'label' => 'damage',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_repmodel_domain_model_damage',
                'MM' => 'tx_repmodel_device_damage_mm',
                'minitems' => 0,
                'maxitems' => 99,
                /* ... */
            ),
        ),

    ],
];
