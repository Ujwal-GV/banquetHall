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

#img1{
    width: 50%;
    margin-right: 40px;
    border-radius: 10px;
    margin-left: 20px;
    height: 500px;
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
    height: 480px;
    border-radius: 8px;
    text-align: center;
    padding-top: 20px;
    font-family:'Courier New', Courier, monospace;
}
.img11{
width: 35%;
height: 180px;
float:right;
border-radius: 15px;
margin-top: 10px;
}
.book{
    border-radius: 8px;
    background: #4c5563;
    color: white;
    border: transparent;
    height: 40px;
    width: 20%;
    cursor: pointer;
    transform: translate(-40%,230%);
    outline: 2px solid black;
}
.book:hover{
    background: #081324;
    outline: 2px solid white;
}
</style>
    <body>
        <form action="img1.php" method="post">
            <div class="box">
                <img src="images/img1.jpg" id="img1">
            <div class="box2">
                DETAILS
                <hr color="black" width="80%">
                <ul class="box1">
                * This bouquet is simply a cluster of flowers, tied together with a ribbon.<br><br>  
                * This is a popular choice for brides wanting a natural looking wedding.<br><br>  
                * This style typically starts with one focal flower, before more blooms are added in a spiral fashion. Some brides choose just three or four of the same long-stemmed flowers, like delphiniums and peonies, the stems of which are then wrapped with floral tape to secure them and finished with fabric or ribbon. These loose stems provide a casual feel, and brides often pick a hand-tied bouquet for its fresh-picked feel, perfect for a rustic or bohemian wedding.  
                <a href='handtied.php'><input type="button" value="BOOK" class="book"></a>
                <img src="images/img11.png" alt="img" class="img11">   
            </div>
        </div>
        </form>
    </body>
</html>