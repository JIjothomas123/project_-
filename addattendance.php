<?php 
require_once 'facbase.php';
?>
<section>
			<div class="container-fluid bg-style media1">
			
				<div class="row">
					
					<div class="col-md-12 log-style">
						<form action="insertattendance.php" name="log" method="post" class="m-auto py-3   p-3 form-style rounded">

							
                            Name<input class="form-control box-bg " type="text" placeholder="" class="frm" name="name">
							batch<input class="form-control box-bg " type="text" placeholder="" class="frm" name="batch">							
                            Date<input class="form-control box-bg " type="text" placeholder="" class="frm" name="date">														
                            hour1<input class="form-control box-bg " type="checkbox" placeholder="" class="frm" name="hour1">	
                            hour2<input class="form-control box-bg " type="checkbox" placeholder="" class="frm" name="hour2">							
				            hour3<input class="form-control box-bg " type="checkbox" placeholder="" class="frm" name="hour3">
                            hour4<input class="form-control box-bg " type="checkbox" placeholder="" class="frm" name="hour4">							
                            hour5<input class="form-control box-bg " type="checkbox" placeholder="" class="frm" name="hour5">							
							

							<button type="submit" name="submit" class="btn-primary mt-md-3 px-5 rounded shadow">submit</button>
								
								

						</form>
					</div>
				</div>
			</div>
		</section>
