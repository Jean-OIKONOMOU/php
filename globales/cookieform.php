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
  setlocale(LC_ALL,'en_US.UTF-8');
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  if (isset($fname) && isset($lname) && (!empty($fname)) && (!empty($lname))) {
    echo "<br />";
    echo "Hello $fname" . " $lname!";
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
       <p>By clicking on submit you accept to give us control over everything, and save your info in a delicious cookie.</p>
         <input type="submit" value="Submit">
           </form>
         </body>
       </html>
       <?php
  }
 ?>
