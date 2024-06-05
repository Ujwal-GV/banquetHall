<html>
    <head>
        <title>Details</title>
        <style>
            h2
            {
                background: #040a12;
                text-align: center;
                color: white;
                height: 50px;
                padding: 20px;
                border-radius: 50px;
                font-size: 40px;
            }
            body
            {
                background: #808080;
            }
            table
            {
                width: 100%;
                background-color: white;
                border-radius: 5px;
            }
            table th
            {
                border-radius: 10px;
                height: 80px;
                background: black;
                color: white;
                font-size: 20px;
            }
            table td
            {
                font-size: 20px;
                border-radius: 4px;
            }
            .udate,.del, .print
            {
                border-radius: 8px;
                background: #4c5563;
                color: white;
                border: transparent;
                height: 40px;
                width: 48%;
                cursor: pointer;
            }
            .del 
            {
                float: right;
            }
            .print{
                transform:translate(50%,0%);
                margin-top:20px;
                margin-bottom:20px;
            }
            .udate:hover
            {
                background: #081324;
            }
            .btn{
                position: fixed;
                float: right;
                width: 100px;
                height: 40px;
                border-radius: 10px;
                background-color: black;
                margin-bottom: 20px;
                margin-left: 70px;
                transform: translate(15%,700%);
            }
            .btn:hover{
                background-color: white;
            }
            .pbtn{
                position: fixed;
                float: right;
                width: 100px;
                height: 40px;
                cursor: pointer;
                border-radius: 10px;
                transform: translate(125%,700%);
                background-color: black;
                margin-bottom: 20px;
                margin-left: 70px;
                color: white;
            }
            .pbtn:hover{
                background-color: white;
                color: black;
            }
            a{
                text-decoration: none;
                color: white;
                font-size: 120%;
            }
            #top1{
                font-size: 25px;
                margin-top: 20%;
                width: 50%;
                height: 50px;
            }
            a:hover{
                color: black;
            }
            .up{
                position: fixed;
                bottom: 0;
                background: rgb(255, 255, 255);
                text-decoration: none;
                color: rgb(0, 0, 0);
                float: right;
                border-top-left-radius: 8px;
                border-bottom-left-radius: 8px;
                transform: translate(1785%,-50%);
                height: 15px;
                padding: 1%;
                font-size: 17px;
            }
        </style>
    </head>

<?php
include("connect.php");
error_reporting(0);
session_start();
$DID=$_GET['DID'];
$CID=$_GET['CID'];
$USER=$_GET['USER'];
$sql="SELECT DISTINCT * FROM registration R,decorations D,bookings B,catering C,halls H WHERE R.user='$USER' AND B.user='$USER' AND B.d_id=D.d_id AND C.c_id=B.c_id AND H.h_id=B.h_id AND C.c_id='$CID' AND D.d_id='$DID'";
$res=mysqli_query($conn,$sql);
$row=mysqli_num_rows($res);

if($row!=0)
{
    ?>
    <h2 id="top">DETAILS</h2>
    <table border="1" cellspacing="10" width="90%" align="center">
        <tr>
            <th width="10%">USERNAME</th>
            <th width="10%">DECORATION</th>
            <th width="10%">DECORATION PRICE</th>
            <th width="10%">CATERING</th>
            <th width="10%">No. OF PERSONS</th>
            <th width="10%">CATERING PRICE</th>
            <th width="10%">HALL</th>
            <th width="10%">PLACE</th>
            <th width="10%">HALL PRICE</th>
        </tr>
    <?php
    while($final=mysqli_fetch_assoc($res))
    {
        echo "<tr>
                <td>". $final['user']."</td>
                <td>". $final['d_name']."</td>
                <td>". $final['price']."</td>
                <td>". $final['cat_name']."</td>
                <td>". $final['orders']."</td>
                <td>". $final['total']."</td>
                <td>". $final['hall_name']."</td>
                <td>". $final['place']."</td>
                <td>". $final['h_price']."</td>
            </tr>";
    }
    ?>
    <button class="btn"><a href="bookings.php">BACK</a></button>
    <?php
}
else
{
    ?>
    <center>
        <h2 id="top1">CUSTOMER HAS NOT PLACED THE DETAILS COMPLETELY</h2>
    </center>
    <button class="btn"><a href="bookings.php">BACK</a></button>
    <?php
}
?>
<script>

</script>

