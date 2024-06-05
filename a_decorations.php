<?php
include("connect.php");
session_start();
 ?>
<html>
    <body>
        <style>
            body{
                background-color: cornflowerblue;
            }
            h2{
                background: rgb(133, 41, 79);
                width: 450px;
                border-radius: 15px;
                text-align: center;
                height: 60px;
                padding: 10px;
                padding-top: 25px;
                padding-bottom: 20px;
                margin-bottom: 60px;
                transform: translate(85%,20px);
                font-size: 45px;
                color:lavender;
                outline: solid black;
                outline-width: 10px;
                font-family:'Courier New', Courier, monospace;
            }
            .box{
                background-color:darkgray ;
                height: 1100px;
                border-radius: 10px;
                outline: 10px solid black;
            }
            input[type='button']{
                border-radius: 10px;
                width: 90px;
                height: 40px;
                margin-top: 20px;
                cursor: pointer;
            }
            .img1, .img2, .img3{
                width: 40%;
                transform: translate(5%,10%);
                border-radius: 10px;
                outline: 3px solid black;
                margin-left: 10px;
            }
            .img1{
                margin-top: 10px;
            }
            .box1, .box2, .box3{
                float: right;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                width: 280px;
                height: 120px;
                background-color: rgb(37, 126, 126);
                color: aliceblue;
                text-align: center;
                padding: 2%;
                transform: translate(-80%,55%);
                border-radius: 10px;
                font-size: 120%;
                letter-spacing: 2px;
                outline: 2px solid rgb(48, 45, 44);
            }
            .box1{
                padding-bottom: 50px;
                transform: translate(-270px,85px);
            }
            .box2{
                margin-top: 38px;
                height: 150px;
            }
            .box3{
                margin-top: 100px;
                height: 150px;
            }
            .img2{
                transform: translate(5%,30%);
            }
            .img3{
                transform: translate(5%,40%);
            }
            .btn{
                width: 100px;
                height: 40px;
                transform: translate(670%,280%);
                border-radius: 10px;
                background-color: black;
            }
            .btn:hover{
                background-color: white;
            }
            a{
                text-decoration: none;
                color: white;
                font-size: 120%;
            }
            a:hover{
                color: black;
            }
        </style>
        <title>Decorations</title>
        <h2>DECORATIONS</h2>
        <div class="box">
            <img src="images/img1.jpg" alt="img1" class="img1">
            <div class="box1"><strong>Hand-Tied Wedding Bouquets</strong><br><br><b>Rs.10,000/-</b><br><a href="img1.php"><input type="button" value="Details"></a></div>
            <img src="images/img2.jpg" alt="img2" class="img2">
            <div class="box2"><strong>Cascading Wedding Bouquets</strong><br><br><b>Rs.12,000/-</b><br><a href="img2.php"><input type="button" value="Details"></a></div>
            <img src="images/img3.jpg" alt="img2" class="img3">
            <div class="box3"><strong>Freeform Wedding Bouquets</strong><br><br><b>Rs.20,000/-</b><br><a href="img3.php"><input type="button" value="Details"></a></div>
            <button class="btn"><a href="adminpage.php">Back</a></button>
        </div>
    </body>
</html>