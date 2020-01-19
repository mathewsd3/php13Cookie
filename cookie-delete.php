<?php

//Assign an empty value and an expired date to the cookie to delete it 
// TODO

if(isset($_COOKIE['name']))
unset($_COOKIE['name']);
setcookie('name', null, -1);
 
?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <p><a href="cookie-read.php">Reading the cookie</a></p>
    <p>This page has just deleted the cookie by assigning an empty value and an expired expiration date (date in the past)
	</p>
</body>

</html>