<?php 
require_once ("lab5_db.php");
// selecting db
$select = mysqli_select_db($link, $db);

$note_id = $_GET['note'];

$select_note = "
SELECT created, title, article
FROM notes
WHERE id = $note_id;
";

$succes = mysqli_query($link, $select_note);
$note = mysqli_fetch_array($succes);
echo "<section>";
echo $note ['created'], "<br>";
echo "<h3>",$note ['title'], "</h3>";
echo $note ['article'], "<br>";
echo "</section>", "<br><br><br>";

$select_comments = "
SELECT *
FROM comments
WHERE art_id = $note_id;
";

$succes = mysqli_query($link, $select_comments);

$comments = mysqli_fetch_array($succes);
if ($comments > 0){
	while ($comments = mysqli_fetch_array($succes)){
	echo "<h2>Comments:</h2>";
	echo "<section>";
	echo "<b>", $comments ['created'], "</b> ";
	echo "<i>", $comments ['author'], "</i> thinks about this post: <br>";
	echo $comments ['comment'], "<br><br>";
	echo "</section>", "<br><br><br>";
	}
} else {
	echo "<b>Nobody had comented this post...</b><br>You can be first!";
}
?>