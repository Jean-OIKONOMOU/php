<!DOCTYPE html>
<html>
<body>

<?php
if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}

echo ini_get('display_errors');
ini_set('log_errors', 1);
  ini_set('display_errors', 1);
/* PHP-EX-VARIABLES */
/* EXERCICE 1 */
function writeMsg() {
$a = true;
  if (is_bool($a) === true) {
    echo "True" . "<br />";
  }
}
writeMsg();
/* EXERCICE 2 */
function writeMsg1($arg1) {
echo "$arg1.<br>";
}
writeMsg1("azer");
writeMsg1("test");

/* EXERCICE 3 */
function writeMsg2($arg1, $arg2) {
echo $arg1 . " " . $arg2 . "<br />";
}
writeMsg2("Bob", "LENON");
writeMsg2("Caterina", "THEMISTOCLES");

/* EXERCICE 4 */
function valueCompare($arg1, $arg2) {
settype($arg1, "integer");
settype($arg2, "integer");
if ($arg1 > $arg2) {
    echo "Le premier nombre est plus grand. <br />";
  } elseif ($arg1 < $arg2) {
    echo "Le premier nombre est plus petit. <br />";
  } else {
    echo "Les deux nombres sont identiques. <br />";
  }
}
valueCompare(35, 85);
/* EXERCICE 5 */
function toString(int $arg1, string $arg2) {
$_string = (string)$arg1;
print "{$_string} {$arg2} <br />";
}
toString(6, "salut");
/* EXERCICE 6 */
function helloMsg(int $age, string $nom, string $prenom) {
print "Bonjour {$nom} {$prenom}, tu as {$age} ans. <br />";
}
helloMsg(28, "finkelstein", "alex");

/* EXERCICE 7 */
function genreAge(int $age2, string $genre) {
  $genre = strtolower($genre);
  if ($genre !== "homme" && $genre !== "femme") {
echo '<script language="javascript">';
echo 'alert("Vous ne pouvez mettre que homme ou femme.")';
echo '</script>';
} elseif ($genre == "homme" && $age2 > 18) {
  echo "Vous êtes un homme et vous êtes majeur.<br />";
  } elseif ($genre == "homme" && $age2 <= 18) {
  echo "Vous êtes un homme et vous êtes mineur.<br />";
  } elseif ($genre == "femme" && $age2 > 18) {
  echo "Vous êtes un femme et vous êtes majeur.<br />";
} elseif ($genre == "femme" && $age2 <= 18) {
  echo "Vous êtes un femme et vous êtes mineure. <br />";
  }
}
genreAge(8, "femme");

/* EXERCICE 8 */
function makecoffee(int $a = 1, int $b = 2, int $c = 3) {
  $d = $a + $b + $c;
  return "The sum is equal to: {$d}.\n";
}
echo makecoffee();
 ?>
</body>
</html>
