<?php
include("connect.php");
session_start();
 ?>

<!DOCTYPE html>
<html>
    <style>
        h1{
    width: 100%;
    height: 60px;
    padding-top: 20px;
    transform: translate(0%);
    text-align: center;
    background-color: #0d0d0d;
    outline: 2px solid black;
    border-radius: 50px;
    color: white;
}

body{
    background: transparent;
}

.box{
    outline: 2px solid black;
    background: linear-gradient(.25turn, #1a1a1a, 50%, #e6fff2);
    border-radius: 5px;
    height: 690px;
    width: 70%;
    transform: translate(7%,1%);
    padding: 8%;
    padding-top: -1px;
    font-size: 20px;
    border-color: black;
    border-width: 80px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.box label{
    font-size: 22px;
    width: 50%;
    margin-right: 40px;
    color: white;
}

.box input{
    margin-bottom: 30px;
    background-color: transparent;
    border-top: 20px;
    border-color: black;
    border-left: 20px;
    border-right: 20px;
    border-width: 2px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    transform: translate(22%,-70%);
    font-size: 22px;
    text-align: center;
    width: 780px;
    border-top: transparent;
    outline: none;
}

::placeholder{
    color: black;
}

.sub input{
    padding: 20px;
    width: 150px;
    text-align: center;
    transform: translate(270%,50%);
    border-radius: 8px;
    border-color: transparent;
    cursor: pointer;
    outline: 2px solid black;
    background-color: white;
    color: black;
}

.sub input:hover{
    color: beige;
    background-color: black;
}

@media (max-width: 420px)
{
    body
    {
        background-color: black;
    }
}
#date
{
    width: 250px;
    transform: translate(-10%,10%);
}
</style>
    <body>
        <title>REGISTRATION</title>
        <form action="register.php" method="post">
        <div class="box1">
        <h1>WELCOME TO REGISTRATION</h1>
        <div class="box">
            <label>1). U_ID :</label><input type="text" name="id" required="" placeholder="Your user id generated is" value="<?php $random = mt_rand(0000, 9999); echo "MHBS".$random; ?>"><br><br>
            <label>2). Name :</label><input type="text" name="name" title="Enter your name" required="" placeholder="Enter your name"><br><br>
            <label>3). Username :</label><input type="text" name="user" title="Enter your username" required="" placeholder="Enter the username"><br><br>
            <label>4). Password :</label><input type="password" name="password" title="Enter your password" required="" placeholder="Enter your password"><br><br>
            <label>5). Email :</label><input type="email" name="email" title="Enter your email" required="" placeholder="Enter your email"><br><br>
            <label>6). Phone No :</label><input type="text" name="phno" title="Enter your phoneno" required="" maxlength="10" minlength="10" placeholder="Enter your phoneno"><br><br>
            <label>7). Please enter the date of event :</label><input type="date" name="date" id="date" required="" title="Please enter the date of event">
        <div class="sub">
            <input type="submit" value="REGISTER" name="register">
        </div>
        </div>
        </form>
    </body>
</html>

<?php
error_reporting(0);
if($_POST['register'])
{
    $name=$_POST['name'];
    $user=$_POST['user'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $id=$_POST['id'];
    $date=$_POST['date'];

    $sql="INSERT INTO registration(id,name,user,password,email,phno,date) VALUES ('$id','$name','$user','$password','$email','$phno','$date')";
    $cond1="SELECT * FROM registration WHERE user='$user'";
    $cond2="SELECT * FROM registration WHERE email='$email'";
    $mov1=mysqli_query($conn,$cond1);
    $mov2=mysqli_query($conn,$cond2);
    if(mysqli_num_rows($mov1)>0)
    {
        echo "<script>alert('USERNAME ALREADY EXISTS!!')</script>";
    }

    else if(mysqli_num_rows($mov2)>0)
    {
        echo "<script>alert('EMAIL ALREADY EXISTS!!')</script>";
    }

    else if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('REGISTRATION SUCCESSFULL!!')</script>";
        ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost:1234/MiniProject/login.php " />
        <?php
        $sql2="INSERT INTO bookings (user) VALUES ('$user')";
        $result1 = mysqli_query($conn,$sql2);
    }

    else
    {
        echo "<script>alert('REGISTRATION UNSUCCESSFULL!!')</script>";
    }
}

?>