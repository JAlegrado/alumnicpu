<div class="container-fluid">
  <div class="row">
	<div class="col-lg-12">
		<button type="button" class="btn btn-sm btn-warning float-right" data-toggle="modal" data-target="#myModal">Add Event</button>
	</div>
</div>
<div class="row">
		<div class="col-lg-5"
			 style=" font-size:22px; margin-left:15px; margin-bottom:5px; margin-right:10px;">
			<div>
			<table class="table table-hover">
			<h3> Upcoming Events</h3>
				<thead>
				<tr class="table-active">
					<th class="text-center">Event Title</th>
					<th class="text-center">Event Type</th>
					<th class="text-center">Event Date</th>
					<th class="text-center">Course Participants</th>
					<th class="text-center">Batch Participants</th>
					<th class="fit"></th>
				 </tr>
			</thead>
			<tbody>
				<?php 	
					$counter=0;
					foreach($result as $title=>$Mymessage)
						{
							echo "<tr>";
							$counter++;
							echo "<tr>";
						
							echo "<td class='text-center text-center'>". $Mymessage->event_title ."</td>";
							echo "<td class='text-center text-center'>". $Mymessage->event_type ."</td>";
							echo "<td class='text-center text-center'>". $Mymessage->event_date ."</td>";
							echo "<td class='text-center text-center'>". $Mymessage->course_participants ."</td>";
							echo "<td class='text-center text-center'>". $Mymessage->batch_participants ."</td>";
							echo "<td class='text-center text-center'> </td>";		
							echo "</tr>";
						}
				?>	
			</tbody>
		</table>
	</div>							  
	</div>
	<div class="col-lg-6"
			 style="font-size:22px;margin-left:15px; margin-bottom:5px; margin-right:10px;">
			<div>
			<table class="table table-hover">
				<h3>Pending Events</h3>
				<thead>
				<tr class="table-active">
					<th class="text-center">Event Title</th>
					<th class="text-center">Event Type</th>
					<th class="text-center">Event Date</th>
					<th class="text-center">Course Participants</th>
					<th class="text-center">Batch Participants</th>
					<th class="text-center">Requested by</th>
					<th class="text-center"></th>
					<th class="text-center"></th>
					<th class="fit"></th>
				</tr>
			</thead>
			<tbody>
				<?php 	
					$counter=0;
						foreach($result2 as $title=>$Mymessage2)
						{
							echo "<tr>";
							$counter++;
							echo "<tr>";
						
							echo "<td class='text-center text-center'>". $Mymessage2->event_title ."</td>";
							echo "<td class='text-center text-center'>". $Mymessage2->event_type ."</td>";
							echo "<td class='text-center text-center'>". $Mymessage2->event_date ."</td>";
							echo "<td class='text-center text-center'>". $Mymessage2->course_participants ."</td>";
							echo "<td class='text-center text-center'>". $Mymessage2->batch_participants ."</td>";
							echo "<td class='text-center text-center'> </td>";	
							echo "<td class='text-center text-center'> </td>";		
							echo "<td>
							<form action='index.php?page=approve_event' method='post'>
							<input type='hidden' name='event_id' value=". $Mymessage2->id .">					
							<button type='submit' class='btn btn-sm btn-info' name='event_select'>
								<span class='glyphicon glyphicon glyphicon-edit' ></span> 
								Approved
							</button>
							</form>
						</td>";		
						echo "<td>
						<form action='index.php?page=decline_event' method='post'>
						<input type='hidden' name='event_id' value=". $Mymessage2->id .">					
						<button type='submit' class='btn btn-sm btn-info' name='event_select'>
							<span class='glyphicon glyphicon glyphicon-edit' ></span> 
							Decline
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


 <!-- Modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
							<label><h3>Add an Event</h3></label>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
						  </button>	
						</div>
						  <div class="modal-body">
						  <form role="form"  method="post" action="index.php?page=add_events">
							<div class="form-group">
							<label>Event Title:</label>
      								<input type="text" class="form-control" name="event_title" placeholder="Event Title">
						   </div>
						   <div class="form-group">
						   <label>Event Type:</label>
      								<input type="text" class="form-control" name="event_type" placeholder="Event Type">
						   </div>
						   <div class="form-group">
							<label>Venue:</label>
      								<input type="text" class="form-control" name="Venue" placeholder="Event Title">
						   </div>
						   <div class="form-group">
						   <label>Event Date:</label>
      								<input type="date" class="form-control" name="event_date"autofocus>
						   </div>
						   <div class="form-group">
						   <label>Participants:</label>
						   <?php
										$result2 = $this->model->getcourse();
										echo "<select name='course_participants' size='1' class='form-control'>";
            							foreach($result2 as $title=>$getcourse){
											echo "<option value='$getcourse->course_title'>$getcourse->course_title</option>";	
										} 
										echo "</select>";
									?>					
</div>
<?php
										$result3 = $this->model->getyeargraduated();
										echo "<select name='batch_participants' size='1' class='form-control'>";
            							foreach($result3 as $title=>$getyeargraduated){
											echo "<option value='$getyeargraduated->year_graduated'>$getyeargraduated->year_graduated</option>";	
										} 
										echo "</select>";
									?>							
						</div>
						<input type="submit" class="btn btn-warning btn-lg" style="widthd:30px;" name="register" value="Submit"><br>
</div>
							
						</form>				
</div>