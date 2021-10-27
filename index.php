<!DOCTYPE html>
<html>
<body>

<?php
$txt = "Fatih";

echo "I love $txt!";

$user = 'root';
$pass = 'WebDevelopment';
$db = 'dataBase';

$db = new mysqli('localhost', $user , $pass , $db) or die("Unable to connect");

echo "Data Base Connected";

?>

</body>
</html>
    
    

