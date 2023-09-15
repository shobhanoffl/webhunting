<?php
include("auth.php");
if (isset($_POST['pass4btn'])) {
    $pass4 = mysqli_real_escape_string($db, $_POST['pass4']);
    if($pass4=="lenovo"){
        header('Location: usbhub.php');
    }
}
?>

<html>
    Enter Pass Code for Next level <br>
    <form method="post">
        <input type="text" name="pass4" id="pass4">
        <button type="submit" name="pass4btn">enter next level</button>
    </form>
</html>