<?php require_once ("lab5_db.php"); 
$select = mysqli_select_db($link, $db);
// selecting db

$setecting_all_from_notes = "SELECT * FROM notes";

$succes = mysqli_query($link, $setecting_all_from_notes);

while ($note = mysqli_fetch_array($succes)){
echo "<section>";
echo $note ['created'], "<br>";
?>
<a href="comments.php?note=<?php echo $note['id']; ?>">
<?php echo "<h3>",$note ['title'], "</h3>";?></a>
 
<?php
echo $note ['article'], "<br>";
echo "</section>", "<br><br><br>";}
?>