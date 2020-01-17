<?php
include("connection.php");
//echo "invalid";

if(isset($_POST['submit']))
{
    echo "invalid";
    $result=mysqli_query($con,"SELECT * from ad_faculty WHERE username='".$_POST["username"]."' and password='".$_POST["password"]."'");
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
        session_start();
        $_SESSION["id"]=$row["id"];
        header('location:facultyhome.php');
        }
    }
    else
    {
        echo "invalid";
    }
}
?>