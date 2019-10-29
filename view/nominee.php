
<?php
foreach($result as $title=>$getnominee)
{  
?>

<div class="container-fluid alert-warning" style="background-color:#030A28;">
<form action='index.php?page=save_nominee' method='post'>
						
<div class="container-fluid" style="margin-top:40px">

	<div class="row">

    <div class="col-sm-4">
    </div>
    
		<div class="col-sm-6 col-md-4 col-md-offset-4 ml-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<center><strong>Nominee Information</strong></center>
				</div>
				<div class="panel-body">
				<form role="form"  method="post" action="index.php?page=save_nominee">
					<fieldset>
						<div class="row">
							<div class="center-block">
								<img class="profile-img" src="view/images/background/1.jpg" alt="">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-10  col-md-offset-1 ">
							
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
										<i class="glyphicon glyphicon-user">Firstname</i>
										</span> 
										</div>
										<div class="input-group">
										
										<input class="form-control text-center" readonly placeholder="First Name" name="firstname" type="text" value=<?php echo $getnominee->firstname; ?>        autofocus>
									</div>
								</div>
								
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
										<i class="glyphicon glyphicon-user">Middlename</i>
										</span> 
										</div>
										<div class="input-group">
										<input class="form-control text-center" readonly placeholder="Middle Name" name="middlename" type="text"  value=<?php echo $getnominee->middlename; ?>   autofocus>
									</div>
								</div>
								
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
										<i class="glyphicon glyphicon-user">Lastname</i>
										</span> 
										</div>
										<div class="input-group">
										<input class="form-control text-center" readonly placeholder="Last Name" name="lastname" type="text" value=<?php echo $getnominee->lastname; ?> autofocus>
									</div>
								</div>
								
								<div class="form-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user">Year Graduated</i>
										</span> 
									<div class="input-group">
									
									<?php
										$result = $this->model->getyeargraduated();
										echo "<select name='yeargraduated' size='1' class='form-control'>";
            							foreach($result as $title=>$getyeargraduated){
											echo "<option value='$getyeargraduated->year_graduated'>$getyeargraduated->year_graduated</option>";	
										} 
										echo "</select>";
									?>									
										
									</div>
								</div>



									<div class="form-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user">Position</i>
										</span> 
									<div class="input-group">
									
									<?php
										$result2 = $this->model->get_position();
										echo "<select name='position' size='1' class='form-control'>";
            							foreach($result2 as $title=>$getposition){
											echo "<option value='$getposition->position'>$getposition->position</option>";	
										} 
										echo "</select>";
									?>									
										
									</div>
								</div>


                                
						
						<input type="hidden" name="user_id" value=<?php echo $getnominee->user_id;?>><br>						
						<button type="submit" class="btn btn-sm btn-primary bg-dark text-center" name="nominee_update">
						<span class="glyphicon glyphicon glyphicon-check" ></span> Submit
						</button>
						</fieldset>
						</form>
					</div>
			</div>
		</div>
	</div>
</div>							
</div>				

<?php
}
?>
