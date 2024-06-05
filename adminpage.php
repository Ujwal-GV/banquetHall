<?php
session_start();
error_reporting(0);
include('connect.php');
?>
<!DOCTYPE html>
<html>
    <body>
        <title>
            Admin page
        </title>
        <style>
            body{
    background-color: darkslategray;
    padding: 0;
}

h1{
    text-align: center;
    background-color: black;
    font-size: 300%;
    border-radius: 50px;
    color: aliceblue;
    padding: 10px;
    padding-bottom: 50px;
    padding-top: 50px;
}

h2{
  transform: translate(190%,-5%);
  text-align: center;
  background-color: black;
  width: 280px;
  height: 50px;
  color: white;
  border-radius: 10px;
  padding-top: 20px;
}

li{
  display: inline;
}

#tleft{
    transform: translate(0%,-5%);
    background-color: antiquewhite;
    padding-top: 50px;
    padding-bottom: 20px;
    width: 97%;
    height: 70px;
    border-radius: 10px;
    border-top-right-radius: 0px;
    border-top-left-radius: 0px;
  }

#tleft a{
    text-decoration: none;
    font-size: 20px;
    padding: 20px;
    height: 50px;
    margin-left: 50px;
    margin-right: 50px;
    color: rgb(18, 22, 26);
  }
  
#tleft a:hover{
    padding-top: 20px;
    padding-bottom: 20px;
    width: 50%;
    height: 70px;
    border-radius: 10px;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;
    background-color: rgb(39, 59, 63);
    color: ghostwhite;
  }

input{
    text-align: center;
}

.box{
  display: flex;
}


.lbox{
  flex: 50%;
  background-color: rgb(39, 38, 36);
}

.container {
  display: inline-block;
  cursor: pointer;
  transform: translate(0%,40%);
}

.hide a:hover{
  background-color: rgb(0, 0, 0);
  height: 200px;
  width: 300%;
}

.l1{
  height: 60px;
  font-size: 150%;
  background-color: beige;
  text-align: center;
  padding-top: 30px;
  letter-spacing: 10px;
}

.rbox{
    flex: 80px;
    transform: translate(65%,0);
    height: 500px;
    background-color: rgb(39, 38, 36);
    border-radius: 5px;
    border-top-right-radius: 0%;
    border-top-left-radius: 15%;
    border-bottom-right-radius: 0%;
    border-bottom-left-radius: 12%;
}

.menu{
    background-color: rgb(184, 160, 165);
    border-radius: 50px;
    text-align: center;
    padding: 6%;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
    border-top-right-radius: 0px;
    color: black;
    font-size: 180%;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    letter-spacing: 8px;
}

.up{
  position: fixed;
  bottom: 0;
  background: rgb(255, 255, 255);
  text-decoration: none;
  color: rgb(0, 0, 0);
  float: right;
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
  transform: translate(1785%,-50%);
  height: 15px;
  padding: 1%;
  font-size: 17px;
  outline: 4px solid black;
}

#marq{
  background-color: black;
  color: white;
  padding: 10px;
  border-radius: 5px;
}

        </style>
        <head>
            <link rel="stylesheet" href="first.css">
        </head>
            <h1 id="top">
            SEETA RAM MARRIAGE BOOKING CENTER  
            </h1>
            <h2 id="top2">
              ADMIN LOGIN
            </h2>
            <div id="marq">
            <marquee direction="right">
            <?php
                echo "HELLO, ".$_SESSION['user'];
            ?>
            </marquee></div>
            <ul id="tleft">
                <li><a href="admin.php">LOGOUT</a></li>
                <li><a href="a_decorations.php">DECORATIONS</a></li>
                <li><a href="a_catering.php">CATERING</a></li>
                <li><a href="bookings.php">BOOKINGS</a></li>
                <li><a href="display.php">UPDATE</a></li>
            </ul>
        <a href="#top" class="up"><b>Go up</b></a>
    </body>
</html>