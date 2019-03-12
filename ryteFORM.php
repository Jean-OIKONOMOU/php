<?php
    session_start();

    $echoedShout = "Hello user.";

    if(count($_POST) > 0) {
        $_SESSION['shout'] = $_POST['shout'];

        header("HTTP/1.1 303 See Other");
        header("Location: http://$_SERVER[HTTP_HOST]/echo.php");
        die();
    }
    else if (isset($_SESSION['shout'])){
        $echoedShout = $_SESSION['shout'];

        /*
            The source code which changes the database goes here.
        */

        session_unset();
        session_destroy();
    }
?>

<!DOCTYPE html>
<html>
<head><title>PRG pattern example in PHP</title>

<body>
    <?php echo "<p>$echoedShout</p>" ?>
    <form action="array.php" method="POST">
        <input type="text" name="shout" value="" />
    </form>
</body>
</html>
