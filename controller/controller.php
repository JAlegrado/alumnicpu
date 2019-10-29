<?php
class Controller
{
	public $model=null;
	function __construct()
	{		
		require_once('Model/model.php');
		$this->model=new Model();
	}
	public function getLogin()
	{
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];
		$this->model->getlogin($username,$password);
	}
	public function getPage()
	{		
		if(isset($_SESSION['role'])){
			$page = null;
			if(isset($_GET['page'])){
				$page=$_GET['page'];
			}
			if($page == 'logout'){
				session_unset();
				session_destroy();
				header('Location:index.php');
				exit;
			}
			if($_SESSION['role']=='Admin')
			{
			include('view/menu_admin.php');
			if($page == 'logout'){
				session_unset();
				session_destroy();
				header('Location:index.php');
				exit;
			}
			if($page==null){
				include('view/admin_home.php');
				//include('view/footer.php');
				//exit;
			}			
			if($page=='view_user'){
				if(isset($_REQUEST['year_graduated'])){
					$year_grad=$_REQUEST['year_graduated'];
					$result = $this->model->getAccounts2($year_grad);
					include 'view/accounts.php';
				}elseif(isset($_REQUEST['course_title'])){
					$course_title=$_REQUEST['course_title'];
					$result = $this->model->getAccounts3($course_title);
					include 'view/accounts.php';
				}elseif(isset($_REQUEST['college10'])){
					$college10=$_REQUEST['college10'];				
					$result = $this->model->getAccounts4($college10);
					include 'view/accounts.php';
				}elseif(isset($_REQUEST['searchlastfirst'])){
					$searchlastfirst=$_REQUEST['searchlastfirst'];
					$result = $this->model->getAccounts6($searchlastfirst);
					include 'view/accounts.php';
				}else{
					$result = $this->model->getAccounts();
					include 'view/accounts.php';
				}
			
				//exit;
			}
			if($page=='reports'){
				include 'view/reports.php';
				//exit;
			}
			if($page=='create_country'){
				if(isset($_POST['country'])){
					$country = $_POST['country'];
					$result=$this->model->insert_country($country);
					echo "<script type='text/javascript'>alert('" .$result. "');</script>";
					$country = $this->model->get_country();
					include 'view/country1.php';
				}else{
					include 'view/country.php';	
				}
			
			}
			if($page == 'country_delete'){
				$country_id = $_POST['country_id'];
				$this->model->delete_country($country_id);
				$country = $this->model->get_country();
				include 'view/country1.php';
			}

			if($page == 'country_edit'){
				$country_id = $_POST['country_id'];
				$country = $this->model->geteditcountry($country_id);
				foreach($country as $title=>$getcountry){
						$country_name = $getcountry->country;
				}
				include 'view/country_edit.php';
				
			}

			if($page == 'country_update'){
				$country_id = $_POST['country_id'];
				$country_name = $_POST['country_name'];
				$this->model->update_country($country_id,$country_name);
				$country = $this->model->get_country();
				include 'view/country1.php';
			}

			if($page=='create_college'){
				if(isset($_POST['college'])){
					$college = $_POST['college'];
					$result=$this->model->insert_college($college);
					echo "<script type='text/javascript'>alert('" .$result. "');</script>";
					$college = $this->model->get_college();
					include 'view/college1.php';
				}else{
					include 'view/college.php';	
				}
			}

			if($page == 'college_delete'){
				$college_id = $_POST['college_id'];
				$this->model->delete_college($college_id);
				$college = $this->model->get_college();
				include 'view/college1.php';
			}

			if($page == 'college_edit'){
				$college_id = $_POST['college_id'];
				$college = $this->model->geteditcollege($college_id);
				foreach($college as $title=>$getcollege){
						$college_name = $getcollege->college10;
				}
				include 'view/college_edit.php';
				
			}

			if($page == 'college_update'){
				$college_id = $_POST['college_id'];
				$college_name = $_POST['college_name'];
				$this->model->update_college($college_id,$college_name);
				$college = $this->model->get_college();
				include 'view/college1.php';
			}



			if($page=='create_course'){
				if(isset($_POST['course'])){
					$course = $_POST['course'];
					$result=$this->model->insert_course($course);
					echo "<script type='text/javascript'>alert('" .$result. "');</script>";
					$course = $this->model->getcourse();
					include 'view/course1.php';
				}else{
					include 'view/course.php';	
				}
				
				//exit;
			}
			if($page == 'course_delete'){
				$course_id = $_POST['course_id'];
				$this->model->delete_course($course_id);
				$course = $this->model->getcourse();
				include 'view/course1.php';
			}

			if($page == 'course_edit'){
				$course_id = $_POST['course_id'];
				$course = $this->model->geteditcourse($course_id);
				foreach($course as $title=>$getcourse){
						$course_name = $getcourse->course_title;
				}
				include 'view/course_edit.php';
				
			}

			if($page == 'course_update'){
				$course_id = $_POST['course_id'];
				$course_name = $_POST['course_name'];
				$this->model->update_course($course_id,$course_name);
				$course = $this->model->getcourse();
				include 'view/course1.php';
			}

			if($page == 'year_edit'){
				$year_id = $_POST['year_id'];
				$year = $this->model->getedityear($year_id);
				foreach($year as $title=>$getyear){
						$year_name = $getyear->year_graduated;
				}
				include 'view/year_edit.php';
				
			}

			if($page == 'year_update'){
				$year_id = $_POST['year_id'];
				$year_name = $_POST['year_name'];
				$this->model->update_year($year_id,$year_name);
				$yeargraduated= $this->model->getyeargraduated();
				include 'view/yeargraduated1.php';
			}

			if($page=='create_yeargraduated'){
				if(isset($_POST['yeargraduated'])){
					$yeargraduated = $_POST['yeargraduated'];
					$result=$this->model->insert_yeargraduated($yeargraduated);
					echo "<script type='text/javascript'>alert('" .$result. "');</script>";
					$yeargraduated= $this->model->getyeargraduated();
					include 'view/yeargraduated1.php';
				}else{
					include 'view/yeargraduated.php';	
				}
				
				//exit;
			}
			if($page == 'year_delete'){
				$year_id = $_POST['year_id'];
				$this->model->delete_year($year_id);
				$yeargraduated = $this->model->getyeargraduated();
				include 'view/yeargraduated1.php';
			}
			if($page == 'position_delete'){
				$position_id = $_POST['position_id'];
				$this->model->delete_position($position_id);
				$result = $this->model->get_position();
				include 'view/position_entry.php';	
			}

			
			if($page == 'position_edit'){
				$position_id = $_POST['position_id'];
				$position = $this->model->geteditposition($position_id);
				foreach($position as $title=>$getposition){
						$position_name = $getposition->position;
						$max_vote = $getposition->max_vote;
				}
				$result = $this->model->get_position();
				include 'view/position_edit.php';	
				
			}

			if($page == 'position_update'){
				$position_id = $_POST['position_id'];
				$position_name = $_POST['position_name'];
				$max_vote = $_POST['max_vote'];
				$this->model->update_position($position_id,$position_name,$max_vote);
				$result = $this->model->get_position();
				include 'view/position_edit.php';	
			}	



			if($page == 'delete_user'){
				$id = $_GET['id'];
				$this->model->delete_user($id);
				echo '<script> alert ("Successfully Deleted!")</script>';
				include('view/admin_home.php');
			}
			if($page=='create_events'){
				$result = $this->model->get_events();
				$result2 = $this->model->get_events2();
				include 'view/create_events.php';
				//exit;
			}
			if($page=='add_news'){
			if(isset($_REQUEST['news_title']) && ($_REQUEST['news_date']) && ($_REQUEST['article'])){
				$name=$_FILES['photo']['name'];
				$size=$_FILES['photo']['size'];
				$type=$_FILES['photo']['type'];
				$temp=$_FILES['photo']['tmp_name'];
			  move_uploaded_file($temp,"view/upload/".$name);
				
			  $news_title  = $_REQUEST['news_title'];
			  $news_date  = $_REQUEST['news_date'];
			  $article  = $_REQUEST['article'];
			  $result = $this->model->insert_news($news_title,$news_date,$article,$name);
	  
			}
					
					$result = $this->model->get_news();
				include 'view/add_news.php';
				//exit;
			}

			if($page == 'news_delete'){
				$news_id = $_POST['news_id'];
				$this->model->delete_news($news_id);
				$result = $this->model->get_news();
				include 'view/add_news.php';
			}

			

			if($page == 'news_edit'){
				$news_id = $_POST['news_id'];
				$news = $this->model->geteditnews($news_id);
				foreach($news as $title=>$getnews){
						$news_name = $getnews->news_title;
						$news_date = $getnews->news_date;
						$article = $getnews->article;
				}
				$result = $this->model->get_news();
				include 'view/news_edit.php';
				
			}
			if($page == 'news_update'){

				$name=$_FILES['photo']['name'];
				$size=$_FILES['photo']['size'];
				$type=$_FILES['photo']['type'];
				$temp=$_FILES['photo']['tmp_name'];
			  	move_uploaded_file($temp,"view/upload/".$name);

				$news_id = $_POST['news_id'];
				$news_name = $_POST['news_name'];
				$news_date = $_POST['news_date'];
				$article = $_POST['article'];
				$this->model->update_news($news_id,$news_name,$news_date,$article,$name);
				$result = $this->model->get_news();
				include 'view/news_edit.php';	
			}	
			


			if($page=='add_events'){
				if(isset($_REQUEST['event_title']) && isset($_REQUEST['event_type'])){
					$venue = $_REQUEST['venue'];
					$event_title = $_REQUEST['event_title'];
					$event_type = $_REQUEST['event_type'];
					$event_date = $_REQUEST['event_date']; 
					$course_participants = $_REQUEST['course_participants'];
					$batch_participants = $_REQUEST['batch_participants'];
					$requested_by = $_REQUEST['requested_by'];

					$result = $this->model->insert_events($venue,$event_title,$event_type,$event_date,$course_participants,$batch_participants,$requested_by);
					echo "<script type='text/javascript'>alert('" .$result. "');</script>";
				}
				$result = $this->model->get_events();
				include 'view/add_events.php';
				//exit;
			}
			if($page == 'delete_event'){
				$event_id = $_POST['event_id'];
				$this->model->delete_event($event_id);
				$result = $this->model->get_events();
				include 'view/add_events.php';
			}


			if($page == 'edit_event'){
				$event_id = $_POST['event_id'];
				$event = $this->model->geteditevent($event_id);
				foreach($event as $title=>$getevent){
						$event_id = $getevent->event_id;
						$venue = $getevent->venue;
						$event_title = $getevent->event_title;
						$event_type = $getevent->event_type;
						$event_date = $getevent->event_date;
				}
				$result = $this->model->get_events();
				include 'view/edit_events.php';
				
			}

			if($page == 'event_details'){
				$event_id = $_POST['event_id'];
			
				$result = $this->model->getevent2($event_id);
				include 'view/event_details.php';
				
			}


			
			if($page == 'update_events'){
				$event_id = $_REQUEST['event_id'];
				$venue = $_REQUEST['venue'];
				$event_title = $_REQUEST['event_title'];
				$event_type = $_REQUEST['event_type'];
				$event_date = $_REQUEST['event_date']; 
				$course_participants = $_REQUEST['course_participants'];
				$batch_participants = $_REQUEST['batch_participants'];
				$this->model->update_events($event_id,$venue,$event_title,$event_type,$event_date,$course_participants,$batch_participants);
				
				$result = $this->model->get_events();
				include 'view/edit_events.php';
			}	





			if($page=='create_election'){
				if(isset($_REQUEST['election_title']) && ($_REQUEST['election_date'])&& ($_REQUEST['start_date']) && ($_REQUEST['due_date'])){
					$election_title = $_REQUEST['election_title'];
					$election_date = $_REQUEST['election_date'];
					$nomination_start_date = $_REQUEST['start_date'];
					$nomination_due_date = $_REQUEST['due_date'];
					$result = $this->model->insert_election($election_title,$election_date,$nomination_start_date,$nomination_due_date);
					echo "<script type='text/javascript'>alert('" .$result. "');</script>";
				} 
				$result1 = $this->model->get_election();
				include 'view/create_election.php';
				//exit;
			}


			if($page == 'edit_election'){
				$election_id = $_POST['election_id'];
				$election = $this->model->geteditelection($election_id);
				foreach($election as $title=>$getelection){
						$election_id = $getelection->election_id;
						$election_title = $getelection->election_title;
						$election_date = $getelection->election_date;
						$position = $getelection->position1;
						$start_date = $getelection->start_date;
						$due_date = $getelection->due_date;
				}
				$result = $this->model->get_position();
				$result1 = $this->model->get_election();
				include 'view/edit_election.php';
			}

			if($page == 'update_election'){
				$election_id = $_REQUEST['election_id'];
				$election_title = $_REQUEST['election_title'];
				$election_date = $_REQUEST['election_date'];
				$position1 = $_REQUEST['position1'];
				$nomination_start_date = $_REQUEST['start_date'];
				$nomination_due_date = $_REQUEST['due_date'];
				$result = $this->model->update_election($election_id,$election_title,$election_date,$position1,$nomination_start_date,$nomination_due_date);
			
				
				$result = $this->model->get_position();
				$result1 = $this->model->get_election();
				include 'view/create_election.php';
			}	

			if($page == 'delete_election'){
				$election_id = $_POST['election_id'];
				$this->model->delete_election($election_id);
				$result = $this->model->get_position();
				$result1 = $this->model->get_election();
				include 'view/create_election.php';
			}







			if($page=='approve_event'){
				$event_id = $_REQUEST['event_id'];
				$this->model->update_event($event_id);
				
				$result = $this->model->get_events();
				$result2 = $this->model->get_events2();
				include 'view/create_events.php';
			}
				
			if($page=='nomination1'){
				include 'view/nomination1.php';
				//exit;
			}
			if($page=='approve'){
				$nominee_id = $_REQUEST['nominee_id'];
				$this->model->update_nom($nominee_id);
				include 'view/nomination1.php';
			}
			if($page=='decline'){
				$nominee_id = $_REQUEST['nominee_id'];
				$this->model->delete_nominee($nominee_id);
				include 'view/nomination1.php';
			}	
			if($page=='delete_nominee'){
				$nominee_id = $_REQUEST['nominee_id'];
				$this->model->delete_nominee($nominee_id);
				include 'view/nomination1.php';
			}	

			



			if($page=='decline_event'){
				$event_id = $_REQUEST['event_id'];
				$this->model->delete_event($event_id);
				$result = $this->model->get_events();
				$result2 = $this->model->get_events2();
				include 'view/create_events.php';
			}	
			if($page=='upload_csv'){
				include 'view/import/index.php';
			}	
			if($page=='position_entry'){
				if(isset($_REQUEST['position']) && ($_REQUEST['max_vote'])){
					$position = $_REQUEST['position'];
					$max_vote = $_REQUEST['max_vote'];

					$result = $this->model->insert_position($position,$max_vote);
					echo "<script type='text/javascript'>alert('" . $result	 . "');</script>";
				}
				$result = $this->model->get_position();
				include 'view/position_entry.php';	
				
			}	

			if($page == 'change_password'){
				if(isset($_REQUEST['password'])){
					$user_id  = $_SESSION['user_id'];
					$password = $_REQUEST['password'];
					$result = $this->model->update_password($password,$user_id);
					echo "<script type='text/javascript'>alert('" . $result	 . "');</script>";
					$admin_accounts = $this->model->getAccounts1($user_id);
					foreach($admin_accounts as $title=>$getaccounts){
						$password = $getaccounts->password;
					
					}
					include 'view/change_password.php';	
				}else{
					include 'view/change_password.php';	
				}
				
			}



					
		}elseif($_SESSION['role']=='User')
		{
			//echo $_SESSION['user_id']. '  '. $_SESSION['firstname1'].'  '.$_SESSION['lastname1'].'  '.$_SESSION['username1'].'  '.$_SESSION['password1'];
			include('view/menu_user.php');
			if($page == 'logout'){
				session_unset();
				session_destroy();
				header('Location:index.php');
				exit;
			}




			if($page=='create_user_events'){
				$result = $this->model->get_events();
				$result2 = $this->model->get_events2();
				include 'view/create_events2.php';
				//exit;
			}	



			if($page=='add_events'){
				if(isset($_REQUEST['event_title']) && isset($_REQUEST['event_type'])){
					$venue = $_REQUEST['venue'];
					$event_title = $_REQUEST['event_title'];
					$event_type = $_REQUEST['event_type'];
					$event_date = $_REQUEST['event_date']; 
					$course_participants = $_REQUEST['course_participants'];
					$batch_participants = $_REQUEST['batch_participants'];
					$requested_by = $_REQUEST['requested_by'];

					$result = $this->model->insert_events($venue,$event_title,$event_type,$event_date,$course_participants,$batch_participants,$requested_by);
					echo "<script type='text/javascript'>alert('" .$result. "');</script>";
				}
				$result = $this->model->get_events();

				include 'view/add_events.php';
				//exit;
			}

			if($page == 'delete_event'){
				$event_id = $_POST['event_id'];
				$this->model->delete_event($event_id);
				$result = $this->model->get_events();
				include 'view/add_events.php';
			}

			if($page == 'event_envited'){
				if(isset($_REQUEST['course']) && ($_REQUEST['batch'])){
					$event_id = $_POST['event_id'];
					$course = $_POST['course'];
					$batch = $_POST['batch'];
					$result31 = $this->model->get_envited($course,$batch);
					$result = $this->model->get_events();
					include 'view/add_events31.php';
				}else{
					$result30 = $this->model->get_envited($course,$batch);
					$result = $this->model->get_events();
					include 'view/add_events30.php';

				}
			
			
			}



			if($page=='save_nominee'){

				if(isset($_REQUEST['firstname']) && ($_REQUEST['middlename']) && ($_REQUEST['lastname'])){
					
					$firstname=$_REQUEST['firstname'];
					$middlename=$_REQUEST['middlename'];
					$lastname=$_REQUEST['lastname'];
					$yeargraduated=$_REQUEST['yeargraduated'];
					$position=$_REQUEST['position'];

				$result = $this->model->select_nominee($firstname,$middlename,$lastname,$yeargraduated,$position); 
				if($result=='notfound'){
					echo "<script type='text/javascript'>alert('Data has been Saved');</script>";
					$this->model->insert_nominee($firstname,$middlename,$lastname,$yeargraduated,$position); 
					include 'view/nomination.php';
				}else{
					echo "<script type='text/javascript'>alert('The Name is Already Nominated. Please Select Another!');</script>";
					
					include 'view/nomination.php';
				}

				}else{
					include 'view/nomination.php';
				}
				
				
				
			}
			if($page==null){
				include('view/admin_home.php');
				//include('view/footer.php');
				//exit;
			}			
			if($page=='select_nominee'){
				$nominee_id = $_REQUEST['nominee_id'];
				$result = $this->model->getnominee($nominee_id);
				include('view/nominee.php');
				//include('view/footer.php');
				//exit;
			}				
			if($page=='view_user'){
				if(isset($_REQUEST['year_graduated'])){
					$year_grad=$_REQUEST['year_graduated'];
					$result = $this->model->getAccounts2($year_grad);
					include 'view/accounts_user.php';
				}elseif(isset($_REQUEST['course_title'])){
					$course_title=$_REQUEST['course_title'];
					$result = $this->model->getAccounts3($course_title);
					include 'view/accounts_user.php';
				}elseif(isset($_REQUEST['college10'])){
					$college10=$_REQUEST['college10'];				
					$result = $this->model->getAccounts4($college10);
					include 'view/accounts_user.php';
				}elseif(isset($_REQUEST['searchlastfirst'])){
					$searchlastfirst=$_REQUEST['searchlastfirst'];
					$result = $this->model->getAccounts6($searchlastfirst);
					include 'view/accounts_user.php';
				}else{
					$result = $this->model->getAccounts();
					include 'view/accounts_user.php';
				}
			}

			if($page=='view_user1'){

				if(isset($_REQUEST['searchlastfirst'])){
					$searchlastfirst=$_REQUEST['searchlastfirst'];
					$result = $this->model->get_search_result1($searchlastfirst);
				}
				if(isset($_REQUEST['college'])){
				$college =  $_REQUEST['college'];
				$result = $this->model->get_search_result2($college);
				}
				if(isset($_REQUEST['course'])){
					$course =  $_REQUEST['course'];
					$result = $this->model->get_search_result3($course);
				}
				if(isset($_REQUEST['year_graduated'])){
					$year_graduated =  $_REQUEST['year_graduated'];
					$result = $this->model->get_search_result4($year_graduated);
				}
				if(isset($_REQUEST['year_graduated']) && ($_REQUEST['course']) && ($_REQUEST['college'])){
					$year_graduated =  $_REQUEST['year_graduated'];
					$course =  $_REQUEST['course'];
					$college =  $_REQUEST['college'];
					$result = $this->model->get_search_result5($year_graduated,$course,$college);
				}
				include 'view/accounts_user.php';	
			
			}





			if($page == 'delete_user'){
				$id = $_GET['id'];
				$this->model->delete_user($id);
				echo '<script> alert ("Successfully Deleted!")</script>';
				include('view/admin_home.php');
			}
			if($page=='nomination'){
				include('view/nomination.php');
				//include('view/footer.php');
				//exit;
			}
			if($page=='user_add_news'){
				$result = $this->model->get_news();
				include('view/user_add_news.php');
				//include('view/footer.php');
				//exit;
			}
			if($page=='user_add_news'){
				$result = $this->model->get_news();
				include('view/user_add_news.php');
				//include('view/footer.php');
				//exit;
			}
			if($page=='vote'){
				include('view/vote.php');
				//include('view/footer.php');
				//exit;
			}
			if($page == 'user_change_password'){
				if(isset($_REQUEST['username']) && ($_REQUEST['password'])){
					$user_id  = $_SESSION['user_id'];
					$addressline = $_REQUEST['addressline'];
					$city = $_REQUEST['city'];
					$spr = $_REQUEST['spr'];
					$zip = $_REQUEST['zip'];
					$social = $_REQUEST['social'];
					$contact = $_REQUEST['contact'];
					$email = $_REQUEST['email'];
					$country = $_REQUEST['country'];
					$username = $_REQUEST['username'];
					$password = $_REQUEST['password'];

					$result = $this->model->update_username_password($addressline,$city,$spr,$zip,$social,$contact,$email,$country,$username,$password,$user_id);
					echo "<script type='text/javascript'>alert('" . $result	 . "');</script>";
					$user_accounts = $this->model->getuserAccounts1($user_id);
					foreach($user_accounts as $title=>$getaccounts){
						$username = $getaccounts->username;
						$password = $getaccounts->password;
					}
					include 'view/user_change_password.php';	
				}else{
					include 'view/user_change_password.php';	
				}
			}
		}

		}
		
		else
		{
			$command=null;
			if(isset($_REQUEST['command']))
				$command=$_REQUEST['command'];
			switch($command)	
			{
				case 0:
				{
					include('view/login.php');
					break;
				}
				case 1:
				{
					include('view/register.php');
					break;
				}
				case 2:
				{
					$firstname = $_REQUEST['firstname'];
					$middlename = $_REQUEST['middlename'];
					$lastname = $_REQUEST['lastname'];
					$addressline = $_REQUEST['addressline'];
					$city = $_REQUEST['city'];
					$spr = $_REQUEST['spr'];
					$zip = $_REQUEST['zip'];
					$country = $_REQUEST['country'];
					$yeargraduated = $_REQUEST['yeargraduated'];
					$course = $_REQUEST['course'];
					$college = $_REQUEST['college'];
					$sex = $_REQUEST['sex'];
					$email = $_REQUEST['email'];
					$contact = $_REQUEST['contact'];
					$social = $_REQUEST['social'];
					$username = $_REQUEST['username'];
					$password = $_REQUEST['password'];
					$role = $_REQUEST['role'];

					if ($firstname && $lastname && $username && $password ){

						$result = $this->model->get_csv($firstname,$middlename,$lastname,$course,$yeargraduated);
						
						if($result=='found'){
							$this->model->insert_user($firstname,$middlename,$lastname,$addressline,$city,$spr,$zip,$country,$yeargraduated,$course,$college,$sex,$email,$contact,$social,$username,$password,$role);
							echo '<script> alert ("Successfully Registered!")</script>';
							include('view/login.php');
						} elseif($result=='notfound'){
							echo '<script> alert ("You are not Graduated Yet!")</script>';
							include('view/login.php');
						}
						//$this->model->insert_user($firstname,$middlename,$lastname,$addressline,$city,$spr,$zip,$country,$yeargraduated,$course,$college,$sex,$email,$contact,$social,$username,$password,$role);
						//echo '<script> alert ("'.$result.'")</script>';
						//echo '<script> alert ("Successfully Registered!")</script>';
						//include('view/login.php');
						//exit;
					}else{
						echo '<script> alert ("Please Fill All the Fields!")</script>';
						include('view/login.php');
						//exit;
					}
					break;
				}

			}
		}
	}

}
?>