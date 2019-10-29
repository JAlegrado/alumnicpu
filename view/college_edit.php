<div class="container" style="margin-top:40px">
	<div class="row">
        <div class="col-sm-4"></div>
		<div class="col-sm-6 col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<center><strong>Edit College</strong></center>
				</div>
				<div class="panel-body">
					<form role="form"  method="post" action="index.php?page=college_update">
						<fieldset>
							<div class="row">
								<div class="center-block">
									<img class="profile-img"
										src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-10  col-md-offset-1 ">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="glyphicon glyphicon-user"></i>
											</span> 

											<?php 
											echo "<input class='form-control' placeholder='College id' name='college_id' type='hidden' value='". $college_id ."' autofocus>";
											echo "<input class='form-control text-center' placeholder='College Name' name='college_name' type='text' value='". $college_name ."' autofocus>";
											?>
										</div>
									</div>
								
									<div class="form-group">
										<input type="hidden" class="btn btn-lg btn-primary btn-block" name="update" value=1>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-lg btn-primary btn-block" value="Update">
										</br>
										<center>
										<a class="btn btn-lg btn-default" href="index.php?page=create_college" class="btn btn-sm btn-default">
							        		<span class="glyphicon glyphicon-minus" ></span>Cancel
							        	</a>
							        	</center>
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="panel-footer ">
				</div>
            </div>
		</div>
	</div>
</div>
</body>
</html>