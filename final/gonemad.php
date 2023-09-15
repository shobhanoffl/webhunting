<?php
include("auth.php");
if (isset($_POST['pass5btn'])) {
    $pass5 = mysqli_real_escape_string($db, $_POST['pass5']);
    if($pass5=="madras"){
        header('Location: cafe.php');
    }
}
?>

<html>
    Enter Pass Code for Next level <br>
    <form method="post">
        <input type="text" name="pass5" id="pass5">
        <button type="submit" name="pass5btn">enter next level</button>
    </form>
</html>