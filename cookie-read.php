<?php

// Read the cookie value
// TODO
echo '<br>'.'----------------'.'<br>';

if(isset($_COOKIE['name'])){
echo 'the cookie value is : '. $_COOKIE['name'];
}else{
echo 'no cookie for the key "name"';
}
echo '<br>'.'----------------'.'<br>';

if(isset($_COOKIE)){
foreach ($_COOKIE as $key => $value) {
echo '<br>'."$key : $value";
}}


?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <p><a href="cookie-assign.php">Assign a cookie</a></p>
    <p><a href="cookie-delete.php">Delete a cookie</a></p>
    <p>
        Value of the cookier: TODO (Read the cookie value)
    </p>
</body>

</html>