<?php
include("connection.php");
//echo "invalid";


if(isset($_POST['submit']))
{
    echo "invalid";
    $result=mysqli_query($con,"UPDATE stu_leave SET status='approved' where leaveid='".$_POST['fname']."'");
    header("location:stuleaveapprove.php");
}
?>