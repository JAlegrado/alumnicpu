  
<div class="container">
	

    <h2>Year Graduated</h2>
    <p></p>            
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Year</th>
          <th class="fit"><a href="index.php?page=create_yeargraduated" class="btn btn-sm btn-primary container"><span class="glyphicon glyphicon-plus" ></span> Add Year Graduated</a></th>
          <th class="fit"></th>
        </tr>
      </thead>
      <tbody>
       <?php 	
          foreach($yeargraduated as $title=>$getyeargraduated)
          {
              
                  echo "<tr>";
                      
                      echo "<td class='container'>". $getyeargraduated->year_graduated. "</td>";	
                      echo "<td>
                      <form action='index.php?page=year_edit' method='post'>
                       <input type='hidden' name='year_id' value=".  $getyeargraduated->year_id .">
                       <input type='hidden' name='year_name' value='". $getyeargraduated->year_graduated ."'>
                       <button type='submit' class='btn btn-sm btn-info container-fluid' name='year_edit'>
                          <span class='glyphicon glyphicon glyphicon-edit' ></span> 
                          Edit
                      </button>
                      </form>
                    </td>";	
                      echo "<td>
                               <form  class='year_delete".  $getyeargraduated->year_id ."'  action='index.php?page=year_delete' method='post'>
                               <input type='hidden' name='year_name' value='".  $getyeargraduated->year_graduated ."'>
                               <input type='hidden' name='year_id' value=". $getyeargraduated->year_id .">
                               <button type='button'  name='delete_button". $getyeargraduated->year_id ."' class='btn btn-sm btn-info container-fluid  delete_button'>
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
              <label id="year_name"> </label>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              <a href="#" id="year_delete_ok" class="btn btn-success success">Yes</a>
          </div>
      </div>
  </div>
</div>

<script>
      $(document).ready(function() {
          var year_id;
          var year_name;

          //$('#delete_button').click(function() {
          //     $('#subject_name').text($('#lastname').val());
          //});

          $(".delete_button").click(function(){
              year_id = $(this).prev().val();
              year_name = $(this).prev().prev().val();

              $('#year_name').text(year_name);
              $("#confirm_delete").modal("show");
              //alert(subject_id);
          });


          $("#year_delete_ok").click(function(){
              //alert(subject_id);
              $("form[class=year_delete" + year_id +"]").submit();
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