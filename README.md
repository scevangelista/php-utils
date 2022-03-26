## php-utils

This project have Classes of utilities for use in projects

##
### How to Use :electric_plug: 

**Requirements**
- PHP

**Instructions to run:**
- First, import the class for your php file
```
require_once('StringUtil.php');
```

- Call the static methods in your code


**Methods:**
- upper : This function returns a value in uppercase correcting the accents. Example:
```
$upper = StringUtil::upper('textão');
//Expected in $upper: TEXTÃO
```

- clear : Remove especial caracters of string. Example:  
```
$cleared = StringUtil::clear('<html>');
//Expected in $cleared: html
```