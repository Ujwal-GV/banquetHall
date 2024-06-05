<?php
$conn=new mysqli("localhost","root","","miniproject");

if($conn)
{
   //echo "ok"; 
}
else
{
    echo "Connection failed!!".mysqli_connect_error();
}

?> 