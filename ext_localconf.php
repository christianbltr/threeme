<?php
if (!defined('TYPO3_MODE')) { die('Access denied.'); }

// Add BackendLayout container
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:threeme/Configuration/TSconfig/BackendLayout" extensions="txt,ts">');

// Add PageTs container
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:threeme/Configuration/TSconfig/Page" extensions="txt,ts">');

// Add UserTs container
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:threeme/Configuration/TSconfig/User" extensions="txt,ts">');

// Register cache
if (!is_array($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['threeme_cache']))
{
    $TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['threeme_cache'] = array();
    $TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['threeme_cache']['frontend'] = 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend';
    $TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['threeme_cache']['backend'] = 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend';
    $TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['threeme_cache']['options']['compression'] = 1;
}

if (TYPO3_MODE === 'BE')
{
    // Register sys_note icon
    /** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'threeme-pagetree-sys-note',
        \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
        ['name' => 'info-circle']
    );
}
