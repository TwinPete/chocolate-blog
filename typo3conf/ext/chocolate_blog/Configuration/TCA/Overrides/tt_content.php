<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    array(
        'Fire Box',
        'fire_box',
        'EXT:chocolate_blog/Resources/Public/Icons/icon-flame.svg'
    ),
    'CType',
    'chocolate_blog'
);