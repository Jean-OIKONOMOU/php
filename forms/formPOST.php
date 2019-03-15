<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <!--  <form id="myForm" action="Page_C.php" method="post">
< ?php
    foreach ($_POST as $a => $b) {
        echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
    }
     echo file_get_contents("https://www.xyz.com/page1.php?check=10");
?> -->
<form action="/exercices/userPOST.php" method="post" target="_blank">
  First name: <input type="text" name="fname"><br>
  Last name: <input type="text" name="lname"><br>
  <input type="submit" value="Submit">
</form>
<p>Click on the submit button, and the form will be submittied using the POST method.</p>

  </body>
</html>
