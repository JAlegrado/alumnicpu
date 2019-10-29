<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>

<link rel="stylesheet" href="form.css" type="text/css">
<style>
 body{
	background:url('images/background/background1.jpg');
	color:white;
}
input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	width:200px;
}
a{
	text-decoration:none;
}
</style>



<div id="divToPrint" style="display:none;">
  <div style="width:200px;height:300px;background-color:teal;">
           
<?php	
	$con = mysqli_connect("localhost","root","","chemlab_data");	
	$sql = "SELECT * FROM apparatus";
	$query = mysqli_query($con, $sql);	
	echo"<table border='1' width='100%' align='center'>
	<h1 align='center'>Inventory of Apparatus and Glasswares</h1>
	<th>Item Code</th>
	<th>Quantity</th>
	<th>Unit</th>
	<th>Description</th>
	<th>Brand</th>
	<th>Capacity</th>
	<th>Date Acquired</th>
	<th>Supplier</th>
	<th>Mode of Acquisition</th>
	<th>Slide Number</th>
	<th>Location</th>
	<th>Condition</th>
	<th>Remarks</th>
	<th>Document Number</th>
	<th>Revision Number</th>
	<th>Date of Effectivity</th>
	<th>Issued By</th>
	";	
	while ($row = mysqli_fetch_array($query)){
		echo "<tr bgcolor='black'>";		
		echo  "<td align='center'>".$row ['itemcode']."</td>";
		echo  "<td  align='center'>".$row ['quantity']."</td>";
		echo  "<td align='center'>".$row ['unit']."</td>";
		echo  "<td align='center'>".$row ['description']."</td>";
		echo  "<td align='center'>".$row ['brand']."</td>";
		echo  "<td align='center'>".$row ['capacity']."</td>";
		echo  "<td align='center'>".$row ['date_acquired']."</td>";
		echo  "<td align='center'>".$row ['supplier']."</td>";
		echo  "<td align='center'>".$row ['mode_of_acquisition']."</td>";
		echo  "<td align='center'>".$row ['slideno']."</td>";
		echo  "<td align='center'>".$row ['location']."</td>";
		echo  "<td align='center'>".$row ['condition']."</td>";
		echo  "<td align='center'>".$row ['remarks']."</td>";
		echo  "<td align='center'>".$row ['documentno']."</td>";
		echo  "<td align='center'>".$row ['revisionno']."</td>";
		echo  "<td align='center'>".$row ['date_of_effectivity']."</td>";
		echo  "<td align='center'>".$row ['issuedby']."</td>";
		
		echo "<td>
					<form action='index.php?command=206' method='post'>
						<input type='hidden' name='id' value=". $row ['id'] .">
						<input type='hidden' name='item_code' value=". $row ['itemcode'] .">
						<input type='hidden' name='quantity' value=". $row ['quantity'] .">
						<input type='hidden' name='unit' value=". $row ['unit'] .">
						<input type='hidden' name='description' value=". $row ['description'] .">
						<input type='hidden' name='brand' value=". $row ['brand'] .">
						<input type='hidden' name='capacity' value=". $row ['capacity'] .">
						<input type='hidden' name='date_acquired' value=". $row ['date_acquired'] .">						
						<input type='hidden' name='supplier' value=". $row ['supplier'] .">
						<input type='hidden' name='mode_of_acquisition' value=". $row ['mode_of_acquisition'] .">
						<input type='hidden' name='slideno' value=". $row ['slideno'] .">
						<input type='hidden' name='location' value=". $row ['location'] .">
						<input type='hidden' name='condition' value=". $row ['condition'] .">
						<input type='hidden' name='remarks' value=". $row ['remarks'] .">
						<input type='hidden' name='documentno' value=". $row ['documentno'] .">
						<input type='hidden' name='revisionno' value=". $row ['revisionno'] .">
						<input type='hidden' name='date_of_effectivity' value=". $row ['date_of_effectivity'] .">
						<input type='hidden' name='issuedby' value=". $row ['issuedby'] .">
						
						<button type='submit' class='btn btn-sm btn-info' name='supply_edit'>
						<span class='glyphicon glyphicon glyphicon-edit' ></span>Edit</button>
					</form>
					</td>";	
					$idd=$row ['id'];
					
				echo "<td>
					<form action='index.php?command=204&&id=$idd' method='post'>						
						<button type='submit' class='btn btn-sm btn-info' name='apparatus_delete'>
						<span class='glyphicon glyphicon glyphicon-delete' ></span>Delete</button>
					</form>
					</td>";	
		
		
		
		echo "</tr>";
	}	
	
	echo "<tr><td colspan='17' align='center'><a href='index.php?command=54'>BACK</a></td></tr>";	
	echo "</table>";
?>


		   
  </div>
</div>
<div>
  <input type="button" value="Print Apparatus" onclick="PrintDiv();" />
</div>
