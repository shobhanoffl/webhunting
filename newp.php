<?php
$_SESSION['pscore']=microtime(true);
?>

<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<link rel="stylesheet" href="css/pg.css">
<title>Escape Room</title>  
<body>
  <?php echo $_SESSION['pscore']; ?>
    <div class='assembly'>
      <div class='plane plane0'>
        <div class='door'>
          <div class='doorknob'></div>
        </div>
      </div>
      <div class='plane plane1'></div>
      <div class='plane plane2'><div class='key'></div></div>
      <div class='plane plane3'></div>
    </div>
    <!-- An invisible overlay to catch hover events -->
    <div class='fakeassembly'>
      <div class='turnleft'></div>
      <div class='turnright'></div>
    </div>
    <script src="js/pg.js"></script>
  </body>
</html>