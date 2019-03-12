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
</form>
<form name='fr' action='array.php' method='POST'>
<include type='' name='var1' value='val1'>
<include type='' name='var2' value='val2'>
</form>
<script type='text/javascript'>
document.fr.submit();
</script>
<!--
<script type="text/javascript">
    document.getElementById('myForm').submit();
</script>-->

  </body>
</html>
