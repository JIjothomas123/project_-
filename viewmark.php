<?php include("studentbase.php")?>
<?php 
require_once 'connection.php';
session_start();
$result=mysqli_query($con,"SELECT * from add_student WHERE s_id='".$_SESSION["id"]."'");
while($row=mysqli_fetch_assoc($result))
        {
          $var=$row["name"];
        }
            ?>
<?php 
$result2=mysqli_query($con,"SELECT * from add_mark WHERE name='".$var."'");?>
<table class="">
<th class="frm">student_name </th>
<th class="frm">batch</th>
<th class="frm">Max mark</th>
<th class="frm">Assessment no</th>
<th class="frm">subject1</th>
<th class="frm">subject2</th>
<th class="frm">subject3</th>
<th class="frm">subject4</th>

<?php while($row2=mysqli_fetch_assoc($result2))
        {?>
       
                
               
               
               
                
				
                    <tr><td  class="frm"><?php echo $row2["name"] ?></td>
                    <td class="frm"><?php echo $row2["batch"] ?></td>
                    <td class="frm"><?php echo $row2["maxmark"] ?></td>
                    <td class="frm"><?php echo $row2["assesment"] ?></td>
                    <td class="frm"><?php echo $row2["subject1"] ?></td> 
                    <td class="frm"><?php echo $row2["subject2"] ?></td>
                    <td class="frm"><?php echo $row2["subject3"] ?></td>
                    <td class="frm"><?php echo $row2["subject4"] ?></td>

                     
                  </tr>
                    
                
                

                  <?php }
                  ?>		
            </table>
       