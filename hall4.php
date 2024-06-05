<?php
include("connect.php");
session_start();
$sql="SELECT * from registration WHERE user='{$_SESSION['user']}'";
$query=mysqli_query($conn,$sql);
$final=mysqli_fetch_assoc($query);
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

h1{
    color: black;
}

#img1{
    width: 50%;
    margin-right: 40px;
    border-radius: 10px;
    margin-left: 20px;
    height: 500px;
    outline: 3px solid black;
}

.place{
    background-color: blanchedalmond;
    border-radius: 10px;
    width: 20%;
    height: 30px;
}

.box2{
    color: white;
    outline: 3px solid black;
    background-color: rgb(168, 165, 165);
    width: 70%;
    height: 500px;
    border-radius: 8px;
    margin-left: 200px;
    text-align: center;
    padding-top: 20px;
    font-family:'Courier New', Courier, monospace;
}

label{
    font-size: 20px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    color: black;
}

input{
    border: transparent;
    background: transparent;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-bottom: 2px solid black;
    margin-bottom: 20px;
    width: 20%;
    margin-left: 80px;
    text-align: center;
    height: 30px;
}

.book{
    border-radius: 8px;
    background: #4c5563;
    color: white;
    border: transparent;
    height: 40px;
    width: 20%;
    cursor: pointer;
    transform: translate(-25%,350%);
    outline: 2px solid black;
}
.book:hover{
    background: #081324;
    outline: 2px solid white;
}
#date{
    transform: translate(-30%,0%);
}
#hall_id{
    transform: translate(-5%,0%);
}
</style>
    <body background="images/hall1.jpg">
        <form action="hall4.php" method="post">
            <div class="box">
            <div class="box2">
                <h1>DETAILS</h1>
                <hr color="black" width="90%">
                <ul class="box1">
                <label>1). Name :</label><input type="text" name="user"  value="<?php echo $_SESSION['user']; ?>" title="Enter your name" required="" placeholder="Enter your name"><br><br>
                <label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2). Order date :</label><input type="date" id="date" name="date" value="<?php echo $final['date']; ?>" ><br><br>
                <label>3). Place :</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <select name="place" class="place" required="" value="<?php echo $_SESSION['place']; ?>">
                <option value="null"></option>
                <option value="BANGALORE">Bangalore</option>
                <option value="Chennai">Chennai</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Delhi">Delhi</option>
            </select><br>
            <script>
                    document.getElementById("name").innerHTML = theProduct;
            </script><br>
                <input type="submit" value="BOOK" class="book" name="book">
            </div>
        </div>
        </form>
    </body>
</html>

<?php
error_reporting(0);
if($_POST['book'])
{
    $user=$_POST['user'];
    $h_id=$_POST['h_id'];
    $place=$_POST['place'];
    $sql="UPDATE bookings SET h_id=10004 WHERE user='{$_SESSION['user']}'";
    $sql1="UPDATE registration SET place='$place' WHERE user='{$_SESSION['user']}'";
    if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql1))
    {
        echo "<script>alert('BOOKING SUCCESSFULL!!')</script>";
        ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost:1234/MiniProject/halls.php" />
        <?php
    }

    else
    {
        echo "REGISTRATION UNSUCCESSFUL!";
    }
}
?>