# Examples of using the TYPO3 Form Framework

This TYPO3 extension ships some examples for the EXT:form Framework which was introduced in TYPO3 v8 LTS. 

To work out-of–the-box, it also comes with the necessary YAML and TypoScript setup, as well as an example database to save sent form values.

As this collection of examples might get bloated, you can get a minimal starter kit to store the actually needed forms for your project here: https://github.com/sebkln/form_distribution

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

### Custom HTML mail
- custom HTML mail template, based on a blueprint by MailChimp – not yet tested in every mail client (it's still an example)
- personalized salutation in email, depending on selected title
