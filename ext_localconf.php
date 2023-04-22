<?php

defined('TYPO3') or die();

call_user_func(static function () {
    // Add form configuration to TYPO3 backend (module) and frontend (plugin):
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        trim('
            plugin.tx_form.settings.yamlConfigurations {
                999 = EXT:form_examples/Configuration/Form/FormSetup.yaml
            }
            
            module.tx_form.settings.yamlConfigurations {
                999 = EXT:form_examples/Configuration/Form/FormSetup.yaml
            }
        ')
    );
});
