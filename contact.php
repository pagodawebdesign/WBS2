<?php 

$metaTitle = "Contact Lady You of Tampa";
$metaDescription = "Thanks you for contacting Lady You of Tampa, helping patients look beautiful";

include 'includes/includes.php'; 
include 'includes/header.php';
?>


  <!-- subheader begin -->
	<div id="subheader">
    	<div class="container">
    	  <div class="row">
          	<div class="span12">
            	<h1>Contact Us</h1>
                <span>Thank you for contacting Lady You, we will respond to you shortly.</span>
            </div>
          </div>
    	</div>
    </div>
	<!-- subheader close -->  
        
   <div id="map-container">
        <!--<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.id/maps?q=itc+depok&amp;hl=id&amp;sll=-6.248411,106.833801&amp;sspn=0.371998,0.529404&amp;ie=UTF8&amp;view=map&amp;f=d&amp;daddr=Jl.+Margonda+Raya+Kav+56,+Depok+16431&amp;geocode=CXBfEqpsWd8iFV5wnv8dev5dBiFfQlEfkZZ3Xw&amp;ll=-6.393762,106.82329&amp;spn=0.006295,0.006335&amp;output=embed"></iframe>-->
        <div style="height:350px"><iframe height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=5907%2BWebb%2BRoad%2BTampa%2C%2BFlorida%2B33615&ie=UTF8&z=12&t=m&iwloc=near&output=embed"></iframe><br><table width="1200" cellpadding="0" cellspacing="0" border="0"><tr><td align="left"><small><a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=5907%2BWebb%2BRoad%2BTampa%2C%2BFlorida%2B33615&ie=UTF8&z=12&t=m&iwloc=near">View Larger Map</a></small></td></tr></table></div>
   </div>

	<!-- content begin -->
    <div id="content">
    	<div class="container">
        	<div class="row">
            	<div class="span8">
                	<h4>Get in touch with us now!</h4>
Feel free to contact us by contact to get more information.<br/><br/>
                	<div class="contact_form_holder">
              <form id="contact" class="row" name="form1" method="post" action="">
              
       			<div class="span4">
                <label>Name</label>
           		<input type="text" class="full" name="name" id="name"/>
           		</div>
                
                <div class="span4">
                <label>Email <span class="req">*</span></label>
           		<input type="text" class="full" name="email" id="email"/>
                <div id="error_email" class="error">Please check your email</div> 
				</div>
				
                <div class="span8">
                <label>Message <span class="req">*</span></label>
                <textarea cols="10" rows="10" name="message" id="message" class="full"></textarea>
                <div id="error_message" class="error">Please check your message</div>
                <div id="mail_success" class="success"> Thank you. Your message has been sent.</div>
<div id="mail_failed" class="error">Error, email not sent</div>

<p id="btnsubmit"><input type="submit" id="send" value="Send" class="btn btn-large"/></p>               
                </div>
                
                    
              </form>
            </div>
            
                </div> 
                    
              <div id="sidebar" class="span4">
              		
				<div class="widget latest_news">
                    	<h4 class="title">Information</h4>
                    	<ul class="list-news"> 
                            <li> <img src="img/Contact-US-Photo.jpg" alt="" class="img-polaroid">
                    	    <div class="text">
                    	      <h5>Give us a call</h5>
                    	      <span><strong>Phone:</strong>(813) 886-4395 </span><br/>
	                        <span><strong>Fax:</strong>(813) 886-6959</span>
	                    	</div>
	                  	    </li>

                            <li>
                                <img src="img/56-storefront.jpg" alt="" class="img-polaroid">
                                <div class="text"><h5>5907 Webb Road Tampa, Florida 33615</h5>
                              Right off of Hillsborough Ave, Go up Webb Rd and turn in before the Town and Country Hospital.</div>
                            </li>
                           
                            <li> <img src="img/hoursl.jpg" alt="" class="img-polaroid">
                              <div class="text">
                                <h5>Hours</h5>
                             <p>
								<strong>Monday:</strong> 9AM-5PM<br>
								<strong>Tuesday:</strong> 8AM-7PM<br>
								<strong>Wednesday:</strong> 9AM-5PM<br>
								<strong>Thursday:</strong> 9AM-7PM<br>
								<strong>Friday:</strong> 9AM-5PM<br>
								<strong>Saturday:</strong> Closed<br>
								<strong>Sunday:</strong> Closed
								</p>
								</div>
                            </li>


    					</ul>
                    </div>
              
              		 <!-- widget category --><!-- widget tags --><!-- widget text -->
			       	  <div class="widget widget-text">
			                	<h4 class="title"><span>Text Widget</span></h4>
			                	<div>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.                </div>
			       	  </div>
              </div>
        	</div>
</div>
        </div>
    </div>
	<!-- content close -->

<?php 
include 'includes/footer.php';
include 'includes/footerPost.php';
?>


	
  
    
    

    
 