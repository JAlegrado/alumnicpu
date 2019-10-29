<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <h3>Nominees</h3>
  <table class="table">
    <thead class="table-active">
      <tr>
      <th>No.</th>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Year Graduated</th>
        <th>Position</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
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
            <form action='index.php?page=delete_nominee' method='post'>
            <input type='hidden' name='nominee_id' value=". $row['nominee_id'] .">					
            <button type='submit' class='btn btn-sm btn-warning' name='nominee_select'>
            <span class='glyphicon glyphicon-trash' ></span> 
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
<div class="col-lg-6">
  <h3>Pending Nominees</h3>

  <table class="table">
    <thead class="table-active">
      <tr>
      <th>No.</th>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Year Graduated</th>
        <th>Position</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>

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
						         <input type='hidden' name='nominee_id' value=". $row['nominee_id'] .">					
						         <button type='submit' class='btn btn-sm btn-warning' name='nominee_select'>
									<span class='glyphicon glyphicon-ok' ></span> 
								</button>
								</form>
						      </td>";		
                              echo "<td>
                              <form action='index.php?page=decline' method='post'>
                               <input type='hidden' name='nominee_id' value=". $row['nominee_id'] .">					
                               <button type='submit' class='btn btn-sm btn-warning' name='nominee_select'>
                                  <span class='glyphicon glyphicon-trash' ></span> 
                                 
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
</div>
