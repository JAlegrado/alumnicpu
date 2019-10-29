<html>
<head>
<style>
p{text-indent:60px;
   	font-size:20px;
}
.textboxclass {
height: 50px;
width: 270px;
color:black;
}

.text-center {
    text-align: center !important;
}



td{
	background-color:skyblue;
	color:black;
	font-size:20px;
}
</style>
      
	  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
 <script src="js/jquery.js" type="text/javascript"></script>
</head>
<?php
mysql_select_db('cpuaai',mysql_connect('localhost','root',''))or die(mysql_error());
?>

<body>
	
 <script type="text/javascript">
        $(function() {
            $("#term").focus();
        });
    </script> 
 <br> 
<div class="alert alert-info"><center> <h3>Search Nominee</h3></center> </div>
<br>
       <form method="post" action="" name="form1" id="form1">   
   <p>
     Type the Name of Nominee</p>
	 <br><br>
	 <p>Search<input type="text" name="term" id="term" class="textboxclass" /> <input type="submit" <button type="button" button class="btn btn-primary" name="submit" value="Go"     title="Click here to search meaning in the database.">
</button>  
  
</p> 



</p>
    </form>

	<div class="container">
    <div class="alert alert-success"><center> <h4>Search Results </h4></center> </div>
<br />

<table  class="table table-striped table-bordered" border="1">
    <thead>
		<tr>
            <th class="text-center">Record No.</th>
            <th class="text-center">Firstname</th>
			<th class="text-center">Middlename</th>
			<th class="text-center">Lastname</th>
			<th class="text-center">Batch / Year Graduated</th>
			<th class="text-center">Course</th>
			<th class="text-center">College</th>
			<th class="text-center"></th>
        </tr>
    </thead>
<tbody>


<?php
error_reporting(0);
if ($_REQUEST['submit']) {
$term = $_POST['term'];
$XX = "<br><br><h2> <center> No Record Found, Search Again Please </center> </h2>";  
$sql = mysql_query("select * from users where firstname like '%$term%' or lastname like '%$term%'  Order by user_id ASC")  or die('Error in query : $sql. ' .mysql_error());


}

if (empty($term)) {
	
	 header( "refresh:2; url=index.php" ); 
}else if (mysql_num_rows($sql) > 0) 
{            
   $i = 1;
 while ($row = mysql_fetch_array($sql)) {
                // Print out the contents of the entry 
                echo '<tr>';
                echo '<td class="text-center tety">' . $i . '</td>';
                echo '<td class="text-center">' . $row['firstname'] . '</td>';
                echo '<td class="text-center">' . $row['middlename'] . '</td>';
				echo '<td class="text-center">' . $row['lastname'] . '</td>';
				echo '<td class="text-center">' . $row['yeargraduated'] . '</td>';
				echo '<td class="text-center">' . $row['course'] . '</td>';
				echo '<td class="text-center">' . $row['college'] . '</td>';
	
				echo "<td>
						        <form action='index.php?page=select_nominee' method='post'>
						         <input type='hidden' name='nominee_id' value=". $row['user_id'] .">					
						         <button type='submit' class='btn btn-sm btn-info' name='nominee_select'>
									<span class='glyphicon glyphicon glyphicon-edit' ></span> 
									Select
								</button>
								</form>
						      </td>";				
				

                $i++;
				
 }
}
else 
{
echo '<script language="javascript">';
echo 'alert("Sorry No Record Found in the Database.")';
echo '</script>';
}


?>


</tbody>
</table>