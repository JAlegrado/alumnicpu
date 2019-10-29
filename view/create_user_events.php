<div class="container-fluid mt-2 mb-2">
  <div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default text-center mt-3 mb-1" style="background-color:#030A28; border:20px solid;border-color:light;">
			<div class="panel-body mt-2 " style="background-color:#030A28;font-size:22px;color:white;">
				<fieldset >
				<form role="form"  method="post" action="index.php?page=create_election">
					<div class="row" style="background-color:#030A28;font-size:22px;color:white;">
						<div class="col-sm-12  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span> Upcoming Events:
									<a href="index.php?page=add_events" class="btn btn-sm btn-primary ml-lg-auto"><span class="glyphicon glyphicon-plus" ></span>Add Events</a>
								</div>
							<div>

							<div class="form-group">
								<div class="input-group">
									<select  class="form-control choice_type" name="position1">
									<?php foreach($result as $title=>$Mymessage)
										{ ?>
											<option value="<?php 
												echo $Mymessage->event_title;
											?>"><?php 
											echo $Mymessage->event_title;
										?></option>
									
									<?php } ?>
									</select>
									</div>
							<div>

						</div>
					</div>
				</form>	
				</fieldset>

				<div class="row" style="background-color:#030A28;font-size:22px;color:white;">
						<div class="col-sm-12  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">
						
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span> Pending Events:
								</div>
							<div>

							<div class="container-fluid">
								<table class="table table-hover">
									<thead>
										<tr class="bg-info text-light">
										<th class="text-center">Event Title</th>
										<th class="text-center">Event Type</th>
										<th class="text-center">Event Date</th>
										<th class="text-center">Course Participants</th>
										<th class="text-center">Batch Participants</th>
										<th class="text-center"></th>
										<th class="text-center"></th>
										<th class="fit"></th>
									</tr>
									</thead>
									<tbody class="bg-danger">
	<?php 	
		$counter=0;
		foreach($result2 as $title=>$Mymessage2)
			{
				echo "<tr>";
				$counter++;
				echo "<tr>";
			
				echo "<td class='text-center text-center  text-light'>". $Mymessage2->event_title ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage2->event_type ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage2->event_date ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage2->course_participants ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage2->batch_participants ."</td>";
				echo "<td class='text-center text-center  text-light'> </td>";		
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
		</div>
	</div>
</div>
	
