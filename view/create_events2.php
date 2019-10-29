<div class="container-fluid mt-2 mb-2">
  <div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default text-center mt-3 mb-1" style="background-color:#030A28; border:20px solid;border-color:light;">
			<div class="panel-body mt-2 " style="background-color:#030A28;font-size:22px;color:white;">
			

				<div class="row" style="background-color:#030A28;font-size:22px;color:white;">
						<div class="col-sm-12  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">
						
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span> Upcoming Events:
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
									
										<th class="fit">
										<a href="index.php?page=add_events" class="btn btn-sm btn-primary ml-lg-auto"><span class="glyphicon glyphicon-plus" ></span>Add Events</a>

										
										
										</th>
									</tr>
									</thead>
									<tbody class="bg-danger">
	<?php 	
		$counter=0;
		foreach($result as $title=>$Mymessage)
			{
				echo "<tr>";
				$counter++;
				echo "<tr>";
			
				echo "<td class='text-center text-center  text-light'>". $Mymessage->event_title ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->event_type ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->event_date ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->course_participants ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->batch_participants ."</td>";
				echo "<td class='text-center text-center  text-light'> </td>";		
				


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
	
