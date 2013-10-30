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
          <div class="span6 offset2 well">
         <form class="form-horizontal">
                <fieldset>
                    <!-- Address form -->
             
                    <div style="margin: 10px auto 20px auto; text-align:center;"><h3>Create an Account</h3></div>
             

                    

                    <!-- full-name input-->
                    <div class="control-group">
                        <label class="control-label">Full Name</label>
                        <div class="controls">
                            <input id="full-name" name="full-name" type="text" placeholder="full name"
                            class="input-xlarge">
                            <p class="help-block"></p>
                        </div>
                    </div>

                    <!-- full-name input-->
                    <div class="control-group">
                        <label class="control-label">Phone</label>
                        <div class="controls">
                            <input id="Phone" name="Phone" type="text" placeholder="Phone"
                            class="input-xlarge">
                            <p class="help-block"></p>
                        </div>
                    </div>

                    <!-- full-name input-->
                    <div class="control-group">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input id="email" name="email" type="text" placeholder="Email"
                            class="input-xlarge">
                            <p class="help-block"></p>
                        </div>
                    </div>

                    <!-- address-line1 input-->
                    <div class="control-group">
                        <label class="control-label">Address Line</label>
                        <div class="controls">
                            <input id="address-line1" name="address-line1" type="text" placeholder="Address"
                            class="input-xlarge">
                            <p class="help-block">Street address, P.O. box, company name, c/o</p>
                        </div>
                    </div>
                    
                    <!-- city input-->
                    <div class="control-group">
                        <label class="control-label">City / Town</label>
                        <div class="controls">
                            <input id="city" name="city" type="text" placeholder="city" class="input-xlarge">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    
                    <!-- postal-code input-->
                    <div class="control-group">
                        <label class="control-label">Zip / Postal Code</label>
                        <div class="controls">
                            <input id="postal-code" name="postal-code" type="text" placeholder="zip or postal code"
                            class="input-xlarge">
                            <p class="help-block"></p>
                        </div>
                    </div>
                  
                </fieldset>
                <div style="text-align:center; width:100%;"><button type="submit" name="submit" class="btn btn-warning btn-medium">Create Account</button></div>
            </form>
          </div>
      </div>
    </div>


  </div>
 </div>
<?php 
include 'includes/footerSignIn.php';
include 'includes/footerPost.php';
?>


	
  
    
    

    
 