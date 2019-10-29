<div class="container-fluid">
  <div class="row">
	<div class="col-lg-5">
				<fieldset>
			<form role="form"  method="post" action="index.php?page=create_election">
				<div class="row">
					<div class="col-lg-8">
						<label>Election Title:</label>
							<input class="form-control text-center" placeholder="Election Title" name="election_title" type="text" autofocus>
					</div>
				</div>	
				<div class="row">	
					<div class="col-lg-6">
						<label>Election Date:</label>
						<input class="form-control text-center" name="election_date" type="date" autofocus>
					</div>
				</div>
				<div class="row">	
				<label class="font-weight-light col-lg-12" style="size:22px;">Nomination:</label>					
					<div class="col-lg-4">
						<label>Starting Date:</label> 
							<input class="form-control text-center" name="start_date" type="date" autofocus>
					</div>
					<div class="col-lg-4">
						<label>Due Date:</label> 
							<input class="form-control text-center" name="due_date" type="date" autofocus> 
							<br>
					</div>
				</div>
				<div class="row">
						<input  class="btn btn-warning" type="submit" name="register" value="Submit">
				</div>		
			</form>					
		</fieldset>
	</div>

<div class="col-lg-6" style="margin-right:2px;">
<table class="table table-hover">
<thead>
	<tr class="bg-info text-light">
		
		<th class="text-center">Election Title</th>
		<th class="text-center">Election Date</th>
		<th class="text-center">Position</th>
		<th class="text-center">Nomination Start Date</th>
		<th class="text-center">Nomination Due Date</th>
		
		<th class="text-center"></th>	
		<th class="text-center"></th>								
	</tr>
</thead>
<tbody>
	<?php 	
		$counter=0;
		foreach($result1 as $title=>$Mymessage)
			{
				echo "<tr>";
				$counter++;
				echo "<tr>";
			
				echo "<td class='text-center'>". $Mymessage->election_title ."</td>";
				echo "<td class='text-center'>". $Mymessage->election_date ."</td>";
				echo "<td class='text-center'>". $Mymessage->position1."</td>";
				echo "<td class='text-centert'>". $Mymessage->start_date ."</td>";
				echo "<td class='text-center '>". $Mymessage->due_date."</td>";
			
				echo "<td>
					<form action='index.php?page=edit_election' method='post'>
				 	<input type='hidden' name='election_id' value=". $Mymessage->election_id .">					
				 	<button type='submit' class='btn btn-sm btn-warning' name='election_select'>
					<span class='glyphicon glyphicon glyphicon-edit' ></span> 
					</button>
					</form>
			  		</td>";		
			  	echo "<td>
			  		<form action='index.php?page=delete_election' method='post'>
			   		<input type='hidden' name='election_id' value=". $Mymessage->election_id .">					
			   		<button type='submit' class='btn btn-sm btn-warning' name='election_select'>
					<span class='glyphicon glyphicon glyphicon-trash' ></span> 
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










 <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Election Results</h4>
		  <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
        <p>
		<table class="table table-hover">
<thead>
	<tr class="bg-info text-light">
		
		<th class="text-center">Firstname</th>
		<th class="text-center">Lastname</th>
		<th class="text-center">Position</th>
		<th class="text-center">Vote</th>
									
	</tr>
</thead>

<tbody class=" bg-success">

				<?php
			$result = $this->model->get_voteresults();
			
			foreach($result as $title=>$Mymessage)
				{
				
					
					echo "<tr><td class='text-center  text-light'>". $Mymessage->firstname ."</td>";
					echo "<td class='text-center  text-light'>". $Mymessage->lastname ."</td>";
					echo "<td class='text-center  text-light'>". $Mymessage->position ."</td>";
					echo "<td class='text-center  text-light'>". $Mymessage->vote ."</td></tr>";
					
					
				}
		?>	

		</tbody>
		</table>		
		</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>