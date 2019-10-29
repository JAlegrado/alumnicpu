
<div class="container-fluid bg-info">

<div class="row">
<div class="col-sm-4">
			
<form action="index.php?page=view_user1" method="post">
	<span class="input-group-addon text-light">Search firstname,lastname</span> 

	<input class="form-control text-center bg-dark text-light" placeholder="Type Firstname or Lastname" name="searchlastfirst" type="text" autofocus>

                <select id="year_graduated1" name="year_graduated"  class="form-control">
                    <option value="0" selected="selected">Select Year Graduated</option>
                    <?php
    				$result5 = $this->model->getyeargraduated();
                        if (! empty($result5)) {
							foreach($result5 as $title=>$getyeargraduated){
                           
                                echo '<option value="' .  $getyeargraduated->year_graduated. '">' .  $getyeargraduated->year_graduated . '</option>';
                            }
                        }
                        ?>
                </select>
              
				<select id="college1" name="college" class="form-control">
                    <option value="0" 
					>Select College</option>
                    <?php
					$result6 = $this->model->get_college();
    				
                        if (! empty($result6)) {
							foreach($result6 as $title=>$getcourse){
                           
                                echo '<option value="' . $getcourse->college10. '">' .  $getcourse->college10. '</option>';
                            }
                        }
                        ?>
                </select>

				<select id="course1" name="course"  class="form-control">
                    <option value="0" selected="selected">Select Course</option>
                    <?php
						$result7 = $this->model->getcourse();
                        if (! empty($result7)) {
							foreach($result7 as $title=>$getcourse){
                                echo '<option value="' . $getcourse->course_title . '">' . $getcourse->course_title . '</option>';
                            }
                        }
                        ?>
                </select>

				<button type="submit" name="searchfirst_last" class="form-control btn-dark"><span class="glyphicon glyphicon-book"> Search </span></button>  

	
			
</form>

</div>

<div class="col-sm-8 bg-danger">
						
<table class="table table-hover">
	<thead>
		<tr class="bg-info text-light">
			<th class="text-center">Lastname</th>	
			<th class="text-center">Firstname</th>
			<th class="text-center">Middlename</th>
			<th class="text-center">Year Graduated</th>
			<th class="text-center">Course</th>
			<th class="text-center">College</th>
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
					echo "<td class='text-center text-center text-light'>". $Mymessage->lastname ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->firstname ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->middlename ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->yeargraduated ."</td>";		
					echo "<td class='text-center text-center text-light'>". $Mymessage->course ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->college ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->social ."</td>";
					echo "<td class='text-center text-center text-light'> </td>";		
					echo "</tr>";
				}
		?>	
	</tbody>
</table>
</div>



</div>


