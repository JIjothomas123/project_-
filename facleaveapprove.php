<?php include("base.php")?>
<?php 
require_once 'connection.php';

$result2=mysqli_query($con,"SELECT * from fac_leave")?>
<table class="">
<th class="frm">faculty name </th>
<th class="frm">Leave id</th>
<th class="frm">Reason</th>
<th class="frm">status</th>



<?php while($row2=mysqli_fetch_assoc($result2))
        {?>
       
                
               
               
               
                
				
                    <tr><td  class="frm"><?php echo $row2["name"] ?></td>
                    <td class="frm"><?php echo $row2["Leaveid"] ?></td>
                    <td class="frm"><?php echo $row2["reason"] ?></td>
                    <td class="frm"><?php echo $row2["status"] ?></td>
                   

                     
                  </tr>
                    
                
                

                  <?php }
                  ?>		
            </table>
    <form action="facleaveapprovesubmit.php" name="login" method="post" class="m-auto py-3 p-3 form-style rounded">

          <input type="text" class="frm" placeholder="enter leave id" name="fname">
          <input type="submit" class="frm" value="approve" name="submit">
        </form>