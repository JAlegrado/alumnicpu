



<script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
	</script>



<div id='printMe'>

<table class="table">
    <thead class="thead-dark">
      <tr>
      <th>No.</th>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Year Graduated</th>
        <th>Position</th>
      </tr>
    </thead>
    <tbody class="table-primary">   
    <?php
mysql_select_db('cpuaai',mysql_connect('localhost','root',''))or die(mysql_error());
$sql = mysql_query("select * from nominee where status='Approve'  Order by nominee_id ASC")  or die('Error in query : $sql. ' .mysql_error());

if (mysql_num_rows($sql) > 0) 
{            
	$i = 1;
 	while ($row = mysql_fetch_array($sql)) {
                // Print out the contents of the entry 
                echo '<tr>';
                echo '<td class="text-center tety">' . $i . '</td>';
                echo '<td class="text-center">' . $row['firstname'] . '</td>';
                echo '<td class="text-center">' . $row['middlename'] . '</td>';
				echo '<td class="text-center">' . $row['lastname'] . '</td>';
                echo '<td class="text-center">' . $row['yeargraduated'] . '</td>';
                echo '<td class="text-center">' . $row['position'] . '</td>';
                echo '<tr>';
                $i++;		
 }
}
?></tbody>
</table>

</div>



<button onclick="printDiv('printMe')">Print List of Nominees</button>


<div id='printMe1'>
<?php
$result = $this->model->getAccounts();
?>

<table class="table table-hover">
	<thead>
		<tr class="bg-info text-light">
			
			<th class="text-center">Firstname</th>
			<th class="text-center">Middlename</th>
			<th class="text-center">Lastname</th>	
			<th class="text-center">Address</th>
			<th class="text-center">Year Graduated</th>
			<th class="text-center">Sex</th>				
			<th class="text-center">Email</th>
			<th class="text-center">Contact</th>
			<th class="text-center">Social Media</th>	
		    <!--<th class="fit"><a href="index.php?page=accounts_entry" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-plus" ></span> Add</a></th>-->
		    <th class="fit"></th>
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
				
					echo "<td class='text-center text-center text-light'>". $Mymessage->firstname ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->middlename ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->lastname ."</td>";		
					echo "<td class='text-center text-center text-light'>". $Mymessage->addressline ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->yeargraduated ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->sex ."</td>";		
					echo "<td class='text-center text-center text-light'>". $Mymessage->email ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->contact ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->social ."</td>";	
					echo "<td class='text-center text-center text-light'> </td>";		
					echo "</tr>";
				}
		?>	
	</tbody>
</table>
</div>


<button onclick="printDiv('printMe1')">Print List of Users</button>



<div id='printMe2'>

<?php
$result2 = $this->model->get_events2();


?>

<table class="table table-hover">
									<thead>
										<tr class="bg-info text-light">
										<th class="text-center">Event Title</th>
										<th class="text-center">Event Type</th>
										<th class="text-center">Event Date</th>
										<th class="text-center">Course Participants</th>
										<th class="text-center">Batch Participants</th>
										
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
			


				echo "</tr>";
			}
	?>	
</tbody>			



</table>
</div>


<button onclick="printDiv('printMe2')">Print List of Events</button>

