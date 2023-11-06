<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_property');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    //echo "Connected successfully";
}
;

?>