<?php
include('auth.php');
?>
<html>
<head>
    <title>Quizz</title>
    <link rel="stylesheet" href="css/quizz.css">
</head>
<body>
    <div class="starter">
        <button onclick="startQuiz(this)">Start</button>
      </div>
      <div class="container hide">
        <header>
          <p>Quiz</p>
          <div class="timer"></div>
        </header>
        <div class="question-box"></div>
        <footer>
          <button id="next-btn">Next</button>
          <button id="finish-btn" class="hide">Finish</button>
        </footer>
      </div>
      <div class="result-box hide">
        <div class="num-div">
          You have got
          <p id="got-num"></p>
          out of
          <p id="total-num"></p>
        </div>
        <div class="button-box">
          <br><br>
          Before Ending the Quiz...Kindly call the coordinators to note down the scores
          <br><br>
          <!-- <button id="replay" onclick="resultShow()">See Reullt</button> -->
          <!-- <button id="replay" type="submit" name="nextbtn">Next</button> -->
          <a href="tesla.php">
            <button id="endq" name="endq">End Quiz</button>
          </a>
        </div>
      </div>
      <script src="js/quizz.js"></script>
</body>
</html>