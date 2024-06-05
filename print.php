<html>
    <head>
        <title>Details</title>
        <style>
            h2
            {
                background-color: #040a12;
                text-align: center;
                height: 50px;
                padding: 30px;
                font-size: 40px;
                color: white;
            }
            #top1{
                font-size: 25px;
                margin-top: 20%;
                width: 50%;
                height: 50px;
            }
            body{
                padding: 10px;
                padding-left: 40px;
                padding-right: 40px;
                border-style: groove;
                border-width: 10px;
                border-color: #745F5B;
                border-radius: 10px;
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
$final=mysqli_fetch_assoc($res);

if($row!=0)
{
    ?>
    <h2 id="top">SEETA RAM MARRIAGE BOOKING CENTER</h2><hr width="80%" color="#000000"><br><br>
    <?php
    echo '<div style="font-size:20px;margin-right:10px;color:#0e3c68;font-weight:bold;float:right;border:dashed;padding: 10px;">CUSTOMER ID: &nbsp<span style="font-size:20px;color:BLACK;font-weight:bold;float:right;">'.$final['id'].'</span></div><br>';
     echo '<div style="font-size:20px;margin-right:10px;color:#0e3c68;font-weight:bold;">CUSTOMER NAME: <span style="font-size:20px;color:BLACK;font-weight:bold;margin-left: 47px">'.$final['name'].'</span></div><br>';
     echo '<div style="font-size:20px;margin-right:10px;color:#0e3c68;font-weight:bold;">PH NO: <span style="font-size:20px;color:BLACK;font-weight:bold;margin-left:165px">'.$final['phno'].'</span></div><br>';
     echo '<div style="font-size:20px;margin-right:10px;color:#0e3c68;font-weight:bold;">DATE_OF_EVENT: <span style="font-size:20px;color:BLACK;margin-left:60px;font-weight:bold;">'.$final['date'].'</span></div><br>';
     echo '<div style="font-size:20px;margin-right:10px;color:#0e3c68;font-weight:bold;">E-MAIL: <span style="font-size:20px;color:BLACK;margin-left:155px;font-weight:bold;">'.$final['email'].'</span></div><br>';
     echo '<div style="font-size:20px;margin-right:10px;color:#0e3c68;font-weight:bold;">HALL BOOKED: <span style="font-size:20px;color:BLACK;margin-left:80px;font-weight:bold;">'.$final['hall_name'].'</span></div><br>';
     echo '<div style="font-size:20px;margin-right:10px;color:#0e3c68;font-weight:bold;">DECORATION_TYPE: <span style="font-size:20px;color:BLACK;margin-left:30px;font-weight:bold;">'.$final['d_name'].'</span></div><br>';
     echo '<div style="font-size:20px;margin-right:10px;color:#0e3c68;font-weight:bold;">CATERING_TYPE: <span style="font-size:20px;color:BLACK;margin-left:60px;font-weight:bold;">'.$final['cat_name'].'</span></div><br>';
     echo '<div style="font-size:20px;margin-right:10px;color:#0e3c68;font-weight:bold;">NO_OF_PERSONS: <span style="font-size:20px;color:BLACK;margin-left:60px;font-weight:bold;">'.$final['orders'].'</span></div><br>';
     echo '<div style="font-size:20px;margin-right:10px;color:#0e3c68;font-weight:bold;">HALL_PRICE: <span style="font-size:20px;color:BLACK;margin-left:100px;font-weight:bold;">'.$final['h_price'].'</span></div><br>';
     echo '<div style="font-size:20px;margin-right:10px;color:#0e3c68;font-weight:bold;">DECORATION_PRICE: <span style="font-size:20px;color:BLACK;margin-left:20px;font-weight:bold;">'.$final['price'].'</span></div><br>';
     echo '<div style="font-size:20px;margin-right:10px;color:#0e3c68;font-weight:bold;">CATERING_PRICE: <span style="font-size:20px;color:BLACK;margin-left:50px;font-weight:bold;">'.$final['total'].'</span></div><br>';
     echo '<div style="font-size:20px;margin-right:10px;color:#0e3c68;font-weight:bold;">VENUE: <span style="font-size:20px;color:BLACK;margin-left:160px;font-weight:bold;">'.$final['place'].'</span></div><br>';
     echo '<hr color="#000000"><pre style="font-size: 20px;color: black;">Booking and payment to be made to:
     <div style="font-size: 18px;"><b>SEETA RAM CITY COUNCIL</b>
PO Box 73, Seeta Ram assoc. Bangalore-560073
2nd main, 4th cross
Indranagar, Bangalore-560073
Phno: 7483-26X-XYZ
Email: <i>ujwalgowda@gmail.com</i>
<b>(CASH/ CHEQUE/ CREDIT CARD/ DEBIT CARD)</b></div>
     </pre>';
    echo '<pre><div style="border:solid;padding:10px;padding-bottom:20px;"><center style="font-size:15px;"><b>PRIVACY & PERSONAL INFORMATION PROTECTION NOTICE.</b></center><br>
By completion of this form you may be providing Council with personal information.Council will collect the information only for a lawful purpose directly related to
the foundaton of Council.
We will take resonable carenot to disclose personal information. Excempt documents may come under Section 12 of the local Government Act.</div></pre>';
    echo '<hr color="#000000"><hr color="#000000"><div style="font-size:20px;margin-right:10px;padding:20px;color:#0e3c68;font-weight:bold;">TOTAL PAYABLE AMOUNT: <span style="font-size:35px;color:BLACK;font-weight:bold;margin-left:60px">'.'₹ '.$final['price']+$final['total']+$final['h_price'].'</span></div>';
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

