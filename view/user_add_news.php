


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



<div class="container-fluid mt-0 mb-2">
    <div class="row">
    
   

<div class="col-sm-4">
    
</div>
<div class="col-sm-4  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">

<table>
<thead>
	<tr >
		
		<!--<th class="fit"><a href="index.php?page=accounts_entry" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-plus" ></span> Add</a></th>-->
		<th class="fit"></th>
	</tr>
</thead>
<tbody class="">
	<?php 	
		$counter=0;
		foreach($result as $title=>$Mymessage)
			{
				
				$counter++;
			    
             
                echo "<tr><td class='text-center text-sm-left  text-light'>____________________________________</td></tr>";
                echo "<tr><td class='text-center text-sm-left  text-light'>CPUAAI NEWS</td></tr>";
				echo "<tr><td class='text-center text-sm-left   text-light'>". $Mymessage->news_date ."</td></tr>";
				echo "<tr><td class='text-center text-sm-left   text-light'><img width='250px' height='200px' src='view/upload/". $Mymessage->upload ."'></td></tr>";
                echo "<td><a class=' btn btn-danger bg-primary' onClick=\"javascript: return confirm('$Mymessage->article');\"href=''>$Mymessage->article</a></td>";

                
             
              
               
            }
            


      

	?>	
</tbody>
</table>

</div>


<div class="col-sm-4">
    
</div>

</div>
</div>
