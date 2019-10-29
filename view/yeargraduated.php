<div class="container" style="margin-top:40px">
	<div class="row">
        <div class ="col-sm-4"></div>
		<div class="col-sm-6 col-md-4 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading bg-primary col-sm-12 col-md-10  col-md-offset-1 text-light ">
					<center><strong>Year Graduated Entry</strong></center>
				</div>
                <br>
				<div class="panel-body">
					<form role="form"  method="post" action="index.php?page=create_yeargraduated">
						<fieldset>
							

							<div class="row">
								<div class="col-sm-12 col-md-10  col-md-offset-1 ">

									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="glyphicon glyphicon-user"></i>
											</span> 
											<input class="form-control text-center" placeholder="Year Graduated" name="yeargraduated" type="text" autofocus>
										</div>
									</div>

									<div class="form-group">
										<input type="hidden" class="btn btn-lg btn-primary btn-block" name="save" value=1>
									</div>

									<div class="form-group">
										<input type="submit" class="btn btn-lg btn-primary btn-block" value="Save">
										
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