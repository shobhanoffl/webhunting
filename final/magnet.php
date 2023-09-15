<?php
include("auth.php");
if (isset($_POST['pass6btn'])) {
    $pass6 = mysqli_real_escape_string($db, $_POST['pass6']);
    if($pass6=="chatgpt"){
        header('Location: dell.php');
    }
}
?>

<html>
    Enter Pass Code for Next level <br>
    <form method="post">
        <input type="text" name="pass6" id="pass6">
        <button type="submit" name="pass6btn">enter next level</button>
    </form>
</html>