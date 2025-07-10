<?php
// host, user, password, database
$con = mysqli_connect('localhost', 'root', '', 'mystore');

if ( ! $con ) {
    // use mysqli_connect_error() when connect fails
    die("Connection failed: " . mysqli_connect_error());
}
?>
