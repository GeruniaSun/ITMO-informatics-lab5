<?php
$link = mysqli_connect ("localhost", "root", "");
if ($link) {
    echo "connection created succesfully", "<br>";
} else {
    echo "connection not created", "<br>";
}

$db = "lab5DB";
$query = "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost'
IDENTIFIED BY 'admin'
WITH GRANT OPTION";
$create_user = mysqli_query($link, $query);
if ($create_user) {
    echo "user created succesfully", "<br>";
} else {
    echo "user not created", "<br>";
}
?>
