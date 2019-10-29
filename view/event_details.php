
<table class="table table-hover">
<thead>
    <tr class="bg-info text-light container">
		<th class="text-center">Event Title</th>
        <th class="text-center">Event Type</th>
        <th class="text-center">Event Date</th>
        <th class="text-center">Course Participants</th>
        <th class="text-center">Batch Participants</th>
        <th class="text-center"><a href="index.php?page=create_events" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-plus" ></span>Upcoming Events</a></th>

	</tr>
</thead>
<tbody class="bg-primary">

    <?php 	
	foreach($result as $title=>$Mymessage)
	{
	    echo "<tr><td class='text-center  text-light'>". $Mymessage->event_title ."</td>";
	    echo "<td class='text-center text-light'>". $Mymessage->event_type ."</td>";
        echo "<td class='text-center text-light'>". $Mymessage->event_date ."</td>";
        echo "<td class='text-center text-light'>". $Mymessage->course_participants ."</td>";
        echo "<td class='text-center text-light'>". $Mymessage->batch_participants ."</td>";
        

    echo "</tr>";		
	}
	?>	
</tbody>
</table>

