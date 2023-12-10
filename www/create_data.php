<?php
// connection creating
$link = mysqli_connect ("localhost", "admin_lab5", "");
if ($link) {
    echo "connection created succesfully", "<br>";
} else {
    echo "connection not created", "<br>";
}

// function
function execute_query($link, $query){
    $succes = mysqli_query($link, $query);
    if ($succes) {
    	echo "query executed succesfully", "<br>";
	} else {
    	echo "query not executed", "<br>";
	}
}

// db name
$db = "lab5DB";

// selecting db
$select = mysqli_select_db($link, $db);
if ($select){
	echo "db selected", "<br>";
} else {
	echo "db not selected", "<br>";
}
$creating_notes_table = "
	CREATE TABLE notes
	(id INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (id),
	created DATE,
	title VARCHAR (20),
	article VARCHAR (255))";
execute_query($link, $creating_notes_table)
?>