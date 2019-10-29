<div class="container-fluid ">
    <div class="row">
    	<div class="col-lg-5">
    		<fieldset>
    			<form enctype="multipart/form-data" action="index.php?page=add_news" name="form" method="post">
        			<div class="form-group col-lg-8">
						<label>News Title:</label>
               			 	<input class="form-control text-center" placeholder="News Title" name="news_title" type="text" autofocus>
		    		</div>                         
        			<div class="form-group col-lg-8">
						<label>Date:</label>
							<input class="form-control text-center" name="news_date" type="date" autofocus>
					</div>
        			<div class="form-group col-lg-8">
						<label>Article:</label><br>
               				 <textarea rows="4" cols="40" name="article"></textarea>
            		</div>
       				<div class="form-group col-lg-8">
           				<label>	Upload a Photo:</label>
							<input type="file" name="photo" id="photo" />
	   				</div>
<div class="col-lg-6">
					<input type="Submit" class="btn btn-warning" name="register" value="Submit">
				</div>
        		</form>    
			</fieldset>
			</div>

<!--table-->
<div class="col-lg-6">

<table class="table table-hover">
<thead>
	<tr class="table-active">
		
		<th class="text-center">News Title</th>
		<th class="text-center">News Date</th>
		<th class="text-center">Article</th>
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
			
				echo "<td class='text-center'>". $Mymessage->news_title ."</td>";
				echo "<td class='text-center'>". $Mymessage->news_date ."</td>";
				echo "<td class='text-center'>". $Mymessage->article ."</td>";
				echo "<td>
                      <form action='index.php?page=news_edit' method='post'>
					   <input type='hidden' name='name_title' value='".$Mymessage->news_title ."'>
					   <input type='hidden' name='news_date' value='".$Mymessage->news_date ."'>
					   <input type='hidden' name='news_article' value='".$Mymessage->article ."'>
					   
                       <button type='submit' class='btn btn-sm btn-warning' name='news_edit'>
                          <span class='glyphicon glyphicon glyphicon-edit' ></span> 
            
                      </button>
                      </form>
                    </td>";	

                      echo "<td>
                               <form  class='news_delete".  $Mymessage->news_id  ."'  action='index.php?page=news_delete' method='post'>
							   <input type='hidden' name='news_name' value='".  $Mymessage->news_title ."'>
							  
                               <input type='hidden' name='news_id' value=". $Mymessage->news_id .">
                               <button type='button'  name='delete_button". $Mymessage->news_id ."' class='btn btn-sm btn-warning delete_button'>
                                  <span class='glyphicon glyphicon glyphicon-trash' ></span> 
                                  
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