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
                background: #808080;
            }
            table
            {
                background-color: white;
                border-radius: 5px;
            }
            table th
            {
                border-radius: 10px;
                height: 50px;
                background: black;
                color: white;
                font-size: 20px;
            }
            table td
            {
                border-radius: 4px;
            }
            .udate,.del
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
            .udate:hover
            {
                background: #081324;
            }
            .del:hover
            {
                background: #081324;
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
            #top1{
                margin-top: 20%;
                width: 50%;
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
                outline: 4px solid black;
            }
        </style>
    </head>

<?php
include('connect.php');
error_reporting(0);
$sql="SELECT * FROM registration";
$res=mysqli_query($conn,$sql);
$row=mysqli_num_rows($res);

if($row!=0)
{
    ?>
    <h2 id="top">RECORDS</h2>
    <table border="1" cellspacing="10" width="90%" align="center">
        <tr>
            <th width="5%">ID</th>
            <th width="10%">Name</th>
            <th width="10%">Username</th>
            <th width="20%">Email</th>
            <th width="10%">Phone number</th>
            <th width="10%">Date of event</th>
            <th width="20%">Operations</th>
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
                <td>
                <a href='a_update_design.php?ID=$final[id]'><input type='submit' value='UPDATE' class='udate'></a>
                <a href='delete.php?ID=$final[id]'><input type='submit' value='DELETE' class='del' onclick='return func()'></a>
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
<script>
    function func()
    {
        return confirm('Are you sure want to delete this record?');
    }
</script>
<a href="#top" class="up"><b>Go up</b></a>
