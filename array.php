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
# EXERCICE 2
print_r("{$mois[2]} <br />");
$text = "The quick brown foxxxx jumped over the lazy dog.";
$newtext = wordwrap($text, 25, "<br />\n");

echo $newtext;
# EXERCICE 3


# EXERCICE 4


 ?>
