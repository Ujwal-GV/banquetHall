<?php
include("connect.php");
session_start();
$ID=$_GET['ID'];
$sql="DELETE FROM registration WHERE id='$ID'";
$res=mysqli_query($conn,$sql);

if($res)
{
    echo "<script>alert('RECORD DELETED SUCCESSFULLY!!')</script>";
        ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost:1234/MiniProject/display.php " />
        <?php
}
else
{
        echo "FAILED TO DELETE";
}
?>