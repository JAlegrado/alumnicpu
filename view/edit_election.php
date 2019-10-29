
		<div class="container-fluid">
			<fieldset >
				<form role="form"  method="post" action="index.php?page=update_election">
					<div class="row">
					<div class="form-group col-lg-5">
						<label>Election Title:</label>
                            <?php 
								echo "<input class='form-control' name='election_id' type='hidden' value='". $election_id ."' autofocus>";
								echo "<input class='form-control text-center' name='election_title' type='text' value='". $election_title ."' autofocus>";
							?>
					</div>
						</div>
						<div class="row">
					<div class="form-group col-lg-5">
							<label>Election Date:</label>
							 <?php 
								 echo "<input class='form-control text-center' name='election_date' type='date' value='". $election_date ."' autofocus>";
							 ?>
					</div>
					</div>
					
					<label>Nomination</label><br>
					<div class="row">
					<div class="form-group col-lg-2">
						<label>Nomination Start Date:</label>
                             <?php 
								echo "<input class='form-control text-center' name='nomination_start_date' type='date' value='". $start_date ."' autofocus>";
							 ?>       
					</div>
					<div class="form-group col-lg-2">				
						<label>Nomination Due Date:</label>
                            <?php 
								echo "<input class='form-control text-center' name='nomination_due_date' type='date' value='". $due_date ."' autofocus>";
							?>   
					</div>
</div>
					<div class="row">
					<div class="form-group col-lg-5">
							<input type="submit" class="btn btn-lg btn-warning"name="register"  value="Update Election">
					</div>
</div>
				</form>				
			</fieldset>
								</div>
								</div>
								</div>		
		</div>
		</div>    
		</div>
		</div>
		</div>   
	
