<div class="container">
  <h2 class="bg-primary text-center text-white">Nominees</h2>
  
  <table class="table">
    <thead class="thead-dark">
      <tr>
      <th>No.</th>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Year Graduated</th>
        <th>Position</th>
      </tr>
    </thead>
    <tbody class="table-primary">
    <?php
mysql_select_db('cpuaai',mysql_connect('localhost','root',''))or die(mysql_error());
$sql = mysql_query("select * from nominee where status='Approve'  Order by nominee_id ASC")  or die('Error in query : $sql. ' .mysql_error());

if (mysql_num_rows($sql) > 0) 
{            
   $i = 1;
  while ($row = mysql_fetch_array($sql)) {
    echo '<tr>';
    echo '<td class="text-center tety">' . $i . '</td>';
    echo '<td class="text-center">' . $row['firstname'] . '</td>';
    echo '<td class="text-center">' . $row['middlename'] . '</td>';
		echo '<td class="text-center">' . $row['lastname'] . '</td>';
    echo '<td class="text-center">' . $row['yeargraduated'] . '</td>';
    echo '<td class="text-center">' . $row['position'] . '</td>';
    echo "<td>
						<form action='index.php?page=edit_nominee' method='post'>
						<input type='hidden' name='nominee_id' value=". $row['nominee_id'] .">					
						<button type='submit' class='btn btn-sm btn-info' name='nominee_select'>
					  <span class='glyphicon glyphicon glyphicon-edit' ></span> 
						Edit
						</button>
						</form>
						</td>";		
    echo "<td>
            <form action='index.php?page=delete_nominee' method='post'>
            <input type='hidden' name='nominee_id' value=". $row['nominee_id'] .">					
            <button type='submit' class='btn btn-sm btn-info' name='nominee_select'>
            <span class='glyphicon glyphicon glyphicon-edit' ></span> 
            Delete
            </button>
            </form>
          </td>";		


    echo '<tr>';
    $i++;
				
 }
}


?>
    </tbody>
  </table>

  <h2 class="bg-primary text-center text-white">Pending Nominees</h2>

  <table class="table text-xl-center">
    <thead class="thead-dark">
      <tr>
      <th>No.</th>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Year Graduated</th>
        <th>Position</th>
        <th colspan="2">Status</th>
      </tr>
    </thead>
    <tbody class="table-hover table-primary justify-content-center">

    <?php

$sql = mysql_query("select * from nominee where status='Pending'  Order by nominee_id ASC")  or die('Error in query : $sql. ' .mysql_error());

if (mysql_num_rows($sql) > 0) 
{            
   $i = 1;
 while ($row = mysql_fetch_array($sql)) {
                // Print out the contents of the entry 
                echo '<tr>';
                echo '<td class="text-center">' . $i . '</td>';
                echo '<td class="text-center">' . $row['firstname'] . '</td>';
                echo '<td class="text-center">' . $row['middlename'] . '</td>';
				echo '<td class="text-center">' . $row['lastname'] . '</td>';
                echo '<td class="text-center">' . $row['yeargraduated'] . '</td>';
                echo '<td class="text-center">' . $row['position'] . '</td>';
                echo "<td>
						        <form action='index.php?page=approve' method='post'>
						         <input type='hidden' name='nominee_id' value=". $row['id'] .">					
						         <button type='submit' class='btn btn-sm btn-info' name='nominee_select'>
									<span class='glyphicon glyphicon glyphicon-edit' ></span> 
									Approved
								</button>
								</form>
						      </td>";		
                              echo "<td>
                              <form action='index.php?page=decline' method='post'>
                               <input type='hidden' name='nominee_id' value=". $row['id'] .">					
                               <button type='submit' class='btn btn-sm btn-info' name='nominee_select'>
                                  <span class='glyphicon glyphicon glyphicon-edit' ></span> 
                                  Decline
                              </button>
                              </form>
                            </td>";		


                echo '<tr>';
                $i++;
				
 }
}


?>


     
    </tbody>
  </table>
</div>
