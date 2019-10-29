
<div class="container-fluid bg-info">
<div class="row">
<div class="col-sm-4">

			


</div>
<div class="col-sm-3">





<form action="index.php?page=view_user" method="post">
			<span class="input-group-addon text-light">Search firstname,lastname</span> 
			<input class="form-control text-center bg-dark text-light" placeholder="Type Firstname or Lastname" name="searchlastfirst" type="text" autofocus>
			
<button type="submit" name="searchfirst_last" class="ml-5"><span class="glyphicon glyphicon-book ml-5 mr-5"> Search</span></button>  
</form>
</div>
</div>
	  	  	
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
<div class="container">

  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 

  	<div class="collapse navbar-collapse" id="navbarSupportedContent">

	  
	  
			
    	<ul class="navbar-nav dropdown-menu-right">
		<li class="nav-item dropdown bg-primary active">  
	  		<a class="dropdown-toggle text-light" data-toggle="dropdown" href="#">Year Graduated<span class="caret"></span></a>
    		<ul class="dropdown-menu pre-scrollable">
				<?php
					$result1 = $this->model->getyeargraduated();
    				foreach($result1 as $title=>$getyeargraduated){
					echo  "<form action='index.php?page=view_user' method='post'>
					<li>
					<input type='hidden' name='year_graduated' value=". $getyeargraduated->year_graduated .">
					<button type='submit' name='year_graduated1'><span class='glyphicon glyphicon-book' ></span> ". $getyeargraduated->year_graduated ."</button>  
					</li></form>";
					} 
				?>			
			</ul>
		</li>
   		</ul>
		  

		<ul class="navbar-nav dropdown-menu-right ml-5">
		<li class="nav-item dropdown bg-primary active">  
	  		<a class="dropdown-toggle text-light" data-toggle="dropdown" href="#">Course<span class="caret"></span></a>
    		<ul class="dropdown-menu pre-scrollable">
				<?php
				
					$result5 = $this->model->getcourse();
    				foreach($result5 as $title=>$getcourse){
					echo  "<form action='index.php?page=view_user' method='post'>
					<li>
					<input type='hidden' name='course_title' value=". $getcourse->course_title .">
					<button type='submit' name='course_title1'><span class='glyphicon glyphicon-book' ></span> ". $getcourse->course_title ."</button>  
					</li></form>";
					} 
				?>			
			</ul>
		</li>
   		</ul>			

		   <ul class="navbar-nav dropdown-menu-right ml-5">
		<li class="nav-item dropdown bg-primary active">  
	  		<a class="dropdown-toggle text-light" data-toggle="dropdown" href="#">College<span class="caret"></span></a>
    		<ul class="dropdown-menu pre-scrollable">
				<?php
				
					$result10 = $this->model->get_college();
    				foreach($result10 as $title=>$getcourse){
					echo  "<form action='index.php?page=view_user' method='post'>
					<li>
				
					<button type='submit' name='college10' value='$getcourse->college10'><span class='glyphicon glyphicon-book' ></span> ". $getcourse->college10 ."</button>  
					</li></form>";
					} 
				?>			
			</ul>
		</li>
   		</ul>			




	</div>
</div>
</nav>


























<div class="container-fluid">

<table class="table table-hover">
	<thead>
		<tr class="bg-info text-light">
			
			<th class="text-center">Firstname</th>
			<th class="text-center">Middlename</th>
			<th class="text-center">Lastname</th>	
			<th class="text-center">Address</th>
			<th class="text-center">Year Graduated</th>
			<th class="text-center">Course</th>
			<th class="text-center">College</th>
			<th class="text-center">Sex</th>				
			<th class="text-center">Email</th>
			<th class="text-center">Contact</th>
			<th class="text-center">Social Media</th>	
		    <!--<th class="fit"><a href="index.php?page=accounts_entry" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-plus" ></span> Add</a></th>-->
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
				
					echo "<td class='text-center text-center text-light'>". $Mymessage->firstname ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->middlename ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->lastname ."</td>";		
					echo "<td class='text-center text-center text-light'>". $Mymessage->addressline ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->yeargraduated ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->course ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->college ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->sex ."</td>";		
					echo "<td class='text-center text-center text-light'>". $Mymessage->email ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->contact ."</td>";
					echo "<td class='text-center text-center text-light'>". $Mymessage->social ."</td>";	
					echo "<td class='text-center text-center text-light'> </td>";		
					echo "</tr>";
				}
		?>	
	</tbody>
</table>
</div>
	
</div>