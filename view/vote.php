
<?php
  if(isset($_REQUEST['president_id'])){
    if(isset($_REQUEST['president'])){
      echo $_REQUEST['president_id'] . '  '  . $_REQUEST['president'];
    }
  }

?>


<form action="" method="POST">
<div class="container-fluid">
<div class="row bg-primary">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <table class="table table-hover table-responsive">
    <thead class="thead-dark table-responsive-sm bg-primary">
    <tr>
      <th>Firstname</th>
      <th>Firstname</th>
      <th>Middlename</th>
        <th>Lastname</th>
        <th>Year Graduated</th>
      </tr>
    </thead>
<tbody class="table-primary table-responsive-sm">

<?php

mysql_select_db('cpuaai',mysql_connect('localhost','root',''))or die(mysql_error());
$sql = mysql_query("select * from nominee where status='Approve' && position='President' Order by nominee_id ASC")  or die('Error in query : $sql. ' .mysql_error());
if (mysql_num_rows($sql) > 0) 
{
$i = 1;
while ($row = mysql_fetch_array($sql)) {
    echo '<tr>';
    echo '<td class="text-center">
   
    <input type="checkbox" name="president">
    <input type="hidden" name="president_id" value='.$row['nominee_id'].'>
    </td>';
    echo '<td class="text-center">' . $row['firstname'] . '</td>';
    echo '<td class="text-center">' . $row['middlename'] . '</td>';
	echo '<td class="text-center">' . $row['lastname'] . '</td>';
    echo '<td class="text-center">' . $row['yeargraduated'] . '</td>';
    echo '<tr>';
    $i++;
 }
}
?>
</tbody>
</table>

<div class="bg-primary">
        <span class="input-group-addon">
	    <i class="glyphicon glyphicon-user"><h2 class="text-center text-light">President</h2></i>
	    </span>
    </div>



<table class="table table-hover table-responsive">
    <thead class="thead-dark table-responsive-sm bg-primary">
    

      <tr>
        <th></th>
        <th class="text-center">Firstname</th>
        <th class="text-center">Middlename</th>
        <th class="text-center">Lastname</th>
        <th class="text-center">Year Graduated</th>
      
      </tr>
    </thead>
<tbody class="table-primary table-responsive-sm">
<?php
mysql_select_db('cpuaai',mysql_connect('localhost','root',''))or die(mysql_error());
$sql = mysql_query("select * from nominee where status='Approve' && position='Vice President' Order by nominee_id ASC")  or die('Error in query : $sql. ' .mysql_error());
if (mysql_num_rows($sql) > 0) 
{            
$i = 1;
while ($row = mysql_fetch_array($sql)) {
    echo '<tr>';
    echo '<td class="text-center">
   
    <input type="checkbox" name="vice_president">
    <input type="hidden" name="vice_president_id" value='.$row['nominee_id'].'>
    </td>';
    echo '<td class="text-center">' . $row['firstname'] . '</td>';
    echo '<td class="text-center">' . $row['middlename'] . '</td>';
	echo '<td class="text-center">' . $row['lastname'] . '</td>';
    echo '<td class="text-center">' . $row['yeargraduated'] . '</td>';
   
    echo '<tr>';
    $i++;
 }
}
?>
</tbody>
</table>

<div class="bg-primary">
        <span class="input-group-addon">
	    <i class="glyphicon glyphicon-user"><h2 class="text-center text-light">Vice President</h2></i>
	    </span>
    </div>

<table class="table table-hover table-responsive">
    <thead class="thead-dark table-responsive-sm bg-primary">
   
      <tr>
        <th></th>
        <th class="text-center">Firstname</th>
        <th class="text-center">Middlename</th>
        <th class="text-center">Lastname</th>
        <th class="text-center">Year Graduated</th>
      </tr>
    </thead>
<tbody class="table-primary table-responsive-sm">
<?php
mysql_select_db('cpuaai',mysql_connect('localhost','root',''))or die(mysql_error());
$sql = mysql_query("select * from nominee where status='Approve' && position='Corporate Secretary' Order by nominee_id ASC")  or die('Error in query : $sql. ' .mysql_error());
if (mysql_num_rows($sql) > 0) 
{            
$i = 1;
while ($row = mysql_fetch_array($sql)) {
    echo '<tr>';
    echo '<td class="text-center">
   
    <input type="checkbox" name="secretay">
    <input type="hidden" name="secretary_id" value='.$row['nominee_id'].'>
    </td>';
    echo '<td class="text-center">' . $row['firstname'] . '</td>';
    echo '<td class="text-center">' . $row['middlename'] . '</td>';
	echo '<td class="text-center">' . $row['lastname'] . '</td>';
    echo '<td class="text-center">' . $row['yeargraduated'] . '</td>';
    echo '<tr>';
    $i++;
 }
}
?>
</tbody>
</table>
<div class="bg-primary">
        <span class="input-group-addon">
	    <i class="glyphicon glyphicon-user"><h2 class="text-center text-light">Corporate Secretary</h2></i>
	    </span>
    </div>


<table class="table table-hover table-responsive">
    <thead class="thead-dark table-responsive-sm bg-primary">
   

      <tr>
        <th></th>
        <th class="text-center">Firstname</th>
        <th class="text-center">Middlename</th>
        <th class="text-center">Lastname</th>
        <th class="text-center">Year Graduated</th>
        
      </tr>
    </thead>
<tbody class="table-primary table-responsive-sm">
<?php
mysql_select_db('cpuaai',mysql_connect('localhost','root',''))or die(mysql_error());
$sql = mysql_query("select * from nominee where status='Approve' && position='Corporate Treasurer' Order by nominee_id ASC")  or die('Error in query : $sql. ' .mysql_error());
if (mysql_num_rows($sql) > 0) 
{            
$i = 1;
while ($row = mysql_fetch_array($sql)) {
    echo '<tr>';
    echo '<td class="text-center">
   
    <input type="checkbox" name="treasurer">
    <input type="hidden" name="treasurer_id" value='.$row['nominee_id'].'>
    </td>';
    echo '<td class="text-center">' . $row['firstname'] . '</td>';
    echo '<td class="text-center">' . $row['middlename'] . '</td>';
	echo '<td class="text-center">' . $row['lastname'] . '</td>';
    echo '<td class="text-center">' . $row['yeargraduated'] . '</td>';
   
    echo '<tr>';
    $i++;
 }
}
?>
</tbody>
</table>


<div class="bg-primary">
        <span class="input-group-addon">
	    <i class="glyphicon glyphicon-user"><h2 class="text-center text-light">Corporate Treasurer</h2></i>
	    </span>
    </div>

<table class="table table-hover table-responsive">
    <thead class="thead-dark table-responsive-sm bg-primary">
    
      <tr>
        <th></th>
        <th class="text-center">Firstname</th>
        <th class="text-center">Middlename</th>
        <th class="text-center">Lastname</th>
        <th class="text-center">Year Graduated</th>
        
      </tr>
    </thead>
<tbody class="table-primary table-responsive-sm">
<?php
mysql_select_db('cpuaai',mysql_connect('localhost','root',''))or die(mysql_error());
$sql = mysql_query("select * from nominee where status='Approve' && position='Corporate Auditor' Order by nominee_id ASC")  or die('Error in query : $sql. ' .mysql_error());
if (mysql_num_rows($sql) > 0) 
{            
$i = 1;
while ($row = mysql_fetch_array($sql)) {
    echo '<tr>';
    echo '<td class="text-center">
   
    <input type="checkbox" name="auditor">
    <input type="hidden" name="auditor_id" value='.$row['nominee_id'].'>
    </td>';
    echo '<td class="text-center">' . $row['firstname'] . '</td>';
    echo '<td class="text-center">' . $row['middlename'] . '</td>';
	echo '<td class="text-center">' . $row['lastname'] . '</td>';
    echo '<td class="text-center">' . $row['yeargraduated'] . '</td>';
 
    echo '<tr>';
    $i++;
 }
}
?>
</tbody>
</table>
<div class="bg-primary">
        <span class="input-group-addon">
	    <i class="glyphicon glyphicon-user"><h2 class="text-center text-light">Corporate Auditor</h2></i>
	    </span>
    </div>

<table class="table table-hover table-responsive">
    <thead class="thead-dark table-responsive-sm bg-primary">
    
   
      <tr>
        <th></th>
        <th class="text-center">Firstname</th>
        <th class="text-center">Middlename</th>
        <th class="text-center">Lastname</th>
        <th class="text-center">Year Graduated</th>
      
      </tr>
    </thead>
<tbody class="table-primary table-responsive-sm">
<?php
mysql_select_db('cpuaai',mysql_connect('localhost','root',''))or die(mysql_error());
$sql = mysql_query("select * from nominee where status='Approve' && position='Regional Trustees' Order by nominee_id ASC")  or die('Error in query : $sql. ' .mysql_error());
if (mysql_num_rows($sql) > 0) 
{            
$i = 1;
while ($row = mysql_fetch_array($sql)) {
    echo '<tr>';
    echo '<td class="text-center">
   
    <input type="checkbox" name="trustees">
    <input type="hidden" name="trustees_id" value='.$row['nominee_id'].'>
    </td>';
    echo '<td class="text-center">' . $row['firstname'] . '</td>';
    echo '<td class="text-center">' . $row['middlename'] . '</td>';
  	echo '<td class="text-center">' . $row['lastname'] . '</td>';
    echo '<td class="text-center">' . $row['yeargraduated'] . '</td>';
   
    echo '<tr>';
    $i++;
 }
}
?>
</tbody>
</table>
<div class="bg-primary">
    <span class="input-group-addon">
	<i class="glyphicon glyphicon-user"><h2 class="text-center text-light"> Regional Trustees</h2></i>
	</span>
</div>

</div>
</div>

<button type="submit">Submit</button>


</form>

</div>