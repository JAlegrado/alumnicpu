
<div class="container-fluid">
<div class="row">
<div class="col-lg-6">
	<?php 
		$result = $this->model->get_news();
	?>	
		<table class="table table-hover">
		<h2>NEWS</h2>
		<thead class="table-active">
			<tr>
				<th class='text-center'>Title</th>
				<th class='text-center'>Date</th>
				
			</tr>
		</thead>
		<tbody>
			<?php 	
				$counter=0;
				foreach($result as $title=>$Mymessage)
					{	
						echo "<tr><td class='text-center'>". $Mymessage->news_title ."</td>";
						echo "<td class='text-center'>". $Mymessage->news_date ."</td></tr>";	
					}

			?>	
			
		</tbody>
		</table>

</div>



<div class="col-lg-6">
	<?php 
		$result = $this->model->get_events();
	?>	

<table class="table table-hover">
	<h2>EVENTS</h2>
<thead class="table-active">
	<tr>
		<th class='text-center'>Title</th>
		<th class='text-center'>Type</th>
		<th class='text-center'>Date</th>
		<th class='text-center'>Course</th>
		<th class='text-center'>Batch</th>
	</tr>
</thead>
<tbody>
	<?php 	
		$counter=0;
		foreach($result as $title=>$Mymessage)
			{
			
				
				echo "<tr><td class='text-center'>". $Mymessage->event_title ."</td>";
				echo "<td class='text-center'>". $Mymessage->event_type ."</td>";
				echo "<td class='text-center'>". $Mymessage->event_date ."</td>";
				echo "<td class='text-center'>". $Mymessage->course_participants ."</td>";
				echo "<td class='text-center'>". $Mymessage->batch_participants ."</td></tr>";
				
				
			}
	?>	
</tbody>
</table>

</div>


