<html>
<body>
<?php
$title='Contact Us';
include('header1.php');
?>
     </div>
	</div>
    <div class="login">
       <div class="wrap">
	    <ul class="breadcrumb breadcrumb__t"><a class="home" href="#">Home</a>  / Contact</ul>
		   <div class="content-top">
			   <form method="post" action="../igdtuw/contact-post.html">
					<div class="to">
                     	<input type="text" class="text" value="Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}">
					 	<input type="text" class="text" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}" style="margin-left: 10px">
					</div>
					<div class="to">
                     	<input type="text" class="text" value="Your Website, if any" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Website';}">
					 	<input type="text" class="text" value="Subject" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Subject';}" style="margin-left: 10px">
					</div>
					<div class="text">
	                   <textarea value="Message:" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
	                </div>
	                <div class="submit">
	               		<input type="submit" value="Submit">
	                </div>
               </form>
                <div class="map">
					<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.co.in/maps/place/Indira+Gandhi+Delhi+Technical+University+for+Women/@28.663955,77.2332487,15z/data=!4m2!3m1!1s0x0:0x18af65ea2cfe3eb9&amp;output=embed"></iframe><br><small><a href="https://www.google.co.in/maps/place/Indira+Gandhi+Delhi+Technical+University+for+Women/@28.663955,77.2332487,15z/data=!4m2!3m1!1s0x0:0x18af65ea2cfe3eb9" style="color:#666;text-align:left;font-size:12px">View Map</a></small>
				</div>
            </div>
       </div> 
    </div>
   <?php
   
   include('footer.html');
   ?>
   </body>
   </html>