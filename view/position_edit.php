<div class="container-fluid">
<fieldset >
<form role="form"  method="post" action="index.php?page=position_update">
  <div class="row">
	<div class="col-lg-6">
				<label>	Position: </label>
						<?php 
							echo "<input class='form-control' placeholder='Position id' name='position_id' type='hidden' value='". $position_id ."' autofocus>";
							echo "<input class='form-control text-center' placeholder='Position Name' name='position_name' type='text' value='". $position_name ."' autofocus>";
						?>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
				<label>	Max Vote: </label>								
                                        <?php
                                            echo "<select  class='form-control choice_type' name='max_vote'>
                                        
                                                <option value='".$max_vote."'>$max_vote</option> 
												<option value='1'>1</option>
												<option value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option value='4'>4</option>
												<option value='5'>5</option>
                                                <option value='6'>6</option>
                                                <option value='7'>7</option>
												<option value='8'>8</option>
                                                <option value='9'>9</option>
                                                <option value='10'>10</option>
						     				</select>";?>
										</div>
									</div>

								
									<div class="row">
	<div class="col-lg-6">
				
									<input type="submit" class="btn btn-sm btn-warning"  value="Update Position">
								</div>
								
							</div>

								
								
							</fieldset>
						
					
					</form>
			
    </div>
    
