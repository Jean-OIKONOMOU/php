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
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https";
else
    $link = "http";

// Here append the common URL characters.
$link .= "://";

// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];

  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  $civilité = $_GET['civilité'];
  $pdf = $_GET['pdf'];



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
  // SAME BUT FOR THE URL OF THE PAGE IN GET FORMAT
  $pathinfo2 = pathinfo($link);
  $extension2 = $pathinfo2['extension'];
  $dirname2 = $pathinfo2['dirname'];
  $basename2 = $pathinfo2['basename'];
  $filename2 = $pathinfo2['filename'];
  // PARSE_URL METHOD
  $parse_url2 = parse_url($link);
  $scheme2 = $parse_url2['scheme'];
  $host2 = $parse_url2['host'];
  $path2 = $parse_url2['path'];
  $query2 = $parse_url2['query'];
  $fragment2 = $parse_url2['fragment'];

  if((!empty($fname)) && (!empty($lname)) && (!empty($civilité)) && (!empty($pdf) && ($extension == "pdf"))){
    echo "<hr>";

    echo "Hello $civilité" . " $fname" . " $lname!" . "<br />" . "Votre fichier a comme extension $extension.";

    echo "<br />";

    echo "dirname = $dirname // basename = $basename // filename = $filename";

    echo "<br />";

    echo "scheme = $scheme // host = $host // path = $path // query = $query // fragment = $fragment.";

    echo "<hr>";

    echo "<p>$link</p>";

    echo "<p>extension = $extension2</p>";

    echo "<p>dirname = $dirname2</p>";

    echo "<p>basename = $basename2</p>";

    echo "<p>filename = $filename2</p>";

    echo "<p>scheme = $scheme2</p>";

    echo "<p>host = $host2</p>";

    echo "<p>path = $path2</p>";

    echo "<p>query = $query2</p>";

    echo "<p>fragment = $fragment2</p>";

} elseif ((isset($fname) && isset($lname) && isset($civilité) && (!empty($fname))
&& (!empty($lname)) && (!empty($civilité)) && (!empty($pdf) && ($extension != "pdf")))) {?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
          <link rel="stylesheet" href="master.css">
    </head>
    <body>
  <form class="" method="get">
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
         <script type="text/javascript">
           alert("Votre fichier n'a pas la bonne extension.");
         </script>
       </body>
     </html>
   <?php
 }
  else {?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
            <link rel="stylesheet" href="master.css">
      </head>
      <body>
    <form class="" method="get">
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
  //if (!isset($_GET['fname']) && !isset($_GET['lname']) && !isset($_GET['civilité']))
 ?>
