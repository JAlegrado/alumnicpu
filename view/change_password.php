<div class="container-fluid mt-0 mb-2">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4  col-md-offset-1" style="background-color:#030A28;font-size:22px;color:white;">
            <fieldset>
            <form enctype="multipart/form-data" action="index.php?page=change_password" name="form" method="post">
            <div class="form-group">
			    <div class="input-group">
				    <span class="input-group-addon">
				    <i class="glyphicon glyphicon-user"></i>
				    Change Password:
				    </span> 
                </div>
                                    
			    <div>
                    <?php 
                    if(isset($password)){
                        echo "<input class='form-control text-center' name='password' type='Password' value='".$password."' autofocus>";
                    }else{
                       
                        echo "<input class='form-control text-center' name='password' type='Password'  autofocus>";
                    }
				        
                    ?>
                </div>
            </div>
            <div class="form-group">
			    <input type="hidden" class="btn btn-lg btn-primary btn-block" name="register" value=1>
            </div>        
		    <div class="form-group">
			    <input type="submit" class="btn btn-lg btn-primary btn-block text-center bg-transparent" style="border:30px solid;border-color:black;" value="Update Password">
		    </div>
            </form>    
		    </fieldset>
        </div>
    </div>
</div>