<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Round 3</title>
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
        <center><h1 class="new">RULES FOR NEXT ROUND</h1></div></center>
    </div>
    
    <center>
        <h1 class="rules">
            
          After successfully solved the case, everybody appreciates you in your depatrtment , so there is a dinner with everyone.After completing your dinner, while leaving someone attacked you , And you lost your consiuosness You are woken from the comma in a hospital,there is no one around.The hospital seems too scary.You are feeling dizzy.You have only four fingers in your hand ,You have to leave right now to save your life , So find the key to unlock the room
            
        </h1>
   </center>
   <center>
    <div class="but">
        <form action="/action_page.php">
            <br><br>
            <input type="checkbox" id="conditions" class="largerCheckBox" checked >
            <label style="color: black;font-size:x-large;"> I Accept All Terms and Conditions</label><br>
            <br>
            <button class="button"><a href="newp.php" style="color: white;text-decoration: none;color: black;">Submit</a></button>
        </form>
    </div>
    </center>
</body>
</html