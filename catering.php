<?php
include("connect.php");
error_reporting(0);
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
                transform: translate(85%,20px);
                font-size: 45px;
                color:lavender;
                outline: solid black;
                outline-width: 10px;
                padding-bottom: 20px;
                margin-bottom: 60px;
                font-family:'Courier New', Courier, monospace;
                margin-bottom: 60px;
            }
            .box{
                background-color:darkgray ;
                height: 1400px;
                border-radius: 10px;
                outline: 10px solid black;
            }
            input[type='button']{
                border-radius: 10px;
                width: 90px;
                margin-right:50px;
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
                width: 650px;
                height: 280px;
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
                margin: 0px;
                padding-bottom: 50px;
                transform: translate(-20px,45px);
            }
            .box2{
                margin-top: 38px;
                height: 300px;
                transform: translate(-20px,65px);
            }
            .box3{
                margin-top: 100px;
                height: 350px;
                transform: translate(-20px,-300px);
            }
            .img2{
                height: 350px;
                transform: translate(5%,30%);
            }
            .img3{
                height: 400px;
                transform: translate(5%,50%);
            }
            .btn{
                width: 100px;
                height: 40px;
                float: right;
                transform: translate(655%,580%);
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
            li{
                text-align: left;
                font-size: 17px;
            }
        </style>
        <title>CATERING</title>
        <link rel="website icon" type="png" href="images/img11.png">
        <h2>CATERING</h2>
        <div class="box">
            <img src="images/indian.jpeg" alt="img1" class="img1">
            <div class="box1"><strong>INDIAN CUISINE</strong><br><hr>*****MAIN COURSE*****
                <ul>
                    <li>Lip-smacking Parathas</li>
                    <li>Briyani</li>
                    <li>Butter Chicken/Paneer Butter Masala</li>
                    <li>Mushroom Fried Rice</li>
                    <li>Shrimp Biryani</li><br>
                <b>*****DESSERTS****</b><br>
                    <li>Sweets and Banaras pan</li>
                    <a href="indian.php"><input type="button" value="ORDER"></a></div>
            <img src="images/nindian.jpg" alt="img2" class="img2">
            <div class="box2"><strong>NORTH INDIAN CUISINE</strong><br><hr>*****MAIN COURSE*****
            <ul>
                    <li>Chole Bhature</li>
                    <li> Malai ki Kheer</li>
                    <li> Chicken Dum Biryani</li>
                    <li>Rajasthani Laal Maas</li>
                    <li>Aloo Samosa</li><br>
                <b>*****DESSERTS****</b><br>
                    <li>Gulab Jamun and Kulfi</li>
            <a href="nindian.php"><input type="button" value="ORDER"></a></div>
            <img src="images/sindian.jpg" alt="img2" class="img3">
            <div class="box3"><strong>SOUTH INDIAN CUISINE</strong><br><hr>*****MAIN COURSE*****
            <ul>
                    <li>Bisi Bele Bhaat</li>
                    <li>Payasam</li>
                    <li>Hyderabadi Biryani</li>
                    <li>Rajasthani Laal Maas</li>
                    <li>Prawn Curry</li>
                    <li>Dosa/Idli vada</li>
                    <li>Curd Rice</li><br>
                <b>*****DESSERTS****</b><br>
                    <li>Banni sir, neev kelidd kodtivi</li>
            <a href="sindian.php"><input type="button" value="ORDER"></a></div>
            <button class="btn"><a href="front.php">Back</a></button>
        </div>
    </body>
</html>