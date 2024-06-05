<html>
    <head>
        <title>Display</title>
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
                background: #008080;
            }
            table
            {
                background-color: white;
                border-radius: 5px;
            }
            table th
            {
                border-radius: 10px;
                height: 60px;
                background: black;
                color: white;
                font-size: 20px;
            }
            table td
            {
                height: 50px;
                border-radius: 4px;
            }
            .btn{
                width: 100px;
                height: 40px;
                border-radius: 10px;
                background-color: black;
                margin-bottom: 20px;
                margin-left: 70px;
            }
            .btn:hover{
                background-color: white;
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
                outline: 4px solid black;
                font-size: 17px;
            }
            #top1{
                margin-top: 20%;
                width: 50%;
            }
            .det, .pri
            {
                border-radius: 8px;
                background: #4c5563;
                color: white;
                border: transparent;
                height: 40px;
                width: 48%;
                cursor: pointer;
            }
            .pri{
                float: right;
            }
            .det:hover
            {
                background: #081324;
            }
            .pri:hover
            {
                background: #081324;
            }
            .tab{
                width: 100%;
            }
        </style>
    </head>

<?php
include('connect.php');
error_reporting(0);
$sql="SELECT * FROM registration R,bookings B WHERE R.user=B.user ";
$res=mysqli_query($conn,$sql);
$row=mysqli_num_rows($res);

if($row!=0)
{
    ?>
    <h2 id="top">RECORDS</h2>
    <table border="1" cellspacing="10" width="90%" align="center" class="tab">
        <tr>
            <th width="5%">ID</th>
            <th width="10%">Name</th>
            <th width="10%">Username</th>
            <th width="10%">Email</th>
            <th width="10%">Phone number</th>
            <th width="10%">Date</th>
            <th width="3%">Decoration_ID</th>
            <th width="3%">CATERING_ID</th>
            <th width="3%">HALLS_ID</th>
            <th width="30%">Details</th>
            
        </tr>
    <?php
    while($final=mysqli_fetch_assoc($res))
    {
        echo "<tr>
                <td>". $final['id']."</td>
                <td>". $final['name']."</td>
                <td>". $final['user']."</td>
                <td>". $final['email']."</td>
                <td>". $final['phno']."</td>
                <td>". $final['date']."</td>
                <td>". $final['d_id']."</td>
                <td>". $final['c_id']."</td>
                <td>". $final['h_id']."</td>
                <td>
                <a href='details.php?DID=$final[d_id]&CID=$final[c_id]&USER=$final[user]'><input type='submit' value='DETAILS' class='det'></a>
                <a href='{print.php} download?DID=$final[d_id]&CID=$final[c_id]&USER=$final[user]'><input type='submit' value='PRINT' class='pri'></a>
                </td>
            </tr>";
    }
    ?>
    <button class="btn"><a href="adminpage.php">Back</a></button>
    <?php
}
else
{
    ?>
    <center>
        <h2 id="top1">NO DATA</h2>
    </center>
    <?php
}
?>
</table>
<a href="#top" class="up"><b>Go up</b></a>
