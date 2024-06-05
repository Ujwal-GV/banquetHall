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

#img3{
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
.img33{
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
    transform: translate(90%,230%);
    outline: 2px solid black;
}
.book:hover{
    background: #081324;
    outline: 2px solid white;
}
</style>
    <body>
        <form action="img3.php" method="post">
            <div class="box">
                <img src="images/img3.jpg" id="img3">
            <div class="box2">
                DETAILS
                <hr color="black" width="80%">
                <ul class="box1">
                * Perfect for fans of modern, contemporary floral design, a freeform bouquet is an oversized arrangement with an asymmetrical shape.<br><br>  
                * These types of wedding bouquet styles frequently use unexpected elements, like dried grasses and branches, to complement the fresh flowers.<br><br>  
                * This freeform bouquet is both edgy and boho, with traditional wedding flowers like <b>phalaenopsis orchids</b>, <b>roses</b>, and <b>amaranthus paired alongside pampas grass</b>, <b>bleached ruscus</b> and <b>dried palm leaves</b>.
                <a href='freeform.php'><input type="button" value="BOOK" class="book"></a>
                <img src="images/img33.jpg" alt="img" class="img33">
            </div>
        </div>
        </form>
    </body>
</html>