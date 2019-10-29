  
<div class="container">
	

    <h2>Country</h2>
    <p></p>            
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Country Name</th>
          
          <th class="fit">
            <a href="index.php?page=create_country" class="btn btn-sm btn-info container-fluid">
            <span class="glyphicon glyphicon-plus " ></span> Add Country</a>
          </th>
          <th class="fit"></th>
        </tr>
      </thead>
      <tbody>
       <?php 	
          foreach($country as $title=>$getcountry)
          {
              
                  echo "<tr>";
                      
                      echo "<td class='container'>". $getcountry->country . "</td>";	

                      echo "<td>
									<form action='index.php?page=country_edit' method='post'>
							         <input type='hidden' name='country_id' value=".  $getcountry->country_id .">
							         <input type='hidden' name='country_name' value='". $getcountry->country ."'>
							         <button type='submit' class='btn btn-sm btn-info container-fluid' name='country_edit'>
										<span class='glyphicon glyphicon glyphicon-edit' ></span> 
										Edit
									</button>
									</form>
							      </td>";	

                      echo "<td>
                               <form  class='country_delete".  $getcountry->country_id ."'  action='index.php?page=country_delete' method='post'>
                               <input type='hidden' name='country_name' value='".  $getcountry->country ."'>
                               <input type='hidden' name='country_id' value=". $getcountry->country_id .">
                               <button type='button'  name='delete_button". $getcountry->country_id ."' class=' container-fluid btn btn-sm btn-info  delete_button'>
                                  <span class='glyphicon glyphicon glyphicon-minus' >Delete</span> 
                                  
                              </button>
                              </form>
                            </td>";				
                  echo "</tr>";
          }
      ?>	
      </tbody>
    </table>	



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
              <label id="country_name"> </label>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              <a href="#" id="country_delete_ok" class="btn btn-success success">Yes</a>
          </div>
      </div>
  </div>
</div>

<script>
      $(document).ready(function() {
          var country_id;
          var country_name;

          //$('#delete_button').click(function() {
          //     $('#subject_name').text($('#lastname').val());
          //});

          $(".delete_button").click(function(){
              country_id = $(this).prev().val();
              country_name = $(this).prev().prev().val();

              $('#country_name').text(country_name);
              $("#confirm_delete").modal("show");
              //alert(subject_id);
          });


          $("#country_delete_ok").click(function(){
              //alert(subject_id);
              $("form[class=country_delete" + country_id +"]").submit();
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