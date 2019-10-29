  
<div class="container">
	

    <h2>College</h2>
    <p></p>            
    <table class="table table-hover">
      <thead>
        <tr>
          <th>College Name</th>
          <th class="fit"><a href="index.php?page=create_college" class="btn btn-sm btn-primary container"><span class="glyphicon glyphicon-plus" ></span> Add College</a></th>
          <th class="fit"></th>
        </tr>
      </thead>
      <tbody>
       <?php 	
          foreach($college as $title=>$getcollege)
          {
              
                  echo "<tr>";
                      
                      echo "<td class='container'>". $getcollege->college10 . "</td>";	

                      echo "<td>
                      <form action='index.php?page=college_edit' method='post'>
                       <input type='hidden' name='college_id' value=".   $getcollege->college_id  .">
                       <input type='hidden' name='college_name' value='". $getcollege->college10 ."'>
                       <button type='submit' class='btn btn-sm btn-info container-fluid' name='college_edit'>
                          <span class='glyphicon glyphicon glyphicon-edit' ></span> 
                          Edit
                      </button>
                      </form>
                    </td>";	

                      echo "<td>
                               <form  class='college_delete".  $getcollege->college_id ."'  action='index.php?page=college_delete' method='post'>
                               <input type='hidden' name='college_name' value='".  $getcollege->college10 ."'>
                               <input type='hidden' name='college_id' value=". $getcollege->college_id .">
                               <button type='button'  name='delete_button". $getcollege->college_id ."' class='btn btn-sm btn-info container  delete_button'>
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
              <label id="college_name"> </label>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              <a href="#" id="college_delete_ok" class="btn btn-success success">Yes</a>
          </div>
      </div>
  </div>
</div>

<script>
      $(document).ready(function() {
          var college_id;
          var college_name;

          //$('#delete_button').click(function() {
          //     $('#subject_name').text($('#lastname').val());
          //});

          $(".delete_button").click(function(){
              college_id = $(this).prev().val();
              college_name = $(this).prev().prev().val();

              $('#college_name').text(college_name);
              $("#confirm_delete").modal("show");
              //alert(subject_id);
          });


          $("#college_delete_ok").click(function(){
              //alert(subject_id);
              $("form[class=college_delete" + college_id +"]").submit();
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