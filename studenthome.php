<?php include("studentbase.php")?>
<?php 
require_once 'connection.php';
session_start();
$result=mysqli_query($con,"SELECT * from add_student WHERE s_id='".$_SESSION["id"]."'");
while($row=mysqli_fetch_assoc($result))
        {?>
        
           
         
         <table class="border table table-striped bg-table">
							
							
							<tr>
							<td class="font-weight-bolder">Name</td>
							<td><?php  echo  $row['name'] ?></td>
							</tr>
							
							
							
							<tr>
							<td class="font-weight-bolder">DOB</td>
							<td><?php  echo  $row['dob'] ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Gender</td>
							<td><?php  echo  $row['gender'] ?></td>
							</tr>
							
							
							
							<tr>
							<td class="font-weight-bolder">Mobile</td>
							<td><?php  echo  $row['phoneno'] ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Email</td>
							<td><?php  echo  $row['email'] ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Batch</td>
							<td><?php  echo  $row['batch'] ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Qualification</td>
							<td><?php  echo  $row['qualification'] ?></td>
							</tr>
							
                            <?php    
                    }?>
                        </table>