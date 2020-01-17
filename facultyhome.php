<?php session_start();?>

<?php 
require_once 'facbase.php';
require_once 'connection.php';
$result=mysqli_query($con,"SELECT * from ad_faculty WHERE id='".$_SESSION["id"]."'");
while($row=mysqli_fetch_assoc($result))
        {?>
        
           
         
         <table class="border table table-striped bg-table">
							<tr>
							<th>Emp-id: ORY-k-1234</th>
							<th class="text-right"><a href="faculty-profile-edit.php"><button   class="btn btn-primary text-white px-4">Edit<i class="fas  fa-edit"></i></button></a>
							</th>
							</tr>
							
							
							<tr>
							<td class="font-weight-bolder">Name</td>
							<td><?php  echo  $row['name'] ?></td>
							</tr>
							
							
							
							
							
							
							
							
							<tr>
							<td class="font-weight-bolder">Mobile</td>
							<td><?php  echo  $row['phone'] ?></td>
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
