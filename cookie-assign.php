<?php

// Assign a valid cookie for 1 hour
// TODO

setcookie('name','abc',time() + (60 * 60));
echo '<br>'.'Value Assigned to a cookie';

?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <p><a href="cookie-read.php">Reading the cookie</a></p>
    <p>
		This page just assigned a value to the cookie
    </p>
</body>

</html>