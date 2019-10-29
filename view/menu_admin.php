<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=create_events">Event</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Election
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?page=create_election">Election Proper</a>
          <a class="dropdown-item" href="index.php?page=nomination1">Nomination</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?page=position_entry">Add position</a>
        </div>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=add_news">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=view_user">Directory</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=reports">Reports</a>
      </li>
    </ul>
    
    <ul class="navbar-nav  " style="float:right" >
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="glyphicon glyphicon-cog"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="nav-link" href="index.php?page=upload_csv">Upload</a>
          <a class="nav-link" href="index.php?page=create_college">College</a>
          <a class="nav-link" href="index.php?page=create_course">Course</a>
          <div class="nav-link"></div>
          <a class="nav-link" href="index.php?page=logout">Logout</a>
        </div>
      </li>
      <li >
          Welcome, &nbsp; 
            <?php 
              echo $_SESSION['firstname1'].'  '.$_SESSION['lastname1'];
            ?> 
     </li> 
    
    
    
     <!--
    <li class="dropdown  nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="glyphicon glyphicon-cog"></span>
      <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?page=upload_csv">Upload</a>
          <a class="dropdown-item" href="index.php?page=create_college">College</a>
          <a class="dropdown-item" href="index.php?page=create_course">Course</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?page=change_password">Change Password</a>
          <a class="dropdown-item" href="index.php?page=logout">Logout</a>
      </div> -->
    </li>
    </ul>
      </nav>
       