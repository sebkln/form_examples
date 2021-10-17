<?php
defined('TYPO3_MODE') || die('Access denied.');

/**
 * Register template paths for custom email templates and layouts
 *
 * @link https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ApiOverview/Mail/Index.html
 */
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['templateRootPaths'][100] = 'EXT:form_examples/Resources/Private/Templates/Email';
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['layoutRootPaths'][100] = 'EXT:form_examples/Resources/Private/Layouts/Email';
