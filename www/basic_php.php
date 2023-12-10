<?php echo "<h1>MY FIRST PHP</h1>";
// exersices 1 - 4
echo "<h3>exersices 1 - 4: simple moves with variables</h3>";
$a = 10;
$b = 20;
echo "a = ", $a, "<br/>", "b = ", $b, "<br/>";

$c = $a + $b;
echo "c = ", $c, "<br/>";

$c *= 3;
echo "c = ", $c, "<br/>";

$c /= $b - $a;
echo "c = ", $c, "<br/>";
// exersices 5 - 7
echo "<h3>exersices 5 - 7: string concatenation</h3>";
$p = "Programm";
$b = "works";
$result = $p . " " . $b;
$result .= " correct";
echo $result, "<br/>";
// exersice 8
echo "<h3>exersice 8: swaping two variables</h3>";
$q = 5;
$w = 7;
echo "q = ", $q, ", w = ", $w, "<br/>";
$q ^= $w ^= $q ^= $w;
echo "q = ", $q, ", w = ", $w, "<br/>";
// exersice 9
echo "<h3>exersice 9: using loops to print numbers in order</h3>";
for ($i = 23; $i <= 78; $i++){
    echo $i, " ";
}
// exersice 10
echo "<h3>exersice 10: using loops to print unordered list</h3>";
echo "<ul>";
  for ($i = 1; $i <= 10; $i++){
    echo "<li>element</li>";
}
echo "</ul>";
// exersice 11
echo "<h3>exersice 11: 100 random numbers</h3>";
for ($i = 0; $i <= 100; $i++){
    $numbers[$i] = rand();
}
echo "<h4>printing with while:<br/></h4>";
$i = 0;
while ($i < 100){
    echo $numbers[$i], " ";
    $i ++;
}
echo "<h4>printing with foreach:</h4>";
foreach ($numbers as $number){
    echo $number, " ";
}
// exersice 12
echo "<h3>exersice 12: using switch</h3>";
$day = date("l");
switch($day){
    case "Monday":
        echo "ponedelnik - bezdelnik";
        break;
    case "Tuesday":
        echo "vtornik - povtornik";
        break;
    case "Wednesday":
        echo "sreda - ne beda";
        break;
    case "Thursday":
        echo "chetverg - go tverk";
        break;
    case "Friday":
        echo "piatnica - razvratica";
        break;
    case "Saturday":
        echo "subota - goodbye rabota";
        break;
    case "Sunday":
        echo "voskresenie - hello pohmelie";
        break;
}
// exersice 13
echo "<h3>exersice 13: simple function</h3>";
function getPlus10($var){
    echo $var + 10;
}
$a = 42;
echo "a = ", $a, "<br/>a + 10 = ";
getPlus10(42);
echo "<br/>a = ", $a, "<br/>";
?>