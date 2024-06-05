<?php
include("connect.php");
session_start();
$ID=$_GET['ID'];
$query="SELECT * FROM registration WHERE id='$ID'";
$res=mysqli_query($conn,$query);
$final=mysqli_fetch_assoc($res);
 ?>

<!DOCTYPE html>
<html>
    <style>
        h1{
    width: 100%;
    height: 60px;
    padding-top: 20px;
    COLOR: WHITE;
    transform: translate(0%);
    text-align: center;
    background-color: #0d0d0d;
    border-radius: 50px;
}

body{
    background: linear-gradient(to bottom right,white,rgb(202, 178, 192));
}

.box{
    background: linear-gradient(.25turn, #1a1a1a, 50%, #e6fff2);
    border-radius: 5px;
    height: 550px;
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
    transform: translate(90px,0);
    font-size: 20px;
    text-align: center;
    width: 900px;
    border-top: transparent;
    outline: none;
}

.sub input{
    text-decoration: none;
    padding: 20px;
    width: 150px;
    text-align: center;
    transform: translate(360%,-35%);
    border-radius: 8px;
    border-color: transparent;
    cursor: pointer;
    font-size: 15px;
    outline: 2px solid black;
}

.back{
    padding: 20px;
    font-size: 15px;
    width: 150px;
    text-align: center;
    transform: translate(370%,-35%);
    border-radius: 8px;
    border-color: transparent;
    cursor: pointer;
    text-decoration: none;
    outline: 2px solid black;
}

a{
    color: black;
    text-decoration: none;
}

a:hover{
    color: white;
}

.back:hover{
    background-color: black;
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
</style>
    <body>
        <title>UPDATION</title>
        <form action="#" method="post">
        <div class="box1">
        <h1>UPDATION FORM</h1>
        <div class="box">
            <label>1). Name :</label><input type="text" name="name"  value="<?php echo $final['name']; ?>" title="Enter your name" required="" placeholder="Enter your name"><br><br>
            <label>2). Username :</label><input type="" name="user" value="<?php echo $final['user']; ?>" title="Enter your username" required="" placeholder="Enter the username" readonly="true"><br><br>
            <label>3). Password :</label><input type="password" name="password" value="<?php echo $final['password']; ?>" title="Enter your password" required="" placeholder="Enter your password"><br><br>
            <label>4). Email :</label><input type="email" name="email" value="<?php echo $final['email']; ?>" title="Enter your email" required="" placeholder="Enter your email" readonly="true"><br><br>
            <label>5). Phone No :</label><input type="text" maxlength="10" minlength="10" name="phno" value="<?php echo $final['phno']; ?>" title="Enter your phoneno" required="" placeholder="Enter your phoneno"><br><br>
            <label>6). Please enter the date of event :</label><input type="date" name="date" required="" title="Please enter the date of event" value="<?php echo $final['date']; ?>">        
        </div>
        <div class="sub">
            <input type="submit" value="UPDATE" name="update">
            <button class="back"><a href="userdis.php">BACK</a></button>
        </div>
        </div>
        </form>
    </body>
</html>

<?php
error_reporting(0);
if($_POST['update'])
{
    $name=$_POST['name'];
    $user=$_POST['user'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $date=$_POST['date'];

    $sql="UPDATE registration 
    SET name='$name',user='$user',password='$password',email='$email',phno='$phno',date='$date'
    WHERE id='$ID'";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('RECORD UPDATED SUCCESSFULLY!!')</script>";
        ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost:1234/MiniProject/userdis.php " />
        <?php
    }

    else
    {
        echo"Updation unsuccessful!!";
    }
}

?>

<script>
    function clickFun(){
        <meta http-equiv = "refresh" content = "0; url = http://localhost:1234/MiniProject/front.php" />
    }
</script>