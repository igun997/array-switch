# Usage
```php
<?php
include 'switch.php'
$data = ["A","B","C"];
//Switching Array Index 1 to 2 
$newdata = switch($data,1,2);
var_dump($newdata);
//Result ["A","C","B"]
?>
```
# Author
indra.gunanda@gmail.com
