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
$result2=mysqli_query($con,"SELECT * from attendance WHERE name='".$var."'");?>
<table class="">
<th class="frm">student_name </th>
<th class="frm">batch</th>
<th class="frm">jsd</th>
<th class="frm">hour1</th>
<th class="frm">hour2</th>
<th class="frm">hour3</th>
<th class="frm">hour4</th>
<?php while($row2=mysqli_fetch_assoc($result2))
        {?>
       
                
               
               
               
                
				
                    <tr><td  class="frm"><?php echo $row2["name"] ?></td>
                    <td class="frm"><?php echo $row2["batch"] ?></td>
                    <td class="frm"><?php echo $row2["date"] ?></td>
                    <td class="frm"><?php echo $row2["hour1"] ?></td>
                    <td class="frm"><?php echo $row2["hour2"] ?></td> 
                    <td class="frm"><?php echo $row2["hour3"] ?></td>
                    <td class="frm"><?php echo $row2["hour4"] ?></td>
                     
                  </tr>
                    
                
                

                  <?php }
                  ?>		
            </table>
       