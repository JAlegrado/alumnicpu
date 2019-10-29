<div class="container-fluid">
  	<div class="row">
		<div class="col-lg-5">
			<fieldset>
				<form role="form" method="post" action="index.php?page=position_entry">
					<div class="form-group">
						<label>Position:</label>
								<input class="form-control text-center" placeholder="Position" name="position" type="text" autofocus>
					</div>
					<div class="form-group">
						<label>Max Votes: </label>
								<select  class="form-control choice_type" name="max_vote">
									<option value="1">1</option>
									<option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
									<option value="5">5</option>
                                    <option value="6">6</option>
						     	</select>
					</div>
					<div class="form-group">
									<input type="submit" class="btn btn-warning" value="Add Position">
					</div>
				</form>
			</fieldset>
		</div> 


	<!--table-->
		<div class="col-lg-4"style="margin-left:10px">
			<table class="table table-hover">
				<thead>
					<tr class="table-active">
						<th class="text-center">Position</th>
						<th class="text-center">Max Vote</th>
						<th></th>
						<th></th>
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
								echo "<td class='text-center text-center text-dark'>". $Mymessage->position ."</td>";
								echo "<td class='text-center text-center text-dark'>". $Mymessage->max_vote ."</td>";
								echo "<td>
					<form action='index.php?page=position_edit' method='post'>
					 <input type='hidden' name='position_id' value=".    $Mymessage->position_id  .">
					 <input type='hidden' name='position_name' value='". $Mymessage->position ."'>
					 <button type='submit' class='btn btn-sm btn-outline-warning' name='position_edit'>
						<span class='glyphicon glyphicon glyphicon-edit' ></span> 
						Edit
					</button>
					</form>
				  </td>";	

					echo "<td>
							 <form  class='position_delete".   $Mymessage->position_id ."'  action='index.php?page=position_delete' method='post'>
							 <input type='hidden' name='position_name' value='".  $Mymessage->position ."'>
							 <input type='hidden' name='position_id' value=".  $Mymessage->position_id .">
							 <button type='button'  name='delete_button".  $Mymessage->position_id ."' class='btn btn-sm btn-outline-warning delete_button'>
								<span class='glyphicon glyphicon glyphicon-trash' ></span> 
								Delete
							</button>
							</form>
						  </td>";				
				
				}
		?>	
	</tbody>
</table>
</div>

	</div>

  </div>
</div>



</div>

<!-- Modal -->
<div class="modal fade" id="confirm_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              Confirm
          </div>
          <div class="modal-body">
              Are you sure you want to Delete?
              <label id="position_name"></label>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              <a href="#" id="position_delete_ok" class="btn btn-success success">Yes</a>
          </div>
      </div>
  </div>
</div>

<script>
      $(document).ready(function() {
          var position_id;
          var position_name;

          //$('#delete_button').click(function() {
          //     $('#subject_name').text($('#lastname').val());
          //});

          $(".delete_button").click(function(){
              position_id = $(this).prev().val();
              position_name = $(this).prev().prev().val();

              $('#position_name').text(position_name);
              $("#confirm_delete").modal("show");
              //alert(subject_id);
          });


          $("#position_delete_ok").click(function(){
              //alert(subject_id);
              $("form[class=position_delete" + position_id +"]").submit();
          });

          //alert("ready");
          //$("form").submit(function () {
          // Check if radio button is not selected
          //    alert("test");
          //    //$("#confirm_delete").modal("show");
          //	return false;
          //});
          
      });

  </script>
  


