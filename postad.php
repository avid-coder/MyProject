
<html>
<body>
<?php
$title='Post An Advertisement';
include('header1.php');
require_once 'connection.php';

//server connection
$server=mysqli_connect($hostname, $username, $password);
if(!$server)
	die("Unable to connect to mySQL: ".mysqli_connect_error());
mysqli_select_db($server,$dbname)
	or die("Unable to select database: ".mysqli_error($server));
	
//saving details of each person in a directory
extract($_POST);
if(isset($sub))
{	
	if(!empty($title) || !empty($year) || !empty($mrp) || !empty($duration) || !empty($photo1) || !empty($photo2) || !empty($photo3) || !empty($author) || !empty($rarity) ||!empty($category) || !empty($email))
	{	
		if(!is_dir("D:/PHP/htdocs/final/user/$email"))
		{
			echo "Email is not registered";
		}
		else if(is_dir("D:/PHP/htdocs/final/user/$email/$title"))
		{
			echo "already exists";
		}
		else
		{	
			//file upload
			
			$tmp1=$_FILES['photo1']['tmp_name'];
			$fn1=$_FILES['photo1']['name'];
			$ty1=$_FILES['photo1']['type'];
			$tmp2=$_FILES['photo2']['tmp_name'];
			$fn2=$_FILES['photo2']['name'];
			$ty2=$_FILES['photo2']['type'];
			$tmp3=$_FILES['photo3']['tmp_name'];
			$fn3=$_FILES['photo3']['name'];
			$ty3=$_FILES['photo3']['type'];
			if(($ty1== "image/jpg" || $ty1=="image/png" || $ty1=="image/jpeg") && ($ty2== "image/jpg" || $ty2=="image/png" || $ty2=="image/jpeg")
			&& ($ty3== "image/jpg" || $ty3=="image/png" || $ty3=="image/jpeg"))
			{	
				mkdir("D:/PHP/htdocs/final/user/$email/$title");
				if((move_uploaded_file($tmp1,"D:/PHP/htdocs/final/user/$email/$title/$fn1")) && 
				(move_uploaded_file($tmp2,"D:/PHP/htdocs/final/user/$email/$title/$fn2")) && 
				(move_uploaded_file($tmp3,"D:/PHP/htdocs/final/user/$email/$title/$fn3")))
				{
					
					//database connection
			
					$query="INSERT INTO postad(title,year,mrp,duration,email,author,rarity,category) VALUES
					('$title','$year','$mrp','$duration','$email','$author','$rarity','$category')";
					$result=mysqli_query($server,$query);
					if(!$result)
						die("Database not updated: ".mysqli_error($server));
				
					date_default_timezone_set('Asia/Calcutta');
					
					file_put_contents("D:/PHP/htdocs/final/user/$email/$title/ad.txt","Title: $title\r\nYear of Publication: $year\r\nEmail: $email\r\nM.R.P: $mrp\r\nBidding Duration: $duration\r\nAuhtor of Book: $author\r\nRarity of Book: $rarity\r\n\r\nCategory of Book: $category\r\nPosted On:".date('Y-m-d')." ".date('H:i:s'));
			
					//sending email when user registers
					/*
						$to=$email;
						$subject="welcome to bookbid";
						$message="hello!";
						$headers.="From: bookbid";
						mail($to,$subject,$message,$headers);
					*/
					
		
					echo"Ad Posted successfully";
				}
				else
				{
					echo "Uploading error";
				}
			}
			else
			{
				echo "Only jpeg, jpg and png files allowed";
			}
			
			
	}
	}
	
}		
			


?>


<!-- main page starts here-->

		<div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">Post Your Advertisement here</h4>
    		   <form method="POST" enctype="multipart/form-data" id="Form" name="Form">
    			 <div class="col_1_of_2 span_1_of_2">
		   			 <div>Book Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="text" value="" name="title" id="title" style="width:400px" required maxlength="30" ></div>
					 <div>Publishing Year:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					 <input type="text" value="" name="year" id="year" maxlength="4"  style="width:400px" required  
					 minlength="4" maxlength="4" pattern="^([1-9]{1})[0-9]{3}"></div>
		    			<div>MRP Of Book:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" value="" name="mrp" id="mrp" style="width:400px" minlength="2" maxlength="5" pattern="\d+(\.\d{2})?"></div>
		    			<div>Bidding Duration:&nbsp;&nbsp;&nbsp;&nbsp;
						<select id="duration" name="duration" style="width:400px" onChange="change_country(this.value)" 
						class="frm-field required">
		            <option value="null">Select Here</option>         
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
		    			<div><input type="file" name="photo1" id="photo1" required ></div>
		    			<div><input type="file" name="photo2" id="photo2" required></div>
		    			<div><input type="file" name="photo3" id="photo3" required></div>
		    	 </div>
		    	  <div class="col_1_of_2 span_1_of_2">	
		    		<div>Author Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" value="" name="author" id="author" required maxlength="30" style="width:400px" ></div>
		    		<div>Rarity Of Book:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<select id="rarity" name="rarity" onChange="change_country(this.value)" style="width:400px" class="frm-field required">
		            <option value="null">Select Here</option>         
		            <option value="Rare">Rare</option>
		            <option value="Non">Non-Rare</option>
		           
		         </select></div>		        
		          <div>Category Of Book:&nbsp;&nbsp;&nbsp;
				  <select id="category" name="category" style="width:400px" 
				  onChange="change_country(this.value)" class="frm-field required">
		            <option value="null">Select Here</option>         
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
		          Registered Email:&nbsp;&nbsp;&nbsp;&nbsp;
				  <input type="email" value=""  name="email" id="email" style="width:400px;padding: 10px 9px;border: 1px solid #EEE; 
				  color: #777; background: #FFF; outline: none;" required >
		          	
		          </div>
		      
		    <p class="terms" >By clicking 'Submit' you agree to the <a href="delivery.php">Terms &amp; Conditions</a>.</p>
		    <div class="submit">
	               		<input type="submit" name="sub" id="sub" value="Submit">
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