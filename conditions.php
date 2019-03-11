
<!DOCTYPE html>
<html>
<body>
<?php
/* PHP-EX-CONDITIONS */
/* EXERCICE 1 */
print "couille.";
$age = 18;
if ($age >= 18) {
print "<h1>" . "Vous êtes majeur." . "</h1>";
} elseif ($age < 18) {
print "<p>" . "Vous êtes mineur." . "</p>";
}

/* EXERCICE 2 */
$IsEasy = true;
if ($IsEasy == true) {
  print "C'est facile!1!" . "<br />\n" . "<br />\n";
} else {
  print "C'est difficile!!!";
};

echo ($IsEasy == true ? "C'est facile!!" . "<br />\n" : "C'est difficile!!!" . "<br />\n" . "<br />\n");

/* EXERCICE 3 */
$genre = "Homme";
if ($genre == "Homme" && $age >= 18) {
  print "<h1>" . "Vous êtes un homme et vous êtes majeur." . "</h1>" . "<br />\n" . "<br />\n";
} elseif ($genre == "Homme" && $age < 18) {
  print "<h1>" . "Vous êtes un homme et vous êtes mineur." . "</h1>" . "<br />\n" . "<br />\n";
} elseif ($genre == "Femme" && $age < 18) {
  print "<h1>" . "Vous êtes une femme et vous êtes majeur." . "</h1>" . "<br />\n" . "<br />\n";
} elseif ($genre == "Femme" && $age < 18) {
  print "<h1>" . "Vous êtes une femme et vous êtes mineur." . "</h1>" . "<br />\n" . "<br />\n";
};

/* EXERCICE 4 */
$magnitude = 9;
print "<h3>" . "La magnitude du séisme est de " . $magnitude . " sur l'échelle de Richter. Voilà son effet: " . "</h3>";
switch ($magnitude) {
    case 0:
        echo "Rien du tout.";
        break;
    case 1:
        echo "Micro-séisme impossible à ressentir.";
        break;
    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    case 3:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;
    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;
    case 6:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;
    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
    case 8:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
    case 9:
        echo "Séisme capable de tout détruire sur une très vaste zone. La fin approche." . "<br />\n";
        break;
};

/* EXERCICE 5 */
$maVariable = 'Homme';
echo ($maVariable != 'Homme' ? "<br />\n" . 'C\'est une développeuse !!!' . "<br />\n" : "<br />\n" . 'C\'est un développeur !!!' . "<br />\n");
if ($maVariable != 'Homme') {
  print "<br />\n" . 'C\'est une développeuse !!!' . "<br />\n";
} else {
  print "<br />\n" . 'C\'est un développeur !!!' . "<br />\n";
};

/* EXERCICE 6 */
echo ($monAge >= 18) ? "<br />\n" . 'Tu es majeur' . "<br />\n" : "<br />\n" . 'Tu n\'es pas majeur' . "<br />\n";
if ($monAge >= 18) {
  print "<br />\n" . 'Tu es majeur' . "<br />\n";
} else {
  print "<br />\n" . 'Tu n\'es pas majeur' . "<br />\n";
};

/* EXERCICE 7 */
echo ($maVariable2 == false) ? "<br />\n" . 'c\'est pas bon !!!' . "<br />\n" : "<br />\n" . 'c\'est ok !!' . "<br />\n";
if ($maVariable2 == false) {
  print "<br />\n" . 'c\'est pas bon !!!' . "<br />\n";
} else {
  print "<br />\n" . 'c\'est ok !!' . "<br />\n";
};

/* EXERCICE 8 */
$maVariable3 = true;
echo ($maVariable3) ? "<br />\n" . 'c\'est ok !!' . "<br />\n"  : "<br />\n" . 'c\'est pas bon !!!' . "<br />\n" ;
if ($maVariable3) {
  print "<br />\n" . 'c\'est ok !!' . "<br />\n";
} else {
  print "<br />\n" . 'c\'est pas bon !!!' . "<br />\n";
};
 ?>

</body>
</html>
