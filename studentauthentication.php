<?php
include("connection.php");
//echo "invalid";

if(isset($_POST['submit']))
{
    echo "invalid";
    $result=mysqli_query($con,"SELECT * from add_student WHERE username='".$_POST["username"]."' and password='".$_POST["password"]."'");
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
        session_start();
        $_SESSION["id"]=$row["s_id"];
        $_SESSION["ids"]=$row["username"];

        header("location:studenthome.php");
        }
    }
    else
    {
        echo "invalid";
    }
}
?>