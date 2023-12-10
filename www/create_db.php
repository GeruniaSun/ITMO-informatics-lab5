<?php
$link = mysqli_connect ("localhost", "root", "");
if ($link) {
    echo "connection created succesfully", "<br>";
} else {
    echo "connection not created", "<br>";
}


$db = "lab5DB";
$query = "CREATE DATABASE $db";
$create_db = mysqli_query($link, $query);
if ($create_db) {
    echo "Database $db created succesfully", "<br>";
} else {
    echo "Database not created", "<br>";
}
?>
