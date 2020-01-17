<?php include("facbase.php")?>
<section>
			<div class="container-fluid bg-style media1">
			
				<div class="row">
					
					<div class="col-md-12 log-style">
						<form action="insertfacleave.php" name="log" method="post" class="m-auto py-3   p-3 form-style rounded">

							
                            Faculty Name<input class="form-control box-bg " type="text" placeholder="" class="frm" name="name">	
                            Leave id<input class="form-control box-bg " type="text" placeholder="" class="frm" name="Leaveid">							
                            reason<input class="form-control box-bg " type="text" placeholder="" class="frm" name="reason">							
                            status<input class="form-control box-bg " value="pending" readonly type="text" placeholder="" class="frm" name="status">
                            
                            <button type="submit" name="submit" class="btn-primary mt-md-3 px-5 rounded shadow">submit</button>
								
								

						</form>
					</div>
				</div>
			</div>
		</section>