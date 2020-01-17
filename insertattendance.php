<?php
require_once 'connection.php';
$name=$_POST['name'];
$batch=$_POST['batch'];

$date=$_POST['date'];
$hour1=$_POST['hour1'];
$hour2=$_POST['hour2'];
$hour3=$_POST['hour3'];
$hour4=$_POST['hour4'];
$hour5=$_POST['hour5'];


if(isset($_POST['submit']))
{
    echo "in";
    $sq="INSERT into attendance (name,batch,date,hour1,hour2,hour3,hour4,hour5) VALUES('".$name."','".$batch."','".$date."','".$hour1."','".$hour2."','".$hour3."','".$hour4."','".$hour5."')";
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