<?php 

$metaTitle = "Lady You Med Spa Gallery";
$metaDescription = "Gallery of before and After photos, tumescuent liposuction, laser hair removal, laser tattoo removal, skin rejuvenation and much more.";

include 'includes/includes.php'; 
/* include 'includes/header.php'; */
?>

 <div id="containAll" style="background:#463833;">    
    
  <!-- content begin -->
    <div id="content" >
      
      <div class="container">
        <div class="row">
        <div class="span4 offset4 well">
          <legend>Book Appointment Log in</legend>
                <div class="alert alert-error">

                    <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
                </div>
          <form method="POST" action="" accept-charset="UTF-8">
          <input type="text" id="username" class="span4" name="username" placeholder="Username">
          <input type="password" id="password" class="span4" name="password" placeholder="Password">
                <label class="checkbox">
                  <input type="checkbox" name="remember" value="1"> Remember Me
                </label>
          <button type="submit" name="submit" class="btn btn-warning btn-block">Sign in</button>
          </form>    
        </div>

        <div class="span4 offset4 well">
          <legend>First time signing in?</legend>
              <a type="submit" name="submit" class="btn btn btn-block" href="createAccount.php">Create account</a>
          </form>    
        </div>
      </div>
    </div>

  </div>
  <!-- content close -->

 </div>
<?php 
include 'includes/footerSignIn.php';
include 'includes/footerPost.php';
?>


	
  
    
    

    
 