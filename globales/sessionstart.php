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
session_start();

echo 'Welcome to page #1';

$_SESSION['prénom'] = 'Jean-Adrian';
$_SESSION['nom'] = 'Oikonomou';
$_SESSION['time'] = time();

print_r ("<p>".$_SERVER['HTTP_USER_AGENT']."</p>");
print_r ("<p>".$_SERVER["REMOTE_ADDR"]."</p>");
print_r ("<p>".$_SERVER['SERVER_NAME']."</p>");
$link_address1 = 'sessionstart.php';
echo "<a href='".$link_address1."'>SessionStart</a>";
echo "<br />";
$link_address2 = 'sessionstart2.php';
echo '<a href="'.$link_address2.'">SessionStart2</a>';
echo "<br />";
echo session_id();
 ?>
