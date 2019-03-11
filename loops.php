<!DOCTYPE html>
<html>
<body>
<?php
/* PHP-EX-VARIABLES */
/* EXERCICE 1 */
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
print "<br />";
print "<br />";
/* EXERCICE 2 */
$a = 15;
for ($i = 1; $i <= 20; $i++) {
    echo $i * $a . " ";
}
print "<br />";
print "<br />";
/* EXERCICE 3 */
$b = 15;
for ($i = 100; $i >= 10; $i--) {
    echo $i * $b . " " . " ";
}
print "<br />";
print "<br />";

/* EXERCICE 4 */
for ($i = 1; $i <= 10; $i += $i/2) {
    echo $i . " ";
}
print "<br />";
print "<br />";

/* EXERCICE 5 */
for ($i = 1; $i <= 15; $i++) {
    echo "On y est presque. On est au pas numéro: " . $i . "<br />";
    if ($i == 15) {
      echo "On a fait " . $i . " pas.";
    }
}
print "<br />";
print "<br />";

/* EXERCICE 6 */
for ($i = 20; $i >= 0; $i--) {
    echo "C'est presque bon. On est au pas numéro: " . $i . "<br />";
    $count++;
    if ($i == 0) {
      echo "On a fait " . $count . " pas.";
    }
}
print "<br />";
print "<br />";

/* EXERCICE 7 */


/* EXERCICE 8 */


 ?>
</body>
</html>
