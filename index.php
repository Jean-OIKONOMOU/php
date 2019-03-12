<?php
# EXERCICE PHP-EX-PARAMURL
# EXERCICE 1
// index.php?nom=Nemare&prenom=Jean
if (isset($_GET["nom"]) && isset($_GET["prenom"])) {
  echo "Elles existent! <br />";
}
echo "<br>";
print_r($_GET);
echo "<br>";
while (list ($key, $val) = each ($_GET)) {
echo "$key : $val . <br>";
}
echo "<br>";

# EXERCICE 2
// index.php?dateDebut=2/05/2016&dateFin=27/11/2016
if (isset($_GET["age"])) {
  echo "Elle existe! <br />";
} else {
  echo '<script language="javascript">';
  echo 'alert("Paramètre manquant.")';
  echo '</script>';
}

# EXERCICE 3
// index.php?dateDebut=2/05/2016&dateFin=27/11/2016
if (isset($_GET["dateDebut"]) && isset($_GET["dateFin"])) {
  echo "Elles existent! <br />";
}

# EXERCICE 4
// index.php?langage=PHP&serveur=LAMP
if (isset($_GET["langage"]) && isset($_GET["serveur"])) {
  echo "Elles existent! <br />";
}
/*$results = print_r($mois, false);
echo $results;*/

# EXERCICE 5
// index.php?semaine=12
if (isset($_GET["semaine"])) {
  echo "Elle existe! <br />";
}

# EXERCICE 6
// index.php?batiment=12&salle=101
if (isset($_GET["batiment"]) && isset($_GET["salle"])) {
  echo "Elles existent! <br />";
}

 ?>
