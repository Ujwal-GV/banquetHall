<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="img1.css">
    </head>
    <style>
        .box{
    display: flex;
    padding: 30px;
}

#img2{
    width: 50%;
    margin-right: 40px;
    border-radius: 10px;
    margin-left: 20px;
    height: 520px;
    outline: 3px solid black;
}

.box1{
    color: black;
    font-size: 50%;
    text-align: left;
    color: rgb(28, 37, 37);
    font-family: Georgia;
    padding: 5%;
    padding-top: 0;
    font-size: 40%;
}

.box2{
    color: white;
    outline: 3px solid black;
    font-size: 250%;
    background-color: rgb(168, 165, 165);
    width: 90%;
    height: 500px;
    border-radius: 8px;
    text-align: center;
    padding-top: 20px;
    font-family:'Courier New', Courier, monospace;
}
.img22{
width: 30%;
height: 190px;
float:right;
border-radius: 15px;
margin-top: 2px;
}
.book{
    border-radius: 8px;
    background: #4c5563;
    color: white;
    border: transparent;
    height: 40px;
    width: 20%;
    cursor: pointer;
    transform: translate(-130%,230%);
    outline: 2px solid black;
}
.book:hover{
    background: #081324;
    outline: 2px solid white;
}
</style>
    <body>
        <form action="img2.php" method="post">
            <div class="box">
                <img src="images/img2.jpg" id="img2">
            <div class="box2">
                DETAILS
                <hr color="black" width="80%">
                <ul class="box1">
                * A cascading bouquet looks like a waterfall of flowers and is meant to hang down in front of the bride’s hand to form an upside-down teardrop shape.<br><br> 
                * Any flower can be used in this style of bouquet, but bold blooms like garden roses and lilies can enhance its fun and modern feel.<br><br> 
                * Other flowers popular for a cascade bouquet are <b>peonies</b>, <b>hollyhock</b>, <b>poppies</b> and <b>foxgloves</b>. <br><br>
                * The arrangement is then finished with trailing ivy and fresh foliage, creating a beautiful tapering effect.
                <a href='cascade.php'><input type="button" value="BOOK" class="book"></a>
                <img src="images/img22.jpg" alt="img" class="img22">
            </div>
        </div>
        </form>
    </body>
</html>