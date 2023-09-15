<html>
  <head>
    <title>Guess the Word Game</title>
    <link rel="stylesheet" href="css/connections.css">
  </head>
  <body>
    <h1>Guess the Word Game</h1>
    <div id="question"></div>
    <div id="images"></div>
    <form action="/fp" method="post" enctype="multipart/form-data">
      <input type="text" id="guess">
      <button type="submit">Submit</button>
    </form>
    <center><br><br>  
      <a id="prevqs" href="#" style="color:white;"></a>
      <br><br>
      <a id="nextqs" href="#" style="color:white;">Skip</a>
      <br><br><br>
      <!-- <a id="finalsubmit" style="color:white; background-color:blue; padding:10px; text-decoration:none;border-radius:15px;">Finish Submission</a> -->
    </center>
    <div id="result"></div>
    <script src="js/connections.js"></script>
  </body>
</html>
