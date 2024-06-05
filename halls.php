<?php
include("connect.php");
session_start();
$final1='101';
$final2=102;
$final3=103;
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
                height: 1800px;
                border-radius: 10px;
                outline: 10px solid black;
            }
            .button{
                border-radius: 10px;
                width: 90px;
                margin-right:50px;
                transform: translate(300%,-20px);
                height: 40px;
                cursor: pointer;
            }
            .img1, .img2, .img3, .img4{
                width: 40%;
                transform: translate(5%,10%);
                border-radius: 10px;
                outline: 3px solid black;
                margin-left: 10px;
            }
            .img1{
                height: 360px;;
                margin-top: 10px;
            }
            .box1, .box2, .box3, .box4{
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
                height: 300px;
                transform: translate(-20px,-280px);
            }
            .box4{
                margin-top: 100px;
                height: 300px;
                transform: translate(-20px,-310px);
            }
            .img2{
                height: 350px;
                transform: translate(5%,30%);
            }
            .img3{
                height: 350px;
                transform: translate(5%,50%);
            }
            .img4{
                height: 350px;
                transform: translate(5%,70%);
            }
            .btn{
                width: 100px;
                height: 40px;
                float: right;
                transform: translate(655%,480%);
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
                margin-bottom: 10px;
                font-size: 17px;
            }
            .veg, .car, .people, .hall, .drink{
                transform: translate(20%,20%);
                width: 16px;
                height:16px;
            }
        </style>
        <title>Halls</title>
        <h2>HALLS</h2>
        <div class="box">
            <img src="images/hall1.jpg" alt="img1" class="img1">
            <div class="box1"><strong>ANJANADRI CONVENTION HALL</strong><br><br><hr>
                <ul>
                    <li><img src="images/people.png" alt="img2" class="veg">&nbsp&nbspCapacity: 1200</li>
                    <li><img src="images/car.png" alt="img2" class="veg">&nbsp&nbspParking capacity: 500</li>
                    <li><img src="images/hall.png" alt="img2" class="veg">&nbsp&nbspHall: 1</li>
                    <li><img src="images/drink.png" alt="img2" class="veg">&nbsp&nbspNo drink</li>
                    <li><img src="images/star.png" alt="img2" class="veg">&nbsp&nbsp4.5</li>
                    <li><img src="images/veg.jpg" alt="img2" class="veg">&nbsp&nbspOnly veg</li>
                    <li><img src="images/rupee.png" alt="img2" class="veg">&nbsp&nbsp<b>Rs. 25000</b></li>
                    <a href="hall1.php"><input type='submit' value='ORDER' class='button'></a></div>
            <img src="images/hall2.jpg" alt="img2" class="img2">
            <div class="box2"><strong>SHRI RAM PARTY HALL</strong><br><br><hr>
            <ul>
                <li><img src="images/people.png" alt="img2" class="veg">&nbsp&nbspCapacity: 1500</li>
                <li><img src="images/car.png" alt="img2" class="veg">&nbsp&nbspParking capacity: 700</li>
                <li><img src="images/hall.png" alt="img2" class="veg">&nbsp&nbspHall: 1</li>
                <li><img src="images/drink.png" alt="img2" class="veg">&nbsp&nbspNo drink</li>
                <li><img src="images/star.png" alt="img2" class="veg">&nbsp&nbsp3.0</li>
                <li><img src="images/veg.jpg" alt="img2" class="veg">&nbsp&nbspVeg and Non-veg</li>
                <li><img src="images/rupee.png" alt="img2" class="veg">&nbsp&nbsp<b>Rs. 28000</b></li>
            <a href="hall2.php"><input type="submit" value="ORDER" class="button"></a></div>
            <img src="images/hall3.jpg" alt="img2" class="img3">
            <div class="box3"><strong>BRUNDAVAN OPEN GARDEN</strong><br><br><hr>
            <ul>
                <li><img src="images/people.png" alt="img2" class="veg">&nbsp&nbspCapacity: 1800</li>
                <li><img src="images/car.png" alt="img2" class="veg">&nbsp&nbspParking capacity: 1200</li>
                <li><img src="images/drink.png" alt="img2" class="veg">&nbsp&nbspNo drink</li>
                <li><img src="images/star.png" alt="img2" class="veg">&nbsp&nbsp4.8</li>
                <li><img src="images/veg.jpg" alt="img2" class="veg">&nbsp&nbspVeg and Non-veg</li>
                <li><b>Open space and Lake view</b></li>
                <li><img src="images/rupee.png" alt="img2" class="veg">&nbsp&nbsp<b>Rs. 35000</b></bRs.></li>
            <a href="hall3.php"><input type="submit" value="ORDER" class="button"></a></div>
            <img src="images/hall4.png" alt="img2" class="img4">
            <div class="box4"><strong>NANDA GOKULA CONVENTION HALL</strong><br><hr>
                <ul>
                    <li><img src="images/people.png" alt="img2" class="veg">&nbsp&nbspCapacity: 100-120</li>
                <li><img src="images/car.png" alt="img2" class="veg">&nbsp&nbspParking capacity: 70</li>
                <li><img src="images/drink.png" alt="img2" class="veg">&nbsp&nbspNo drink</li>
                <li><img src="images/hall.png" alt="img2" class="veg">&nbsp&nbspHall: 1</li>
                <li><img src="images/star.png" alt="img2" class="veg">&nbsp&nbsp4.9</li>
                <li><img src="images/veg.jpg" alt="img2" class="veg">&nbsp&nbspVeg and Non-veg</li>
                <li><b>Simple and modern</b></li>    
                <li><img src="images/rupee.png" alt="img2" class="veg">&nbsp&nbsp<b>Rs. 10000</b></li>
                <a href="hall4.php"><input type="submit" value="ORDER" class="button"></a></div>
            <button class="btn"><a href="front.php">Back</a></button>
        </div>
    </body>
</html>