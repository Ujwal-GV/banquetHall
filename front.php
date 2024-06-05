<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
      <title>
        Home page
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

li{
  display: inline;
}

#tleft{
    transform: translate(0%,-35%);
    background-color: antiquewhite;
    padding-top: 20px;
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

.tright input{
    width: 100%;
    height: 50px;
    border-radius: 10px;
    font-size: 16px;
  }
  
.tright{
    float: right;
    transform: translate(-15%,-250%);
  }

::placeholder{
    text-align: center;
}

input{
    text-align: center;
}

.box{
  display: flex;
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

.bar1, .bar2, .bar3 {
  width: 35px;
  height: 5px;
  background-color: rgb(0, 0, 0);
  margin: 6px 0;
  transition: 0.4s;
  margin-right: 50px;
}

.change .bar1 {
  transform: translate(0, 11px) rotate(-45deg);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
  transform: translate(0, -11px) rotate(45deg);
}


.l1{
  height: 60px;
  font-size: 150%;
  background-color: beige;
  text-align: center;
  padding-top: 30px;
  letter-spacing: 10px;
}

.lbox{
  flex: 70%;
  background-color: rgb(39, 38, 36);
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
  outline: 5px solid black;
  background: rgb(255, 255, 255);
  text-decoration: none;
  color: rgb(0, 0, 0);
  float: right;
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
  transform: translate(1810%,-50%);
  height: 15px;
  padding: 1%;
  font-size: 17px;
}
.det{
  background-color: black;
  padding-top: 5px;
  color: white;
  width: 100%;
  border-radius: 12px;
  text-align: center;
  height: 50px;
}
.txt{
  font-size: 30px;
  color: white;
  padding: 20px;
  text-align: center;
}
pre{
  font-size: 20px;
  text-align: left;
  background-color: white;
  color: black;
  height: 80px;
}

.about{
  height:50px;
  background-color: black;
  color: white;
}

.about{
    transform: translate(0%,0%);
    background-color: antiquewhite;
    padding-top: 50px;
    padding-bottom: 50px;
    width: 100%;
    height: 60px;
    color: black;
    font-size: 20px;
    border-radius: 10px;
    border-top-right-radius: 0px;
    border-top-left-radius: 0px;
  }

.about li{
  margin-left: 50px;
}

</style>
  <head>
    <link rel="stylesheet" href="first.css">
  </head>
  <h1 id="top">
  SEETA RAM MARRIAGE BOOKING CENTER
  </h1>
  <div class="det">
    <?php
      echo "HELLO, ".$_SESSION['user'];
    ?>
  </div>
  <ul id="tleft">
    <li><div class="container">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </li>
    <li><a href="logout.php">LOGOUT</a></li>
    <li><a href="decorations.php">DECORATIONS</a></li>
    <li><a href="catering.php">CATERING</a></li>
    <li><a href="Halls.php">HALLS</a></li>
    <li><a href="user_det.php">BOOKING DETAILS</a></li>
    <li><a href="#" onclick="location.replace('userdis.php')">UPDATE</a></li>
  </ul>  
  <div class="box">
    <div class="lbox">
      <div class="l1">
        <b>DESCRIPTION</b>
      </div>
    <div class="txt">
      Is your wedding right around the corner?<br>#MakeItBeautiful with us.<br><hr>
<pre>
                    500+                                                                            35+
            Happy Weddings Planned                                                              Consultants
</pre><hr>
      <img src="images/desc.png" alt=photo>
    </div>
  </div>
</div>
</div>
<div class="about">
  <li><b>Contact us to get best deals<b><br></li>
  <li><i>ujwalgowda2002v@gmail.com<br></li>
  <li><i>surya783@gmail.com<br></li>
  <li>4268623847</i></li>
</div>
<a href="#top" class="up"><b>Go up</b></a>
  </body>
</html>