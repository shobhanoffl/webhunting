<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Round 6</title>
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
        
            You saved the girl . Due to the alien invasion , the defense security's emergency protocol of the hospital is activated. Then we all came to know this is not a ordinary hospital And This is a abondant dis military base, which is connected to AREA 51 in late 1990s and there is a toxic gas releasing from the ventilator , So you and the girl need to escape from the military base so that you need to hack and solve the alien's security system called lylyong puzzle
            
        </h1>
   </center>
   <center>
    <div class="but">
        <form action="/action_page.php">
            <br><br>
            <input type="checkbox" id="conditions" class="largerCheckBox" checked >
            <label style="color: black;font-size:x-large;"> I Accept All Terms and Conditions</label><br>
            <br>
            <button class="button"><a href="ancient.php" style="color: white;text-decoration: none;color: black;">Submit</a></button>
        </form>
    </div>
    </center>
</body>
</html