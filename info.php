<?php
ini_set('log_errors', 1);
  ini_set('display_errors', 1);
$now = getdate();
$raw = '22. 11. 1968';
$start = DateTime::createFromFormat('d. m. Y', $raw);echo "<hr />";
echo 'Start date: ' . $start->format('Y-m-d') . "\n";
$date = date('m/d/Y h:i:s a', time());
echo "<br />";
echo $date;
echo "<br />";
$string = "this is a string.";
echo '$string' . " $string";
echo "<br />";
echo '$string ' . $string;
echo "<br />";
$left = "left";
$right = "right";
$left =& $right;
echo "$left";
echo "<br />";
echo $left . " I'm devoid of double quotation marks.";
echo "<br />";
$left = "middle";
echo $right;
echo "<br />";
$right = "upwards";
echo $left;
function is_octal($x) {
   if (decoct(octdec($x)) == $x) {
     echo "<br />";
    $y = "$x is octal.";
  } else {
    echo "<br />";
    $y = "$x isn't octal.";
  };
  return $y;
  #  return decoct(octdec($x)) == $x;
}

echo is_octal(077); // true
echo is_octal(195); // false;
var_dump(is_octal(125) . " |^OwO^|");
echo "<br />";
var_dump((2-4)*8);
echo "<br />";
var_dump(3<9);
echo "<br />";
var_dump($left . $right);
echo "<br />";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>

  </body>
</html>
