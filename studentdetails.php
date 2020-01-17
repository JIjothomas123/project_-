<?php include("facbase.php")?>
<?php 
require_once 'connection.php';

$result2=mysqli_query($con,"SELECT * from add_student")?>
<table class="">
<th class="frm">student_name </th>
<th class="frm">dob</th>
<th class="frm">email</th>
<th class="frm">gender</th>
<th class="frm">phoneno</th>
<th class="frm">qualification</th>
<th class="frm">batch</th>


<?php while($row2=mysqli_fetch_assoc($result2))
        {?>
       
                
               
               
               
                
				
                    <tr><td  class="frm"><?php echo $row2["name"] ?></td>
                    <td class="frm"><?php echo $row2["dob"] ?></td>
                    <td class="frm"><?php echo $row2["email"] ?></td>
                    <td class="frm"><?php echo $row2["gender"] ?></td>
                    <td class="frm"><?php echo $row2["phoneno"] ?></td> 
                    <td class="frm"><?php echo $row2["qualification"] ?></td>
                    <td class="frm"><?php echo $row2["batch"] ?></td>
                  

                     
                  </tr>
                    
                
                

                  <?php }
                  ?>		
            </table>
       