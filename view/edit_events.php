<div class="container-fluid mt-0 mb-2">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default text-center mt-3 mb-1" style="background-color:#030A28; border:20px solid;border-color:light;">
				<div class="panel-body mt-2 " style="background-color:#030A28;font-size:22px;color:white;">
					    <div class="row" style="background-color:#030A28;font-size:22px;color:white;">                    

                            <div class="col-sm-4  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">
							<fieldset >
							<form role="form"  method="post" action="index.php?page=update_events">
              
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											Venue:
										</span> 
                                    </div>
                                    
								    <div>
									<?php 
											echo "<input class='form-control' name='event_id' type='hidden' value='". $event_id ."' autofocus>";
											echo "<input class='form-control text-center' name='venue' type='text' value='". $venue ."' autofocus>";
										?>											</div>
                                </div>



                            	<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											Event Title:
										</span> 
                                    </div>
                                    
								    <div>
									<?php 
											
											echo "<input class='form-control text-center' name='event_title' type='text' value='". $event_title ."' autofocus>";
										?>		
 									</div>
                                </div>
                                
                                <div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											Event Type:
										</span> 
									</div>
									<div>
										<?php 											
											echo "<input class='form-control text-center' name='event_type' type='text' value='". $event_type ."' autofocus>";
										?>	
									</div>
								</div>

								
                                <div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											Event Date:
										</span> 
									</div>
									<div>
										<input class="form-control text-center" name="event_date" type="date" value='". $event_type ."' autofocus>
									</div>
								</div>


								<div class="form-group">
                                    <div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											Participants:
										</span> 
									</div>
                                    

									<div class="form-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user">Course Participants</i>
										</span> 
									<div class="input-group">
									
									<?php
										$result2 = $this->model->getcourse();
										echo "<select name='course_participants' size='1' class='form-control'>";
            							foreach($result2 as $title=>$getcourse){
											echo "<option value='$getcourse->course_title'>$getcourse->course_title</option>";	
										} 
										echo "</select>";
									?>									
										
									</div>
									</div>

                                    
									<div class="form-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user">Batch Participants</i>
										</span> 
									<div class="input-group">
									
									<?php
										$result3 = $this->model->getyeargraduated();
										echo "<select name='batch_participants' size='1' class='form-control'>";
            							foreach($result3 as $title=>$getyeargraduated){
											echo "<option value='$getyeargraduated->year_graduated'>$getyeargraduated->year_graduated</option>";	
										} 
										echo "</select>";
									?>									
										
									</div>
								</div>


                                </div>

                                <div class="form-group">
									<input type="hidden" class="btn btn-lg btn-primary btn-block" name="register" value=1>
                                </div>
                                
								<div class="form-group">
									<input type="submit" class="btn btn-lg btn-primary btn-block text-center bg-transparent" style="border:30px solid;border-color:black;" value="Update Events">
								</div>
                            
								</form>    
								</fieldset>		
							
							</div>
                            
								
					
                     


                            <div class="col-sm-8  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">
                                
								<table class="table table-hover">
								<thead>
								<tr class="bg-info text-light">
									<th class="text-center">Venue</th>
									<th class="text-center">Event Title</th>
									<th class="text-center">Event Type</th>
									<th class="text-center">Event Date</th>
									<th class="text-center">Course Participants</th>
									<th class="text-center">Batch Participants</th>
									
									<th class="fit"><a href="index.php?page=create_events" class="btn btn-sm btn-primary ml-lg-auto"><span class="glyphicon glyphicon-plus" ></span>Events</a></th>
									<th class="text-center"></th><th class="text-center"></th>
								</tr>
								</thead>
								<tbody class="bg-danger">
									<?php 	
									
									foreach($result as $title=>$Mymessage)
									{
										echo "<tr>";
									
									
										echo "<td class='text-center text-center  text-light'>". $Mymessage->venue ."</td>";
										echo "<td class='text-center text-center  text-light'>". $Mymessage->event_title ."</td>";
										echo "<td class='text-center text-center  text-light'>". $Mymessage->event_type ."</td>";
										echo "<td class='text-center text-center  text-light'>". $Mymessage->event_date ."</td>";
										echo "<td class='text-center text-center  text-light'>". $Mymessage->course_participants ."</td>";
										echo "<td class='text-center text-center  text-light'>". $Mymessage->batch_participants ."</td>";
										echo "<td>
												<form action='index.php?page=edit_event' method='post'>
				 								<input type='hidden' name='event_id' value=". $Mymessage->event_id .">					
				 								<button type='submit' class='btn btn-sm btn-info' name='event_select'>
												<span class='glyphicon glyphicon glyphicon-edit' ></span> 
												Edit
												</button>
												</form>
			  								</td>";		
			  							echo "<td>
			  								<form action='index.php?page=delete_event' method='post'>
			   								<input type='hidden' name='event_id' value=". $Mymessage->event_id .">					
			   								<button type='submit' class='btn btn-sm btn-info' name='event_select'>
				  							<span class='glyphicon glyphicon glyphicon-edit' ></span> 
				  							Delete
			  								</button>
			  								</form>
											</td>";		
										echo "</tr>";
									}
									?>	
								</tbody>
								</table>
							</div>	
				</div>
			</div>
	    </div>
    </div>
</div>


