<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="home.css">

</head>

<body>
	<div class="background-ph">
		<div class="tv">
			<div class="screen-container">

				<div class="screen-mask"></div>
				<div class="channel-number"></div>

				<div class="content-page1">
					You have turned on my Favourite TV. By the way, I'm Mr.Tom, a game developer. <br>
                    I've programmed a game in this TV <br>
                    This is a very different game, where you cannot escape till you answer my questions <br>
                    Keep changing tuning the channel to know more...
					<!-- <h3>These include:</h3><br>
					<ul style="text-align: left;">
						<li>Python</li>
						<li>Javascript</li>
						<li>C/C++</li>
						<li>Java</li>
					</ul><br>
					This project is primarily a front-end art piece to show-off some of the skills I'm proud of. The styling and responsiveness are all handled by CSS and Javascript manages all events, sounds, and updates. It specifically required that I learn how AudioContexts work within Javascript to deliver the clean, crisp, and clear sounds you hear while navigating. -->
				</div>
				<div class="content-page3">
					<h1>Answer my questions</h1>
					<div class="portfolio-items">
						<ul>
							<li><a href="quizz.php">Click here to Start the Quiz</a></li>
							<!-- <li><a href="#" target="_blank">Quiz 2</a></li>
							<li><a href="#" target="_blank">Quiz 3</a></li>
							<li><a href="#" target="_blank">Quiz 4</a></li> -->
							<!-- <li><a href="https://github.com/code50/99374640" target="_blank">Quiz 1</a></li> -->
						</ul>
					</div>
					<footer>
						Click the above Quiz to answer the questions 
					</footer>
				</div>
				<div class="content-page5">This channel is just an empty channel of no use <br>
                     Go and answer my questions <br>
                     Do not waster your time <br>
                - By Mr.Tom </div>
				<div class="content-page7">
					<div class='video-wrapper'>
						<video class="video-test" id="channel7_video" type="video/mp4">
							<source src="https://www.youtube.com/watch?v=pdM-MAntToU" type='video/mp4'>
                            <!-- <source src="port23finalrender.mp4" type='video/mp4'> -->
						</video>
					</div>
				</div>

				<div class="static-layer noise invisible" id="display_screen"></div>

				<div class="contrast-layer"></div>
			</div>
			<div class="control-container">
				<div class="knob-wrapper">
					<img class="channel-knob" src="https://i.ibb.co/R35TVGc/tv-picture-nob.jpg" id="upper_knob">
				</div>
				<div class="power-button">
					<p>POWER</p>
				</div>
				<div class="grill"></div>
			</div>
		</div>
	</div>
	<audio crossorigin duration="1" id='click' preload="metadata">
		<source src="https://assets.codepen.io/9243490/twisting_dial_clicks.ogg" type="audio/ogg">

	</audio>
	<audio crossorigin duration="1" id="knob" preload="metadata">
		<source src="https://assets.codepen.io/9243490/dial_turning.ogg" type="audio/ogg">
	</audio>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="home.js"></script>
</body>
</html>