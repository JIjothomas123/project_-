<?php
require_once 'connection.php';
$name=$_POST['name'];
$batch=$_POST['batch'];
$maxmark=$_POST['maxmark'];
$assesment=$_POST['assesment'];
$subject1=$_POST['subject1'];
$subject2=$_POST['subject2'];
$subject3=$_POST['subject3'];
$subject4=$_POST['subject4'];


if(isset($_POST['submit']))
{
    $sq="INSERT into add_mark (name,batch,maxmark,assesment,subject1,subject2,subject3,subject4) VALUES('".$name."','".$batch."','".$maxmark."','".$assesment."','".$subject1."','".$subject2."','".$subject3."','".$subject4."')";
    if(!$result=$con->query($sq))
    {
        die('Error['.$con->error.']');
    }
    else
    {
         echo "successfull";
        
    }
}
mysqli_close($con);
?>