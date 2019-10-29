<nav class="navbar navbar-expand-sm bg-dark navbar-dark nav justify-content-center" style="background-color:">
<div class="container">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active btn-outline-primary">
        <a class="nav-link btn-outline-danger" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item active btn-outline-primary">
      <a class="nav-link  btn-outline-danger" href="index.php?page=create_user_events">Events</a>
      </li>

      <li class="nav-item dropdown bg-primary active">
        <a class="nav-link dropdown-toggle btn-outline-danger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Election
        </a>
        <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
          <a class="nav-link btn-outline-dark text-light" href="index.php?page=vote">Vote</a>
          <a class="nav-link btn-outline-dark text-light" href="index.php?page=nomination">Election Nomination</a>
          <!--<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>-->
        </div>
      </li>

      <li class="nav-item active btn-outline-primary">
      <a class="nav-link  btn-outline-danger" href="index.php?page=user_add_news">News</a>
      </li>

      <li class="nav-item active btn-outline-primary">
        <a class="nav-link  btn-outline-danger" href="index.php?page=view_user">Directory</a>
      </li>


      <li class="nav-item dropdown bg-primary active">
        <a class="nav-link dropdown-toggle btn-outline-danger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Settings
        </a>
        <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
          
          <a class="nav-link btn-outline-dark text-light" href="index.php?page=user_change_password">Update Profile</a>
        </div>
      </li>



    </ul>
    

    <ul class="navbar-nav ml-auto">
      <form class="form-inline my-2 my-lg-0">
        <li class="nav-item btn-info">
          WELCOME-
            <?php 
              echo $_SESSION['firstname1'].'  '.$_SESSION['lastname1'];
            ?> 
        </li>

        <span class="m-1"> 

        </span>
        <a class="btn btn-outline-success my-2 my-sm-0" href="index.php?page=logout">Logout</a>
      </form>
    </ul>


  </div>
</div>
</nav>