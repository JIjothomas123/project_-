<?php include("base.php")?>
<?php 
require_once 'connection.php';

$result2=mysqli_query($con,"SELECT * from ad_faculty")?>
<table class="">
<th class="frm">faculty_name </th>
<th class="frm">email</th>
<th class="frm">phone</th>
<th class="frm">qualification</th>
<th class="frm">batch</th>

<?php while($row2=mysqli_fetch_assoc($result2))
        {?>
       
                
               
               
               
                
				
                    <tr><td  class="frm"><?php echo $row2["name"] ?></td>
                    <td class="frm"><?php echo $row2["email"] ?></td>
                    <td class="frm"><?php echo $row2["phone"] ?></td>
                    <td class="frm"><?php echo $row2["qualification"] ?></td>
                    <td class="frm"><?php echo $row2["batch"] ?></td> 
                    
                  

                     
                  </tr>
                    
                
                

                  <?php }
                  ?>		
            </table>
       