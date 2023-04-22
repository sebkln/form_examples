# Examples of using the TYPO3 Form Framework

This TYPO3 extension ships some examples for the TYPO3 Form Framework.

Since some configurations have changed between TYPO3 versions, you can choose the compatible version of this extension
here:

- [form_examples for TYPO3 v12](https://github.com/sebkln/form_examples/tree/12.4)
- [form_examples for TYPO3 v11](https://github.com/sebkln/form_examples/tree/11.5)
- [form_examples for TYPO3 v10](https://github.com/sebkln/form_examples/tree/10.4)

To work out-of–the-box, this extension also comes with the necessary YAML and TypoScript setup, as well as an example
database to save sent form values.

As this collection of examples might get bloated, you can get a minimal starter kit to store the actually needed forms
for your project here: https://github.com/sebkln/form_distribution

## Example form definitions:

### Basic contact form

- **EmailToReceiver** finisher
- **Confirmation** finisher
- **SaveToDatabase** finisher

### Extended contact form

- multiple pages with fieldsets
- every field that is available as a database field, too
- field for file upload
- **SaveToDatabase** finisher, correctly referring to the sys_file entry (for the uploaded file) with sys_file_reference

### Upload form

- **SaveToDatabase** finisher, works the same as above

### Customized FluidEmail templates

- This example demonstrates how to override Fluid templates **and** layouts for emails.
- Two custom HTML mail templates, both using the Fluid-based email templating of the TYPO3 core (available since 10.3):
    1. Email template with name identical to TYPO3 core, which makes it the new default mail template.
    2. Email template with custom name, that can be assigned to a specific mail finisher in a form definition.
- Personalized salutation in email, depending on the selected title in the form.
- For all newly added email finishers, FluidEmail ist enabled by default.

## Translating forms

This extension provides some localization files to demonstrates how translating forms (labels, placeholders,
finishers, ...) work.

Any element label which was set directly in a form definition will be overridden, if a translation file contains a value
for this element.
This allows you to translate the same form to different languages.

The EXT:form Framework further supports a fallback chain for translations. You can translate properties for:

- a specific form and form element
- a specific form element and various forms
- an element type and various forms, e.g. the `Page` element

You can read the full details
here: https://docs.typo3.org/c/typo3/cms-form/master/en-us/I/Concepts/FrontendRendering/Index.html#concepts-frontendrendering-translation

In this example extension, I split the translations in several files:

- *locallang_forms_general.xlf*  contains translations for all forms in general.
- *locallang_forms_specific.xlf* contains values for single forms, which override the translations in the first file.
- *locallang_forms_custom.xlf* contains translated values for individual purposes in forms, e.g. localized salutation in
  the sent email.

Please note that the fallback chain does **not** require to split translations in separate files! This is just a
possible way to organize them.
Learn all about the fallback order in the link above.

To use your translation files, you must load them in your custom form setup first (as done in this extension):

````yaml
prototypes:
  standard:
    formElementsDefinition:
      Form:
        renderingOptions:
          translation:
            translationFiles:
              # index '10' is reserved for the default translation file.
              20: 'EXT:form_examples/Resources/Private/Language/locallang_forms_general.xlf'
              30: 'EXT:form_examples/Resources/Private/Language/locallang_forms_specific.xlf'
              40: 'EXT:form_examples/Resources/Private/Language/locallang_forms_custom.xlf'
````

## Related tutorials

Do you need to get one step explained in detail? You can find a series of tutorials on the TYPO3 Form Framework here:

1. [Assign custom templates to the new EXT:form framework](https://www.sebkln.de/en/tutorials/assign-custom-templates-to-the-new-ext-form-framework/)
2. [Translating forms in the TYPO3 Form Framework](https://www.sebkln.de/en/tutorials/translating-forms-in-the-typo3-form-framework/)
3. [Variable Fluid Emails in the TYPO3 Form Framework](https://www.sebkln.de/en/tutorials/fluid-emails-in-the-typo3-form-framework/)
4. [Custom fields in the TYPO3 Form Editor](https://www.sebkln.de/en/tutorials/custom-fields-in-the-typo3-form-editor/)

All tutorials are available in both english and german language.
