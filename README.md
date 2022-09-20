## php-utils

This project have Classes of utilities for use in projects

##
### How to Use :electric_plug: 

**Requirements**
- PHP 7+
<br/>


### Class StringUtil:

**Instructions to run:**
- First, import the class for your php file

```
require_once('src/Strings.php');
require_once('src/CommHttp.php');
```

- Call the static methods in your code

##
**Methods:**
- upper : This function returns a value in uppercase correcting the accents. Example:

```
$upper = Strings::upper('textão');
//Expected in $upper: TEXTÃO
```  

- clear : Remove especial caracters of string. Example:  

```
$cleared = Strings::clear('<html>');
//Expected in $cleared: html
```

- get : Execute a GET request of URL. Example:  

```
$res = CommHttp::get('http://localhost:8000', ['p' => 'teste']);
//Expected in $res: body response of http://localhost:8000?p=teste
```