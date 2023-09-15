<?php
include("auth.php");
if (isset($_POST['pass1btn'])) {
    $pass1 = mysqli_real_escape_string($db, $_POST['pass1']);
    if($pass1=="thorinindia"){
        header('Location: computer.php');
    }
}
?>

<html>
    Enter Pass Code for Next level <br>
    <form method="post">
        <input type="text" name="pass1" id="pass1">
        <button type="submit" name="pass1btn">enter next level</button>
    </form>
</html>