
<html>
<body>
<?php
$title='Post An Advertisement';
include('header1.php');
?>


<!-- main page starts here-->

		<div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">Post Your Advertisement here</h4>
    		   <form method="POST">
    			 <div class="col_1_of_2 span_1_of_2">
		   			 <div>Book Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="text" value="" name="p1" id="p1" style="width:400px" required maxlength="30" 
					 aria-describedby="name-format" aria-required="true" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" title="Book Name"></div>
					 <div>Publishing Year:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" value="" name="p2" id="p2" maxlength="4" 
					 style="width:400px" required  minlength="4"></div>
		    			<div>MRP Of Book:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" value="" name="p3" id="p3" style="width:400px" ></div>
		    			<div>Bidding Duration:&nbsp;&nbsp;&nbsp;&nbsp;
						<select id="p4" name="duration" name="p4" style="width:400px" onChange="change_country(this.value)" 
						class="frm-field required">
		            <option value="null">Bidding Duration</option>         
		            <option value="1day">1 DAY</option>
		            <option value="2days">2 DAYS</option>
		           	<option value="3days">3 DAYS</option>
		            <option value="4days">4 DAYS</option>
		            <option value="5days">5 DAYS</option>
		            <option value="6days">6 DAYS</option>
		            <option value="7days">7 DAYS</option>
		         </select></div>
				 
				 <!-- Image Uploading-->
				 
		    			<p class="title"> Images Of The Book (Not more than 2 MB)</p><br/>
		    			<div><input type="file" name="photo1" id="photo1" required></div>
		    			<div><input type="file" name="photo2" id="photo2" required></div>
		    			<div><input type="file" name="photo3" id="photo3" required></div>
		    	 </div>
		    	  <div class="col_1_of_2 span_1_of_2">	
		    		<div>Author Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" value="" name="p5" id="p5" required maxlength="30" style="width:400px"
					 aria-describedby="name-format" aria-required="true" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" title="Author Name"></div>
		    		<div>Rarity Of Book:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<select id="p6" name="rarity" name="p6" onChange="change_country(this.value)" style="width:400px" class="frm-field required">
		            <option value="null">Rarity Of Book</option>         
		            <option value="Rare">Rare</option>
		            <option value="Non">Non-Rare</option>
		           
		         </select></div>		        
		          <div>Category Of Book:&nbsp;&nbsp;&nbsp;
				  <select id="category" name="category" name="p7" id="p7" style="width:400px" 
				  onChange="change_country(this.value)" class="frm-field required">
		            <option value="null">Category Of Book</option>         
		            <option value="cs">Computer Science</option>
		            <option value="phy">Physics</option>
		           <option value="chem">Chemistry</option>
		            <option value="maths">Mathematics</option>
		            <option value="electronics">Electronics</option>
		            <option value="economics">Economics</option>
		            <option value="english">English</option>
		            <option value="biography">Biography</option>
		            <option value="magazine">Magazines</option>
		            <option value="novels">Novels</option>
		            <option value="comics">Comics</option>
		            <option value="myth">Mythological Books</option>
		         </select></div>		        
		           <div>
		          </div>
		          	Minimum Bid Price:&nbsp;&nbsp;<input type="text" value=""  name="p8" id="p8" style="width:400px">
		          	
		          </div>
		      
		    <p class="terms" >By clicking 'Submit' you agree to the <a href="delivery.php">Terms &amp; Conditions</a>.</p>
		    <div class="submit">
	               		<input type="submit" name="p10" id="p10" value="Submit">
	                </div>
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>


<!-- Footer-->
        <?php
   
   include('footer.html');
   ?>
   </body>
   </html>