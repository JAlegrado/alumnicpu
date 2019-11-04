<?php
require_once("dbcontroller.php");
$db_handle = new DBController();

$action = $_POST["action"];
if(!empty($action)) {
	switch($action) {
		
			
		case "edit":
			$result = mysql_query("UPDATE events set event_title = '".$_POST["txtmessage"]."' WHERE  id=".$_POST["message_id"]);
			if($result){
				  echo $_POST["txtmessage"];
			}
			break;			
		
		
	}
}
?>