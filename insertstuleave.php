<?php
require_once 'connection.php';
$name=$_POST['name'];
$Leaveid=$_POST['Leaveid'];
$reason=$_POST['reason'];
$status=$_POST['status'];
if(isset($_POST['submit']))
{
    $sq="INSERT into stu_leave(name,leaveid,reason,status) VALUES('".$name."','".$Leaveid."','".$reason."','".$status."')";
    if(!$result=$con->query($sq))
    {
        die('Error['.$con->error.']');
    }
    else
    {
         echo "success";
        
    }
}
mysqli_close($con);
?>