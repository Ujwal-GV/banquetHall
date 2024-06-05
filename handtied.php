<?php
include('connect.php');
session_start();
$query="SELECT date FROM registration WHERE user='{$_SESSION['user']}'";
$res=mysqli_query($conn,$query);
$final=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html>
    <title>Floral booking details</title>
    <style>
        body{
            background-color: rgb(58, 55, 55);
        }
        h2{
            text-align: center;
            padding: 20px;
            padding-top: 40px;
        }
        .box{
            margin-left: 25%;
            width: 50%;
            height: 500px;
            background-color: rgb(236, 230, 223);
            border-radius: 10px;
            text-align: left;
        }
        label{
            margin: 80px;
            width: 50%;
            font-size: 18px;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        input{
            border: transparent;
            background: transparent;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            border-bottom: 2px solid black;
            margin-bottom: 20px;
            text-align: center;
            width: 40%;
            height: 30px;
        }
        .sub, .res{
            border-radius: 8px;
            background: #4c5563;
            color: white;
            border: transparent;
            height: 40px;
            margin-left: 20px;
            width: 20%;
            cursor: pointer;
            outline: 2px solid black;
            margin-top: 80px;
            transform: translate(130%,-80%);
        }
        .sub:hover{
            background: #081324;
            outline: 2px solid white;
        }
        .res:hover{
            background: #081324;
            outline: 2px solid white;
        }
        input::placeholder{
            text-align: center;
        }
        .place, .price{
            background-color: blanchedalmond;
            border-radius: 10px;
            width: 40%;
            height: 30px;
        }
        .lab{
            margin-left: 2px;
            width: 50%;
            height: 20px;
            background-color: transparent;
            border-radius: 4px;
        }
        #date{
            transform: translate(-19%,0%);
        }
    </style>
<form action="handtied.php" method="POST">
    <body>
        <div class="box">
            <h2>FILL UP</h2>
            <hr width="80%" color="black">
            <label>1). Name :</label><input type="text" name="user"  value="<?php echo $_SESSION['user']; ?>" title="Enter your name" required="" placeholder="Enter your name"><br><br>
            <label>2). Booking date:</label><input type="date" name="date" required="" id="date" value="<?php echo $final['date']; ?>"><br><br>
            <label>3). Price :</label><label class="lab">10,000/-</label><br><br>
            <div class="box1">
                <input type="submit" value="Submit" class="sub" name="submit">
            <input type="reset" value="Reset" class="res">
            </div>
        </div>
    </form>
    </body>
</html>
<?php
error_reporting(0);
if($_POST['submit'])
{
    $user=$_POST['user'];
    $d_id=$_POST['d_id'];
    $sql="UPDATE bookings SET d_id=101 WHERE user='{$_SESSION['user']}'";
    $sql1="UPDATE registration SET price=10000 WHERE user='{$_SESSION['user']}'";
    if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql1))
    { 
        echo "<script>alert('BOOKING SUCCESSFULL!!')</script>";
        ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost:1234/MiniProject/decorations.php" />
        <?php
    }

    else
    {
        echo"REGISTRATION UNSUCCESSFUL!";
    }
}
?>