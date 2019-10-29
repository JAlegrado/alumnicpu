  
<div class="container">
	

    <h2>Course</h2>
    <p></p>            
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Course Name</th>
          <th class="fit"><a href="index.php?page=create_course" class="btn btn-sm btn-primary container"><span class="glyphicon glyphicon-plus" ></span> Add Course</a></th>
          <th class="fit"></th>
        </tr>
      </thead>
      <tbody>
       <?php 	
          foreach($course as $title=>$getcourse)
          {
              
                  echo "<tr>";
                      
                      echo "<td class='container'>". $getcourse->course_title. "</td>";	
                      echo "<td>
                      <form action='index.php?page=course_edit' method='post'>
                       <input type='hidden' name='course_id' value=".  $getcourse->course_id .">
                       <input type='hidden' name='course_name' value='". $getcourse->course_title ."'>
                       <button type='submit' class='btn btn-sm btn-info container-fluid' name='course_edit'>
                          <span class='glyphicon glyphicon glyphicon-edit' ></span> 
                          Edit
                      </button>
                      </form>
                    </td>";	
                      echo "<td>
                               <form  class='course_delete".  $getcourse->course_id ."'  action='index.php?page=course_delete' method='post'>
                               <input type='hidden' name='course_name' value='".  $getcourse->course_title ."'>
                               <input type='hidden' name='course_id' value=". $getcourse->course_id .">
                               <button type='button'  name='delete_button". $getcourse->course_id ."' class='btn btn-sm btn-info container  delete_button'>
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
              <label id="course_name"> </label>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              <a href="#" id="course_delete_ok" class="btn btn-success success">Yes</a>
          </div>
      </div>
  </div>
</div>

<script>
      $(document).ready(function() {
          var course_id;
          var course_name;

          //$('#delete_button').click(function() {
          //     $('#subject_name').text($('#lastname').val());
          //});

          $(".delete_button").click(function(){
              course_id = $(this).prev().val();
              course_name = $(this).prev().prev().val();

              $('#course_name').text(course_name);
              $("#confirm_delete").modal("show");
              //alert(subject_id);
          });


          $("#course_delete_ok").click(function(){
              //alert(subject_id);
              $("form[class=course_delete" + course_id +"]").submit();
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