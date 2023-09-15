<?php 
session_start();
// initializing variables
$ini = parse_ini_file('cred.ini');
$errors = array();
$server_name=$ini['server_name'];
$db_user=$ini['db_user'];
$db_pass=$ini['db_pass'];
$db_name=$ini['db_name'];

// connect to the database
$db = mysqli_connect($server_name,$db_user,$db_pass,$db_name);


if (isset($_POST['signup_btn'])) {
    // receive all input values from the form
    $pname = mysqli_real_escape_string($db, $_POST['pname']);
    $pnumber = mysqli_real_escape_string($db, $_POST['pnumber']);
    $pemail = mysqli_real_escape_string($db, $_POST['pemail']);
    
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($pname)) { array_push($errors, "Username is required"); }
    if (empty($pnumber)) { array_push($errors, "Email is required"); }
    if (empty($pemail)) { array_push($errors, "Password is required"); }
    // if ($pass != $cpass) {
    //   array_push($errors, "The two passwords do not match");
    // }
  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM webhunt WHERE mobile='$pnumber'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      // if ($user['name'] === $email) {
      array_push($errors, "email already exists");
      // }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $query = "INSERT INTO webhunt (name,mobile,email) VALUES('$pname', '$pnumber', '$pemail')";
        mysqli_query($db, $query);
        $_SESSION['pname'] = $pname;
        $_SESSION['pscore'] = 0;
        header('location: tv.php');
    }
  }

?>