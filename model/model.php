<?php
class Model
{
	public $db=null;
	function __construct()
	{
		try
		{
			$this->db = new mysqli('localhost', 'root', '', 'cpuaai');
		}
		catch(mysqli_sql_exception $e)
		{
			exit('Database connection could not be established.');
		}
	}
	public function getlogin($username,$password){
		

		global $role;
		global $user_id;
		global $firstname1;
		global $lastname1;
		global $username1;
		global $password1;


		if($username && $password){
			$result= mysqli_query($this->db,"SELECT * from users where username='".$username."' && password='".$password."'");
		while($getRow=mysqli_fetch_assoc($result))    		
			{    			
			  $user_id= $getRow['user_id'];
			  $firstname1= $getRow['firstname'];
			  $lastname1= $getRow['lastname'];
			  $username1= $getRow['username'];
			  $password1= $getRow['password'];
			  $role= $getRow['role'];
			}
			$_SESSION['user_id']=$user_id;
			$_SESSION['firstname1']=$firstname1;
			$_SESSION['lastname1']=$lastname1;
			$_SESSION['username1']=$username1;                                 
			$_SESSION['password1']=$password1;
			$_SESSION['role']=$role;

		}else{
			header('Location:index.php');
		}
		
	}




	public function get_search_result_admin1($searchlastfirst)
    {
        $data = array();
		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User' and firstname='$searchlastfirst' or lastname='$searchlastfirst'");
		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}




	public function get_search_result1($searchlastfirst)
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User' and firstname like '%" .$searchlastfirst ."%' or  lastname like '%" .$searchlastfirst ."%'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function get_search_result2($college)
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User' and college='$college'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function get_search_result3($course)
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User'and  course='$course'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function get_search_result4($year_graduated)
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User' and yeargraduated='$year_graduated'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function get_search_result5($year_graduated,$course,$college)
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User'and yeargraduated like '%".$year_graduated."%' and course like '%".$course."%' and college like '%".$college."%'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}



	public function insert_user($firstname,$middlename,$lastname,$addressline,$city,$spr,$zip,$country,$yeargraduated,$course,$college,$sex,$email,$contact,$social,$username,$password, $role)
    {
    	$insertQuery="INSERT into users(firstname,middlename,lastname,addressline,city,spr,zip,country,yeargraduated,course,college,sex,email,contact,social,username,password,role) values('$firstname','$middlename','$lastname','$addressline','$city','$spr','$zip','$country','$yeargraduated','$course','$college','$sex','$email','$contact','$social','$username','$password','$role')";
		$result = mysqli_query($this->db,$insertQuery);
		if(!$result)
			return mysqli_error($this->db);
		else
			
			return  mysqli_insert_id($this->db);
	}
	
	public function select_nominee($firstname,$middlename,$lastname,$yeargraduated,$position)
    {
		$result = mysqli_query($this->db,"SELECT * FROM nominee WHERE firstname='$firstname' && middlename='$middlename' && lastname='$lastname'") or die ("Could not search");
  		$rowcount=mysqli_num_rows($result);
  		if($rowcount>0){
	  		return 'found';
  		}else{
	  		return 'notfound';
  		}
	}
	                                                                                                
	public function insert_nominee($firstname,$middlename,$lastname,$yeargraduated,$position)
	{

		$insertQuery="INSERT into nominee(firstname,middlename,lastname,yeargraduated,position,status) values('$firstname','$middlename','$lastname','$yeargraduated','$position','Pending')";
		$result = mysqli_query($this->db,$insertQuery);
		if(!$result)
			return mysqli_error($this->db);
		else
			return  mysqli_insert_id($this->db);

	}

                                                                                                
	public function insert_country($country)
	{

		$insertQuery="INSERT into country(country) values('$country')";
		$result = mysqli_query($this->db,$insertQuery);
		if(!$result)
			return 'Not Save';
		else
			return  "Record Save";

	}

	public function insert_college($college)
	{

		$insertQuery="INSERT into college(college10) values('$college')";
		$result = mysqli_query($this->db,$insertQuery);
		if(!$result)
			return 'Not Save';
		else
			return  "Record Save";

	}

	public function insert_course($course)
	{

		$insertQuery="INSERT into course(course_title) values('$course')";
		$result = mysqli_query($this->db,$insertQuery);
		if(!$result)
			return 'Not Save';
		else
			return  "Record Save";

	}
	public function insert_yeargraduated($yeargraduated)
	{

		$insertQuery="INSERT into year_graduated(year_graduated) values('$yeargraduated')";
		$result = mysqli_query($this->db,$insertQuery);
		if(!$result)
			return 'Not Save';
		else
			return  "Record Save";

	}

	public function getevent2($event_id) 
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from events where event_id='$event_id'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function getAccounts() 
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function getAccounts1($user_id) 
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='Admin' and user_id='$user_id'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function getuserAccounts1($user_id) 
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User' and user_id='$user_id'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function getAccounts2($year_grad)
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User' and yeargraduated='$year_grad'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function getAccounts3($course_title)
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User' and course='$course_title'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function getAccounts4($college1)
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User' and college='$college1'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function getAccounts6($searchlastfirst)
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where role='User' and firstname='$searchlastfirst' or lastname='$searchlastfirst'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}


	public function getnominee($nominee_id)
    {
        $data = array();

		$queryGetcollege = mysqli_query($this->db,"SELECT * from users where user_id='$nominee_id'");

		while($getRow=mysqli_fetch_object($queryGetcollege))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}



	public function delete_user($user_id)
    {
    	$deleteQuery="DELETE from users where user_id=$user_id";
		
		$result = mysqli_query($this->db,$deleteQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
	}

	public function delete_country($country_id)
    {
    	$deleteQuery="DELETE from country where country_id=$country_id";
		
		$result = mysqli_query($this->db,$deleteQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
	}	

	public function delete_college($college_id)
    {
    	$deleteQuery="DELETE from college where college_id=$college_id";
		
		$result = mysqli_query($this->db,$deleteQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
	}	


	public function delete_course($course_id)
    {
    	$deleteQuery="DELETE from course where course_id=$course_id";
		
		$result = mysqli_query($this->db,$deleteQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
	}	

	public function delete_year($year_id)
    {
    	$deleteQuery="DELETE from year_graduated where year_id=$year_id";
		
		$result = mysqli_query($this->db,$deleteQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
	}	



	public function update_nom($nominee_id)
    {
    	$updateQuery="UPDATE nominee SET status='Approve' where nominee_id='$nominee_id'";
		
		$result = mysqli_query($this->db,$updateQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Updated";
	}
	public function update_event($event_id)
    {
    	$updateQuery="UPDATE events SET status='Approve' where event_id='$event_id'";
		
		$result = mysqli_query($this->db,$updateQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Updated";
	}
	
	public function update_country($country_id,$country_name)
    {
    	$updateQuery="UPDATE country SET country='$country_name' where country_id='$country_id'";
		
		$result = mysqli_query($this->db,$updateQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Updated";
    }

	public function delete_nominee($nominee_id)
    {
    	$deleteQuery="DELETE from nominee where nominee_id=$nominee_id";
		
		$result = mysqli_query($this->db,$deleteQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
	}
	public function delete_event($event_id)
    {
    	$deleteQuery="DELETE from events where event_id=$event_id";
		
		$result = mysqli_query($this->db,$deleteQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
    }
	public function delete_position($position_id)
    {
    	$deleteQuery="DELETE from position1 where position_id=$position_id";
		
		$result = mysqli_query($this->db,$deleteQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
    }




	public function insert_position($position,$max_vote,$priority)
    {
    	$insertQuery="INSERT into position1(position,max_vote,priority) values('$position','$max_vote','$priority')";
		$result = mysqli_query($this->db,$insertQuery);
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Save";
	}
	public function get_position() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from position1");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function insert_election($election_title,$election_date,$position1,$nomination_start_date,$nomination_due_date)
	{
		$insertQuery="INSERT into election(election_title,election_date,position1,start_date,due_date) 
									values('$election_title','$election_date','$position1','$nomination_start_date','$nomination_due_date')";
		$result = mysqli_query($this->db,$insertQuery);
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Save";
	}
	

	public function get_election() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from election");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function get_events() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from events where status='Approve'");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function get_events2() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from events where status='Pending'");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	

	public function insert_events($venue,$event_title,$event_type,$event_date,$course_participants,$batch_participants,$requested_by)
	{
		
		$insertQuery="INSERT into events(venue,event_title,event_type,event_date,course_participants,batch_participants,requested_by,status) 
									values('$venue','$event_title','$event_type','$event_date','$course_participants','$batch_participants','$requested_by','Pending')";
		$result = mysqli_query($this->db,$insertQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Save";
	}

	public function insert_news($news_title,$news_date,$article,$name)
	{
		
		$insertQuery="INSERT into add_news(news_title,news_date,article,upload) 
									values('$news_title','$news_date','$article','$name')";
		$result = mysqli_query($this->db,$insertQuery);
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Save";
	}

	public function get_news() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from add_news");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function getyeargraduated() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from year_graduated");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function getcourse() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from course");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function get_college() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from college");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function get_country() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from country");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function get_disclaimer() 
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from disclaimer");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function get_csv($firstname,$middlename,$lastname,$course,$yeargraduated) 
    {
		$result = mysqli_query($this->db,"SELECT * FROM csv WHERE firstname='$firstname' and middlename='$middlename' and lastname='$lastname' and course='$course' and yeargraduated='$yeargraduated'") or die ("Could not search");
  		$rowcount=mysqli_num_rows($result);
  		if($rowcount>0){
	  		return 'found';
  		}else{
	  		return 'notfound';
  		}
 			 printf("Result set has %d rows.\n",$rowcount);
  			// Free result set
  			mysqli_free_result($result);
	}

	
	public function geteditcountry($country_id) 
    {
        $data = array();

		$queryGetsubject= mysqli_query($this->db,"SELECT * FROM country WHERE country_id=$country_id");

		while($getRow=mysqli_fetch_object($queryGetsubject))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
    }
	public function geteditcollege($college_id) 
    {
        $data = array();

		$queryGetsubject= mysqli_query($this->db,"SELECT * FROM college WHERE college_id=$college_id");

		while($getRow=mysqli_fetch_object($queryGetsubject))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function update_college($college_id,$college_name)
    {
    	$updateQuery="UPDATE college SET college10='$college_name' where college_id='$college_id'";
		
		$result = mysqli_query($this->db,$updateQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Updated";
	}
	public function geteditcourse($course_id) 
    {
        $data = array();

		$queryGetsubject= mysqli_query($this->db,"SELECT * FROM course WHERE course_id=$course_id");

		while($getRow=mysqli_fetch_object($queryGetsubject))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function update_course($course_id,$course_name)
    {
    	$updateQuery="UPDATE course SET course_title='$course_name' where course_id='$course_id'";
		
		$result = mysqli_query($this->db,$updateQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Updated";
	}

	public function getedityear($year_id) 
    {
        $data = array();

		$queryGetsubject= mysqli_query($this->db,"SELECT * FROM year_graduated WHERE year_id=$year_id");

		while($getRow=mysqli_fetch_object($queryGetsubject))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function update_year($year_id,$year_name)
    {
    	$updateQuery="UPDATE year_graduated SET year_graduated='$year_name' where year_id='$year_id'";
		
		$result = mysqli_query($this->db,$updateQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Updated";
	}

	public function geteditposition($position_id) 
    {
        $data = array();

		$queryGetsubject= mysqli_query($this->db,"SELECT * FROM position1 WHERE position_id=$position_id");

		while($getRow=mysqli_fetch_object($queryGetsubject))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}	
	public function update_position($position_id,$position_name,$max_vote,$priority)
    {
    	$updateQuery="UPDATE position1 SET position='$position_name',max_vote='$max_vote',priority='$priority' where position_id='$position_id'";
		
		$result = mysqli_query($this->db,$updateQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Updated";
	}
	public function delete_news($news_id)
    {
    	$deleteQuery="DELETE from add_news where news_id=$news_id";
		
		$result = mysqli_query($this->db,$deleteQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
	}
	public function geteditnews($news_id) 
    {
        $data = array();

		$queryGetsubject= mysqli_query($this->db,"SELECT * FROM add_news WHERE news_id=$news_id");

		while($getRow=mysqli_fetch_object($queryGetsubject))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}	

	public function update_news($news_id,$news_name,$news_date,$article,$name)
    {
    	$updateQuery="UPDATE add_news SET news_title='$news_name',news_date='$news_date',article='$article',upload='$name' where news_id='$news_id'";
		
		$result = mysqli_query($this->db,$updateQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Updated";
	}

	public function update_password($password,$user_id)
    {
    	$updateQuery="UPDATE users SET password='$password' where user_id='$user_id'";
		
		$result = mysqli_query($this->db,$updateQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Updated";
	}

	public function update_username_password($addressline,$city,$spr,$zip,$social,$contact,$email,$country,$username,$password,$user_id)
    {
    	$updateQuery="UPDATE users SET addressline='$addressline',city='$city',spr='$spr', zip='$zip', social='$social', contact='$contact', email='$email', country='$country', username='$username', password='$password' where user_id='$user_id'";
		
		$result = mysqli_query($this->db,$updateQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Updated";
	}	

	public function get_voteresults() 
    {
        $data = array();

		$queryGetsubject= mysqli_query($this->db,"SELECT * FROM voting_results");

		while($getRow=mysqli_fetch_object($queryGetsubject))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}	
	public function geteditevent($event_id) 
    {
        $data = array();

		$queryGetsubject= mysqli_query($this->db,"SELECT * FROM events where event_id='$event_id'");

		while($getRow=mysqli_fetch_object($queryGetsubject))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}	

	public function update_events($event_id,$venue,$event_title,$event_type,$event_date,$course_participants,$batch_participants)
	{
		$updateQuery="UPDATE events SET venue='$venue', event_title='$event_title', event_type='$event_type', event_date='$event_date', course_participants='$course_participants', batch_participants='$batch_participants' where event_id='$event_id'";
		
		$result = mysqli_query($this->db,$updateQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Updated";

	}


	public function delete_election($election_id)
    {
    	$deleteQuery="DELETE from election where election_id=$election_id";
		
		$result = mysqli_query($this->db,$deleteQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
	}

	public function geteditelection($election_id) 
    {
        $data = array();

		$queryGetsubject= mysqli_query($this->db,"SELECT * FROM election where election_id='$election_id'");

		while($getRow=mysqli_fetch_object($queryGetsubject))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}	


	public function update_election($election_id,$election_title,$election_date,$position1,$nomination_start_date,$nomination_due_date)
	{
		$updateQuery="UPDATE election SET election_title='$election_title', election_date='$election_date', position1='$position1', start_date='$nomination_start_date', due_date='$nomination_due_date' where election_id='$election_id'";
		
		$result = mysqli_query($this->db,$updateQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Updated";

	}

	public function geteditnominee($nominee_id) 
    {
        $data = array();

		$queryGetsubject= mysqli_query($this->db,"SELECT * FROM nominee where nominee_id='$nominee_id'");

		while($getRow=mysqli_fetch_object($queryGetsubject))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}	


	public function view_profile($user_id) 
    {
        $data = array();

		$queryGetsubject= mysqli_query($this->db,"SELECT * FROM users where user_id='$user_id'");

		while($getRow=mysqli_fetch_object($queryGetsubject))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}	

	public function get_envited($course,$batch)
    {
        $data = array();

		$queryGetposition = mysqli_query($this->db,"SELECT * from users where course='$course' and yeargraduated='$batch'");

		while($getRow=mysqli_fetch_object($queryGetposition))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function search_keyword($search_keyword)
    {
		$data = array();
		
		$wordsAry = explode(" ", $search_keyword);
	
		$wordsCount = count($wordsAry);
		
		$queryCondition = " WHERE ";
		for($i=0;$i<$wordsCount;$i++) {
			$queryCondition .= "event_title LIKE '%" . $wordsAry[$i] . "%' or election_title LIKE '%" . $wordsAry[$i] . "%' ";
			if($i!=$wordsCount-1) {
				$queryCondition .= " OR ";
			}
		}
		$sql = "SELECT * FROM events,election " . $queryCondition;
		

		$get_query = mysqli_query($this->db,$sql);

		while($getRow=mysqli_fetch_object($get_query))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function highlightKeywords($text, $keyword) {
		$wordsAry = explode(" ", $keyword);
		$wordsCount = count($wordsAry);
		
		for($i=0;$i<$wordsCount;$i++) {
			$highlighted_text = "<span style='font-weight:bold;background-color:black;color:white;'>$wordsAry[$i]</span>";
			$text = str_ireplace($wordsAry[$i], $highlighted_text, $text);
		}

		return $text;
	}


	public function search_batch($batch)
    {
        $data = array();
		
		$sql = mysqli_query($this->db,"SELECT * FROM events,election WHERE batch_participants='$batch' ");
		while($getRow=mysqli_fetch_object($sql))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}

	public function insert_preregister($event_id,$firstname,$lastname)
    {
    	$insertQuery="INSERT into guest(event_id,firstname,lastname) values('$event_id','$firstname','$lastname')";
		$result = mysqli_query($this->db,$insertQuery);
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Save";
	}

	public function view_guest($event_id)
    {
        $data = array();
		
		$sql = mysqli_query($this->db,"SELECT * FROM guest where event_id='$event_id'");
		while($getRow=mysqli_fetch_object($sql))    		
		{    			
		  $data[] = $getRow; // add the row in to the results (data) array
		}
		return $data;     
	}
	public function delete_guest($guest_id)
    {
		$deleteQuery="DELETE from guest where guest_id=$guest_id";
		
		$result = mysqli_query($this->db,$deleteQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
	}

	public function get_eventss($event_id)
    {
        $data = array();
		
		$sql = mysqli_query($this->db,"SELECT * FROM events where event_id='$event_id'");
		while($getRow=mysqli_fetch_object($sql))    		
		{    			
		  $data[] = $getRow; 
		}
		return $data;     
	}

	public function guest_events($event_id)
    {
        $data = array();
		
		$sql = mysqli_query($this->db,"SELECT * FROM guest where event_id='$event_id'");
		while($getRow=mysqli_fetch_object($sql))    		
		{    			
		  $data[] = $getRow; 
		}
		return $data;     
	}

	public function view_article1($news_id)
    {
        $data = array();
		$sql = mysqli_query($this->db,"SELECT * FROM add_news where news_id='$news_id'");
		while($getRow=mysqli_fetch_object($sql))    		
		{    			
		  $data[] = $getRow; 
		}
		return $data;     
	}

	public function vote_entry()
    {
		$result = mysqli_query($this->db,"SELECT * FROM votes WHERE voters_id='".$_SESSION['user_id']."'") or die ("Could not search");
  		$rowcount=mysqli_num_rows($result);
  		if($rowcount>0){
	  		return 'found';
  		}else{
	  		return 'notfound';
  		}
	}


}	
?>
