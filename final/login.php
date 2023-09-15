<?php 
include('auth.php'); 
if(isset($_SESSION['pname'])){
	// header('location: tv.php');
    // header('Location: ' . $_SERVER['HTTP_REFERER']);
	// exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Hunting</title>
    <style>
        #myVideo{
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }
        .main{
            position: fixed;

 
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
        }

        
.button{
    /* position: relative; */
    left: 620px;
    top: 320px;
    background-color: rgb(247, 14, 14);
    border-radius: 10px;
    color: white;
    width: 100px;
    height: 40px;
    font-size: x-large;
    
}
.button:hover{
    cursor: pointer;
    background-color: rgb(11, 160, 11);
    transition: .2s;
}
.input{
    /* position: relative; */
    /* top:250px; */
    left: -12px;
    height: 20px;
    
}

img{
    width: 250px;
    /* margin-top: 45px; */
    /* padding-bottom: 100px; */
    /* position: relative; */
    left: 550px;
    top: 100px;
}

body{
    overflow: hidden;
}
::placeholder{
    color:azure;
    text-align: center;
    
}
    </style>
</head>
<body>
   
    <!-- The video -->
<video autoplay muted loop id="myVideo">
    <source src="files/v.mp4" type="video/mp4">
  </video>
  
  <div class="main">
          <center>
            <br><br><br><br><br><br><br><br><br><br>
          <img src="files/joy.png" alt="" srcset="">
          <form class="input" method="post" action="login.php">
              <input name="pname" type="text" class="pname" placeholder="Enter Player Name" style="width: 20%;height: 40px; background:linear-gradient(60deg,rgb(240, 65, 152),red);border-radius: 10px;border-color: rgb(113, 228, 211);" required ><br><br>
              <input minlength="10" name="pnumber" class="pname" placeholder="Enter Mobile Number" style="width: 20%;height: 40px; background:linear-gradient(60deg,rgb(240, 65, 152),red);border-radius: 10px;border-color: rgb(113, 228, 211);" required ><br><br>
              <input name="pemail" type="email" class="pname" placeholder="Enter Mobile Number" style="width: 20%;height: 40px; background:linear-gradient(60deg,rgb(240, 65, 152),red);border-radius: 10px;border-color: rgb(113, 228, 211);" required ><br><br><br><br>
              <button class="button" name="loginbtn" type="submit">START</button>
            </form>
        </center>
</div>
</body>
</html>