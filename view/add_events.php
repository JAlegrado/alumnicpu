<div class="container-fluid mt-0 mb-2">
    <div class="row">
        <div class="col-lg-12">            
								<table class="table table-hover">
								<thead>
								<tr>
									<th class="text-center">Venue</th>
									<th class="text-center">Event Title</th>
									<th class="text-center">Event Type</th>
									<th class="text-center">Event Date</th>
									<th class="text-center">Course Participants</th>
									<th class="text-center">Batch Participants</th>
									<th class="text-center">Requested by</th>
									
									<th class="text-center"></th><th class="text-center"></th>
								</tr>
								</thead>
								<tbody>
									<?php 	
									
									foreach($result as $title=>$Mymessage)
									{
										echo "<tr>";
									
									
										echo "<td class='text-center'>". $Mymessage->venue ."</td>";
										echo "<td class='text-center'>". $Mymessage->event_title ."</td>";
										echo "<td class='text-center'>". $Mymessage->event_type ."</td>";
										echo "<td class='text-center'>". $Mymessage->event_date ."</td>";
										echo "<td class='text-center'>". $Mymessage->course_participants ."</td>";
										echo "<td class='text-center'>". $Mymessage->batch_participants ."</td>";
										echo "<td class='text-center'>". $Mymessage->requested_by ."</td>";
										echo "<td>
												<form action='index.php?page=edit_event' method='post'>
				 								<input type='hidden' name='event_id' value=". $Mymessage->event_id .">					
				 								<button type='submit' class='btn btn-sm btn-warning' name='event_select'>
												<span class='glyphicon glyphicon glyphicon-edit' ></span> 
												Edit
												</button>
												</form>
			  								</td>";		
			  							echo "<td>
			  								<form action='index.php?page=delete_event' method='post'>
			   								<input type='hidden' name='event_id' value=". $Mymessage->event_id .">					
			   								<button type='submit' class='btn btn-sm btn-warning' name='event_select'>
				  							<span class='glyphicon glyphicon glyphicon-edit' ></span> 
				  							Delete
			  								</button>
			  								</form>
											</td>";		

											echo "<td>
											  	<form action='index.php?page=event_envited' method='post'>
											  	<input type='hidden' name='event_id' value=". $Mymessage->event_id .">
											  	<input type='hidden' name='course' value=".  $Mymessage->course_participants .">
			   									<input type='hidden' name='batch' value=". $Mymessage->batch_participants .">					
			   									<button type='submit' class='btn btn-sm btn-warning' name='event_select'>
				  								<span class='glyphicon glyphicon glyphicon-edit' ></span> 
				  								Envited list
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
			