<?php
include("connection.php");
//echo "invalid";

if(isset($_POST['submit']))
{
    echo "invalid";
    $result=mysqli_query($con,"SELECT * from admin WHERE username='".$_POST["username"]."' and password='".$_POST["password"]."'");
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        header("location:adminhome.php");
    }
    else
    {
        echo "invalid";
    }
}
?>