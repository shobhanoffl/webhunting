<?php
include("auth.php");
$_SESSION['pscore2']=microtime(true);
$duration=$_SESSION['pscore2']-$_SESSION['pscore'];
if (isset($_POST['pass3btn'])) {
    $pass3 = mysqli_real_escape_string($db, $_POST['pass3']);
    if($pass3=="speaker"){
        header('Location: football.php');
    }
}
?>

<html>
    <b>
    </b>
    <br>
    Enter Pass Code for Next level <br>
    <form method="post">
        <input type="text" name="pass3" id="pass3">
        <button type="submit" name="pass3btn">enter next level</button>
    </form>
</html>