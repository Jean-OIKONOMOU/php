<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../master.css">
  </head>
  <body>

  </body>
</html>
<?php
/* PHP-EX-VARIABLES */
/* EXERCICE 1 */
$prénom = "Jean";
$nom = "OIKONOMOU";
$age = 25;
print "<h1>" . " Bonjour " . $prénom . ", enfant de la famille " . $nom . ", a atteint le level de " . $age . "! " . "</h1>";

/* EXERCICE 2 */
$km = 1;
print "<h2>" . "J'ai parcouru " . $km . " km. " . "</h2>";
print "<h2>" . "J'ai parcouru " . ($km + 3) . " km. " . "</h2>";
print "<h2>" . "J'ai parcouru " . ($km + 125) . " km. " . "</h2>";

/* EXERCICE 3 */
$myString = "Hello";
$myBoolean = true;
$myInt = 3;
$myFloat = 2.56;
print "<p> " . "My string is " . $myString . ". My boolean's value is " . $myBoolean . ". My integer's value is " . $myInt . ". Finally, my float's value is " . $myFloat . ". " . "</p>";

/* EXERCICE 4 */
$empty;
print "<p> " . "I'm empty : " . $empty . ". " . "</p>";
$empty += 5;
print "<p> " . "I'm the empty variable plus five: " . $empty . ". " . "</p>";

/* EXERCICE 5 */
$myAddition = (3+4);
$myMult = (5*20);
$myDivision = (45/5);
print "<h3> " . "My addition is equal to: " . $myAddition . ". My multiplication is equal to: " . $myMult . ". My division is equal to: " . $myDivision . ". " . "</h3>";

/* EXERCICE 6 */
$prixShirt = 785;
$montantRistourne = (785/100)*30;
print "<p> " . "Le prix du t-shirt de base s'éléve à: " . $prixShirt . ". " . "Le montant de la ristourne s'éléve à : " . $montantRistourne . ". " . "Le nouveau prix d'un t-shirt s'éléve donc à: " . ($prixShirt-$montantRistourne) . ". " . "</p>";
 ?>
