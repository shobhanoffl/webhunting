<?php
include("auth.php");
if (isset($_POST['pass2btn'])) {
    $pass2 = mysqli_real_escape_string($db, $_POST['pass2']);
    if($pass2=="aspirine"){
        header('Location: round3.php');
    }
}
?>

<html>
    <b>

        Entered Answer is <?php echo $_SESSION['pscore']; ?>
    </b>
    <br>
    Enter Pass Code for Next level <br>
    <form method="post">
        <input type="text" name="pass2" id="pass2">
        <button type="submit" name="pass2btn">enter next level</button>
    </form>
</html>