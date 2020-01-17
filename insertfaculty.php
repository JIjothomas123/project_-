<?php
require_once 'connection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$qualification=$_POST['qualification'];
$batch=$_POST['batch'];
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST['submit']))
{
    echo "in";
    $sq="INSERT into ad_faculty (name,email,phone,qualification,batch,username,password) VALUES('".$name."','".$email."','".$phoneno."','".$qualification."','".$batch."','".$username."','".$password."')";
    if(!$result=$con->query($sq))
    {
        die('Error['.$con->error.']');
    }
    else
    {
        header("location:adminhome.php");
    }
}
mysqli_close($con);
?>