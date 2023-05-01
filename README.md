# Examples of using the TYPO3 Form Framework

This TYPO3 extension ships some examples for the TYPO3 Form Framework.

Since some configurations and templates have changed between TYPO3 versions,
you can choose the most compatible version of this extension here:

- [form_examples for TYPO3 v12](https://github.com/sebkln/form_examples/tree/12.4)
- [form_examples for TYPO3 v11](https://github.com/sebkln/form_examples/tree/11.5)
- [form_examples for TYPO3 v10](https://github.com/sebkln/form_examples/tree/10.4)

## Provided examples

### Finisher: SaveToDatabase

#### Questions answered

- How to store form data in the TYPO3 database
- How to create a FAL reference for uploaded files

#### Included

- The necessary database table (`tx_formexamples_domain_model_data`) to store the form data
- TCA to show stored data in the TYPO3 backend (readonly)

#### Good to know

Form data will be stored as a database record. The PID of these records is set in the finisher options
of the form definition. By default, this extension will use PID `140` for all form data records.

You may want to adjust the following setting to the PID of a storage folder in your TYPO3 installation:

```
        databaseColumnMappings:
          pid:
            value: 140
```

Important: Storing form data and/or file uploads in your TYPO3 installation has legal implications!
Be sure to meet all legal requirements (e.g. GDPR) and clean up no longer needed (personal) data.

#### Used in these forms

- "Example - Upload form" (`UploadFormExample`)\
  Minimal example with a FileUpload field
- "Example - Basic contact form" (`BasicContactFormExample`)\
  Small form that stores text values
- "Example - Extended contact form" (`ExtendedContactFormExample`)\
  Large form that uses all available database table fields

#### Links

- [TYPO3 Documentation: SaveToDatabase finisher options](https://docs.typo3.org/c/typo3/cms-form/main/en-us/D/FinisherOptions/Index.html#savetodatabase-finisher)

---

### Templating (emails): Custom FluidEmail templates (with override in Form Editor)

#### Questions answered

- How to use separate email templates for the `EmailToSender` and `EmailToReceiver` finishers,
  and use them for all forms within this prototype
- How to override an email template in a form definition
- How to provide a translated and personalized salutation in emails
- How to set varying text/content in the email footer of Fluid Emails

#### Included

- A new form prototype `prettyEmailTemplates` (to limit configuration to the FluidEmail examples)
- A new select field in the Form Editor for Email templates of the `EmailToSender` finisher
- Two customized email layouts with manually set logo, different styling, and a new footer section
- Three customized email templates

#### Used in these forms

- "Example - Custom FluidEmail templates (set in Form configuration)" (`CustomFluidEmailExample`)
- "Example - Custom FluidEmail templates (with override in Form definition)" (`CustomFluidEmailOverrideExample`)

#### Links

- Tutorial: [Variable Fluid Emails in the TYPO3 Form Framework](https://www.sebkln.de/en/tutorials/fluid-emails-in-the-typo3-form-framework/) / [Variable Fluid Emails im TYPO3 Form Framework](https://www.sebkln.de/tutorials/fluid-emails-im-typo3-form-framework/)

---

### Templating (forms): Select field in Form Editor for styling class

#### Questions answered

- How to add a new field in the Form Editor
- How to use the new field's value in Fluid templates

#### Included

- Form configuration to add the select field with three options
- Customized _Form.html_ partial that renders the selected CSS class, if given

#### Good to know

This is useful if you want to apply different styling to the same HTML markup using a single CSS class.

The select field is added to the form prototype `standardExamples` and is therefore available
in the Form Editor for most of the example forms.

By default, no example form has a custom value selected. You can of course choose a custom style
and check the CSS classes in the frontend (no stylesheets provided).

#### Used in these forms

See above.

#### Links

- Tutorial: [Custom fields in the TYPO3 Form Editor](https://www.sebkln.de/en/tutorials/custom-fields-in-the-typo3-form-editor/) / [Eigene Felder im TYPO3 Form Editor](https://www.sebkln.de/tutorials/eigene-felder-im-typo3-form-editor/)

---

### Templating (forms): Different templates per form prototype

#### Questions answered

- How to configure a new form prototype
- How to set different template paths for selected forms
- How to set different class names (e.g. for the `SingleSelect` field)
- How to access single field labels and values in form templates

#### Included

- A new form prototype `complaintForm`
- A customized `SummaryPage` partial

#### Good to know

This is useful if you need different HTML markup or CSS classes only for particular forms.

#### Used in these forms

- "Example - Custom prototype (complaint form)" (`CustomPrototypeExample`)

#### Links

- Tutorial: [Different templates per prototype with the TYPO3 Form Framework](https://www.sebkln.de/en/tutorials/assign-custom-templates-to-the-new-ext-form-framework/) / [Unterschiedliche Templates per Prototype im TYPO3 Form Framework](https://www.sebkln.de/tutorials/eigene-templates-im-neuen-ext-form-framework-zuweisen/)

---

### Translations

#### Questions answered

- How to translate forms (labels, placeholders, finishers, …) with XLIFF files
- How to translate custom email text
- How to use arguments/placeholders in translations
- How to override translations for specific fields or forms
- How to organize translations

#### Included

- Several XLIFF files in English and German language
- Notes on possible translation keys as comments in the XLIFF files

#### Good to know

**1. Really read the tutorial**

As soon as the XLIFF file contains a matching translation key, the YAML's value is no longer considered.

But: there are some quirks and exceptions, so be sure to check the accompanying tutorial (and reference) linked below!

**2. The fallback chain**

The Form Framework supports a fallback chain for translations. You can translate:

- properties for both a specific form _and_ form element (e.g. element with identifier `message` only in the basic contact form)
- properties for a specific form element inside various forms (e.g. all elements with identifier `message`)
- properties for an element type in various forms (e.g. all elements of type `SummaryPage`)

**3. The included XLIFF files**

In this example extension, I split the translations in several files:

| File                     | Contents                                                                                                                                                                   |
|--------------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `locallang_general.xlf`  | Translated values for all forms in general.                                                                                                                                |
| `locallang_specific.xlf` | Translated values for single forms, which will override the translations in the first file.                                                                                |
| `locallang_custom.xlf`   | Translated values for individual purposes in forms, e.g. localized salutation in email templates. These freely selected translation keys don't support the fallback chain. |

Please note that the fallback chain **does not require** to split translations in separate files!
This is just one possible way to organize them.

#### Used in these forms

- "Example - Basic contact form" (`BasicContactFormExample`)
- "Example - Extended contact form" (`ExtendedContactFormExample`)
- "Example - Upload form" (`UploadFormExample`)
- "Example - Custom FluidEmail templates (set in Form configuration)" (`CustomFluidEmailExample`)
- "Example - Custom FluidEmail templates (with override in Form definition)" (`CustomFluidEmailOverrideExample`)

#### Links

- Tutorial/reference: [Translating forms in the TYPO3 Form Framework](https://www.sebkln.de/en/tutorials/translating-forms-in-the-typo3-form-framework/) / [Übersetzen von Formularen im TYPO3 Form Framework](https://www.sebkln.de/tutorials/uebersetzen-von-formularen-im-typo3-form-framework/)
- [TYPO3 Documentation: Form translation concepts](https://docs.typo3.org/c/typo3/cms-form/main/en-us/I/Concepts/FrontendRendering/Index.html#concepts-frontendrendering-translation)
- [TYPO3 Documentation: The XLIFF Format in general](https://docs.typo3.org/m/typo3/reference-coreapi/main/en-us/ApiOverview/Localization/XliffFormat.html)

---

### Form Manager (TYPO3 backend): Adding custom prototypes and predefined forms

#### Questions answered

- How to make custom prototypes selectable for editors
- How to provide predefined forms as start templates for editors

#### Included

- Registration of all example prototypes with one or more predefined forms (`FormSetup.yaml`)

#### Good to know

**1. Where to select prototypes and predefined forms**

- In the TYPO3 backend, select the "Forms" module to open the Form Management
- Use the button "Create new form", then select "Predefined form" in the modal.
- The modal will show a select field "Form prototype"
- After you selected a prototype, the select field "Template" renders the associated forms.

**2. About form prototypes**

Every form (definition) is based on a form protoype.

Within form prototypes, you can configure many aspects of the Form Framework. Among other things,
this includes available form fields or finishers inside the Form Editor.

Therefore, **you can not change the prototype of a form subsequently** (at least not per Form Editor)!

Please refer to the official documentation for details about prototypes or start templates.

#### Links

- [TYPO3 Documentation: Concept of form prototypes](https://docs.typo3.org/c/typo3/cms-form/main/en-us/I/Concepts/Configuration/Index.html#concepts-configuration-prototypes)
- [TYPO3 Documentation: Concept of form start templates](https://docs.typo3.org/c/typo3/cms-form/main/en-us/I/Concepts/FormManager/Index.html#start-templates)
