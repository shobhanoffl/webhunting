<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Round 7</title>
</head>
<style>
    .heading{
        background-color: yellow;
    }
    #myVideo{
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }
    .main{
        position: fixed;
    }
    .new{
        position: relative;
        font-size: 72px;
        
    }
    
    

    .top{
        position: relative;
        background-color: aliceblue;
        margin-left: 500px;
        margin-right: 500px;
        background-image: linear-gradient(60deg,#12c2e9,#c471ed,#05f8fc);
        border-radius: 20px;
    }
    
    .rules{
        position: relative;
        background-color: lightblue;
        margin-left: 200px;
        margin-right: 200px;
        border-radius: 10px;
        border-style: ridge;
        border-color: whitesmoke;
        text-align: left;
        font-size: 59px;
        
    }
    .rules:hover{
        background-color:cornsilk;
        color: rgb(5, 5, 5);
        cursor: pointer;
    }

    .but{
        position: relative;
        
    }
    
    button{
        height: 50px;
        border-radius: 15px;
        width: 160px;
        font-size: large;
        background-color: #17dc80;
        border-color: black;
        border-style: ridge;
    }
    butkton:hover{
        background-color: green;
        
    }
    

    input.largerCheckBox{
        width:20px;
        height: 15px;
        
    }

    


</style>
<body>
    <div>
    <video autoplay muted loop id="myVideo">
        <source src="v.mp4" type="video/mp4">
    </video>

    <div class="top">
        <center><h1 class="new">THE CONCLUSION</h1></div></center>
    </div>
    
    <center>
        <h1 class="rules">
        
          You woke up in your bed at your home , you can't understand what is happening. Your friend is calling you throught the phone and you attending the call. He is saying that why are you late already the classes are started. Then you realize that you are slept in the bed and you are now coming to the hall and tv is on with a news channel speaking about the solar flare . You are going to switch off the tv at the time , there is  a flash news which says that , a girl is missing since two days. You seemed to be shocked and you came to know that you were dreaming . So again kate for the collge and you are going to the college,there you are called by the principal since there is no one in the corridor and in principal cabin. You are entering into the cabin by asking permission you are shocked because a doctor is dead coz someone stabbed him. And there is a note covered with blood. You took the note while reading it the note says night has thousand eyes. 
            
        </h1>
   </center>
   <center>
    <div class="but">
        <form action="/action_page.php">
            <br><br>
            <input type="checkbox" id="conditions" class="largerCheckBox" checked >
            <label style="color: black;font-size:x-large;"> I Accept All Terms and Conditions</label><br>
            <br>
            <button class="button"><a href="gameover.php" style="color: white;text-decoration: none;color: black;">Submit</a></button>
        </form>
    </div>
    </center>
</body>
</html