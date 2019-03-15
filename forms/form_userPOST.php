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
  ini_set('session.use_cookies', '0');
  setlocale(LC_ALL,'en_US.UTF-8');
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $civilité = $_POST['civilité'];
  $pdf = $_POST['pdf'];
  // PATHINFO METHOD
  $pathinfo = pathinfo($pdf);
  $extension = $pathinfo['extension'];
  $dirname = $pathinfo['dirname'];
  $basename = $pathinfo['basename'];
  $filename = $pathinfo['filename'];
  // PARSE_URL METHOD
  $parse_url = parse_url($pdf);
  $scheme = $parse_url['scheme'];
  $host = $parse_url['host'];
  $path = $parse_url['path'];
  $query = $parse_url['query'];
  $fragment = $parse_url['fragment'];
  if(isset($fname) && isset($lname) && isset($civilité) && (!empty($fname)) && (!empty($lname)) && (!empty($civilité))
  && (!empty($pdf))){
    echo "<br />";
    echo "Hello $civilité" . " $fname" . " $lname!" . "<br />" . "Votre fichier a comme extension $extension.";
    echo "<br />";
    echo "dirname = $dirname";
    echo "<br />";
    echo "basename = $basename";
    echo "<br />";
    echo "filename = $filename";
    echo "<br />";
    echo "scheme = $scheme  host = $host  path = $path  query = $query  fragment = $fragment.";
} else  {?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
            <link rel="stylesheet" href="master.css">
      </head>
      <body>
    <form class="" method="post">
        <select name="civilité">
        <option value="Mr">Mr.</option>
        <option value="Mme">Mme.</option>
        </select>
        <br>
       First name: <input type="text" name="fname"><br>
       Last name: <input type="text" name="lname"><br>
       Your PDF: <input type="file" name="pdf"><br>
         <input type="submit" value="Submit">
           </form>
         </body>
       </html>
       <?php
  }
  //if (!isset($_POST['fname']) && !isset($_POST['lname']) && !isset($_POST['civilité']))
 ?>
