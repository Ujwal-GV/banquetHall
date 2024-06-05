<?php
include('connect.php');
session_start();
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
            padding-top: 20px;
        }
        .box{
            margin-left: 25%;
            width: 50%;
            height: 580px;
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
            transform: translate(80%,-160%);
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
        .lab, .lab1{
            margin-left: 0px;
            width: 50%;
            height: 20px;
            background-color: transparent;
            border-radius: 4px;
        }
        #boo{
            transform: translate(-18%,0%);
        }
        .btn{
            transform: translate(50%,-20%);
                width: 100px;
                height: 40px;
                border-radius: 10px;
                background-color: transparent;
                margin-bottom: 0px;
                margin-left: 70px;
                outline: 2px solid black;
                cursor: pointer;
            }
            .btn:hover{
                background-color: white;
            }
            #myText{
                font-size: 30px;
            }
            .total{
                font-size: 15px;
                margin-left: 60px;
                margin-top: 0px;
            }
            .total1{
                margin-left: 70px;
                margin-top: 20px;
            }
            ::placeholder{
                font-size: 11px;
                text-align: center;
            }
            input['number']{
                font-size: 20px;
            }
    </style>
<form action="sindian.php" method="POST">
    <body>
        <div class="box">
            <h2>FILL UP</h2>
            <hr width="80%" color="black"><br>
            <label>1). Name :</label><input type="text" name="user"  value="<?php echo $_SESSION['user']; ?>" title="Enter your name" required="" placeholder="Enter your name"><br><br>
            <label>2). Total orders :</label><input type="number" id="boo" name="orders"><br><br>
            <script>
                function doMath() {
                var numOne = document.getElementById('boo').value;
                var theProduct = parseInt(numOne) * 300;
                document.getElementById("myText").innerHTML = theProduct;
                }
            </script>
            <label>3). Per plate :</label><label class="lab"><b>300/-</b></label><br><br><br><hr width="80%" color="black"><br>
            <input type="button" class="btn" value="Calculate" onclick="doMath();" />
            <label> Total price :</label><b><span id="myText"></span></b>
            <pre><div class="total"><b>* TOTAL PAYABLE AMOUNT<b><input type="number" value="$theProduct" name="total" class="total1" placeholder="Enter the total amount calculated above: "><span id="name"></span></div>
                (confirm)</pre>
            <script>
                    document.getElementById("name").innerHTML = theProduct;
            </script><br>
            <div class="box1">
                <input type="submit" value="Submit" class="sub" name="submit">
                <input type="reset" value="Reset" class="res">
                <a href="catering.php"><input type="button" value="Back" class="res">
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
    $orders=$_POST['orders'];
    $total=$_POST['total'];
    $c_id=$_POST['c_id'];

    $sql="UPDATE bookings SET c_id=1003 WHERE user='{$_SESSION['user']}'";
    $sql1="UPDATE registration SET orders='$orders',total='$total' WHERE user='{$_SESSION['user']}'";
    if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql1))
    {
        echo "<script>alert('BOOKING SUCCESSFULL!!')</script>";
        ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost:1234/MiniProject/catering.php" />
        <?php
    }

    else
    {
        echo"REGISTRATION UNSUCCESSFUL!";
    }
}
?>