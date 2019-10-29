


<div class="container-fluid mt-0 mb-2">
    <div class="row">
    
    <div class="col-sm-4  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">
    <fieldset >
    <form enctype="multipart/form-data" action="index.php?page=news_update" name="form" method="post">

        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
				<i class="glyphicon glyphicon-user"></i>
				News Title:
				</span> 
            </div>
                                    
			<div>
			<?php 
				echo "<input class='form-control' placeholder='News id' name='news_id' type='hidden' value='". $news_id ."' autofocus>";
				echo "<input class='form-control text-center' placeholder='News Name' name='news_name' type='text' value='". $news_name ."' autofocus>";
            ?>
            </div>
        </div>
                                
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
				<i class="glyphicon glyphicon-user"></i>
				Date:
				</span> 
			</div>
		    <div>
            <?php
                echo "<input class='form-control text-center' name='news_date' type='date' value='". $news_date ."' autofocus>";
            ?>
			</div>
		</div>


        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
				<i class="glyphicon glyphicon-user">Article:</i>
				</span> 
                <?php
                echo "<textarea rows='4' cols='40' name='article'>$article</textarea>";
                ?>
            </div>
		</div>

        <div class="form-group">
            
            <span class="input-group-addon">
				<i class="glyphicon glyphicon-user">Upload Photo:</i>
				</span> 
			<input type="file" name="photo" id="photo" />
	        <!--<input type="submit" name="submit" value="Upload Files">-->
	    </div>

        <div class="form-group">
			<input type="hidden" class="btn btn-lg btn-primary btn-block" name="register" value=1>
        </div>
                                
		<div class="form-group">
			<input type="submit" class="btn btn-lg btn-primary btn-block text-center bg-transparent" style="border:30px solid;border-color:black;" value="Update News">
		</div>
        </form>    
		</fieldset>
    </div>


<div class="col-sm-8  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">

<table class="table table-hover">
<thead>
	<tr class="bg-info text-light">
		
		<th class="text-center">News Title</th>
		<th class="text-center">News Date</th>
		<th class="text-center">Article</th>
	
	
		<th class="fit"><a href="index.php?page=add_news" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-plus" ></span> Add News</a></th>
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
			
				echo "<td class='text-center text-center  text-light'>". $Mymessage->news_title ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->news_date ."</td>";
				echo "<td class='text-center text-center  text-light'>". $Mymessage->article ."</td>";
				echo "<td>
                      <form action='index.php?page=news_edit' method='post'>
                       <input type='hidden' name='news_id' value=".   $Mymessage->news_id  .">
					   <input type='hidden' name='name_title' value='".$Mymessage->news_title ."'>
					   <input type='hidden' name='news_date' value='".$Mymessage->news_date ."'>
					   <input type='hidden' name='news_article' value='".$Mymessage->article ."'>
					   
                       <button type='submit' class='btn btn-sm btn-info container-fluid' name='news_edit'>
                          <span class='glyphicon glyphicon glyphicon-edit' ></span> 
                          Edit
                      </button>
                      </form>
                    </td>";	

                      echo "<td>
                               <form  class='news_delete".  $Mymessage->news_id  ."'  action='index.php?page=news_delete' method='post'>
							   <input type='hidden' name='news_name' value='".  $Mymessage->news_title ."'>
							  
                               <input type='hidden' name='news_id' value=". $Mymessage->news_id .">
                               <button type='button'  name='delete_button". $Mymessage->news_id ."' class='btn btn-sm btn-info container  delete_button'>
                                  <span class='glyphicon glyphicon glyphicon-minus' >Delete</span> 
                                  
                              </button>
                              </form>
                            </td>";		

				echo "<td class='text-center text-center  text-light'> </td>";		
				echo "</tr>";
			}
	?>	
</tbody>
</table>

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
              <label id="news_name"> </label>
			  
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              <a href="#" id="news_delete_ok" class="btn btn-success success">Yes</a>
          </div>
      </div>
  </div>
</div>

<script>
      $(document).ready(function() {
          var news_id;
          var news_name;
		
          //$('#delete_button').click(function() {
          //     $('#subject_name').text($('#lastname').val());
          //});

          $(".delete_button").click(function(){
              news_id = $(this).prev().val();
              news_name = $(this).prev().prev().val();
			

              $('#news_name').text(news_name);
		
              $("#confirm_delete").modal("show");
              //alert(subject_id);
          });


          $("#news_delete_ok").click(function(){
              //alert(subject_id);
              $("form[class=news_delete" + news_id +"]").submit();
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
</body>
</html>