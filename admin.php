<html>
    <body>
        <title>
            Login 
        </title>
        <style>
            .html{
    height: 100%;
}

.body{
    margin: 0;
    padding: 0;
    background: #f2eee3;
}

.login{
     position: absolute;
     top: 50%;
     left: 50%;
     width: 550px;
     padding: 40px;
     transform: translate(-50%,-50%);
     background: linear-gradient(.50turn, #1a1a1a, 92%, #e6fff2,#1a1a1a);
     border-radius: 20px;
     border-color: darkslategray;
     height: 450px;
 }

 .login h1{
     color: blanchedalmond;
     letter-spacing: 15px;
     text-align: center;
     font-size: 50px;
     height: 80;
 }

.login .user{
    position: relative;
}

.login .user input{
     font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
     width: 50%;
     padding: 10px 0;
     font-size: 16px;
     margin-bottom: 30px;
     color: white;
     background: transparent;
     border: none;
     border-bottom: 1px solid #fff;
     outline: none;
    }

.login .user label{
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: blanchedalmond;
    transition: .5s;
}
    
.login .user input:focus ~ label,
.login .user input:valid ~ label{
    top: -25px;
    left: 0;
    color: khaki;
    font-size: 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.login .new{
    position: sticky;
    display: inline-block;
    padding: 10px 20px;
    color: black;
    cursor: pointer; 
    font-size: 20px;
    text-decoration: none;
    text-transform: uppercase;
    transition: .5s;
    letter-spacing: 8px;
    border-radius: 20px;
    padding-bottom: 10px;
    border: transparent;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}

.login .new input:hover{
    background: #f2f6f7;
    color: black;
    border-radius: 20px;
    box-shadow: 0 0 5px #f2f6f7,
    0 0 25px #f2f6f7,
    0 0 50px #f2f6f7,
    0 0 100px #f2f6f7;
}

.login .new3,.new2{
    color: black;
    width: 180px;
    word-spacing: 8px;
    height: 55px;
    font-size: 11px;
    text-decoration: none;
    transform: translate(2%,60%);
    float: right;
    cursor: pointer;
    padding: 20px;
    font-size: 15px;
    transition: .5s;
    border: transparent;
    border-radius: 20px;
    font-family: monospace;
}


.login .new3
{
    transform: translate(110%,80%);
}

.login .new2
{
    transform: translate(10%,-50%);
}

.login .new1 input:hover{
    background: #f2f6f7;
    color: black;
    border-radius: 20px;
    box-shadow: 0 0 5px #f2f6f7,
    0 0 25px #f2f6f7,
    0 0 50px #f2f6f7,
    0 0 100px #f2f6f7;
}
.login .new2{
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    font-size: 19px;
    letter-spacing: 4px;
    width: 100px;
    height: 60px;
    transform: translate(280%,90%);
}
        </style>
        <head>
            <link rel="stylesheet" href="login.css">
        </head>
        <div class="login">
            <h1>ADMIN<br>LOGIN</h1><br><br>
            <form action="#" method="POST" autocomplete="on">
                <div class="user">
                <input type="text" name="user" required="">
                <label>Username</label>
                </div>
                <div class="user">
                <input type="password" name="password" required="">
                <label>Password</label>
                </div>
                <div class="new">
                    <input type="submit" name="submit" value="LOGIN" class="new">
                    <a href="login.php"><input type="button" name="back" class="new2" value="Back"></a>
                </div>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </form>
        </div>
    </body>
</html>

<?php
session_start();
include('connect.php');
error_reporting(0);
if (isset($_POST['submit']))
{
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['password'] = $_POST['password'];

    $sql = "SELECT * FROM admin_ WHERE user = '{$_SESSION['user']}' AND password = '{$_SESSION['password']}'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if($row['user']==$_SESSION['user'] && $row['password']==$_SESSION['password'])
    {
        echo "<script>alert('Login successful!!')</script>";
        ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost:1234/MiniProject/adminpage.php " />
        <?php
    }
    else
    {
        echo "<script>alert('You have not registered!!')</script>";
    }
}
?>