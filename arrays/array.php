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
if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}
ini_set('log_errors', 1);
ini_set('display_errors', 1);

# PHP-EX-VARIABLES
# EXERCICE 1
$mois = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
print_r($mois);
echo "<br />";
var_dump($mois);
echo "<br />";
$results = print_r($mois, false);
echo $results;
echo "<br />";
# EXERCICE 2
print_r("{$mois[2]} is the 3rd value of the array. <br />");
print_r("{$mois[5]} is the value assigned to the fifth key in the array. <br />");
$mois[7] = 'août';
var_dump($mois);
echo "<br />";
$text = "The quick brown foxxxx jumped over the lazy dog.";
$newtext = wordwrap($text, 25, "<br />\n");
echo $newtext;
# EXERCICE 3
$array = array(
  '01' => 'Ain',
  '03' => 'Allier',
  '07' => 'Ardèche',
  '15' => 'Cantal',
  '26' => 'Drôme',
  '38' => 'Isère',
  '42' => 'Loire',
  '43' => 'Haute-Loire',
  '63' => 'Puy-de-Dôme',
  '69' => 'Rhône',
  '73' => 'Savoie',
  '74' => 'Haute-Savoie',
);
echo "<br />";
print_r($array);
echo "<br />";
print_r($array[69]);
echo "<br />";
$array += [ "56" => "Moselle" ];
print_r($array);
echo "<br />";

while (list ($key, $val) = each ($array)) {
echo "Le département $val a le numéro $key. <br>";
}
# EXERCICE 4
$mailList = array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");
$max=sizeof($mailList);
for($i=0; $i<$max; $i++) {
echo "Salut $mailList[$i], devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)";
echo "<br>";
}
 ?>
