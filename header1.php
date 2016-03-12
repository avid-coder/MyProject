
<!DOCTYPE HTML>
<html>

<head>
<title><?php echo $title ?></title>
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
<!--end slider -->
<script src="js/jquery.easydropdown.js"></script>
</head>
<body>
     <div class="header-top">
	   <div class="wrap"> 
			  <div class="header-top-left">
   				    
   				    <div class="clear"></div>
   			 </div>
			 <div class="cssmenu">
			 
				<ul>
					<?php 
					echo" 
					<li class=\"active\"><a href=\"login.php\">Account</a></li> |
					
					<li><a href=\"login.php\">Log In</a></li> |
					<li><a href=\"register.php\">Sign Up</a></li>
				</ul>
			</div>
			<div class=\"clear\"></div>
 		</div>
	</div>
	<div class=\"header-bottom\">
	    <div class=\"wrap\">
			<div class=\"header-bottom-left\">
				<div class=\"logo\" >
					<a href=\"index.php\" style=\"background-color:none; text-decoration:none;\">
					<font style=\" color:DeepSkyBlue; font-variant:small-caps; font-weight:bold; font-family:Ravie;font-size: 40px;  \">book</font>
					<font style=\" color:orange; font-weight:bold; font-family:Ravie;font-size: 40px\">bid</font>
					</a>
				</div>
				<div class=\"menu\">
	            <ul class=\"megamenu skyblue\">
			<li class=\"active grid\"><a href=\"index.php\">Home</a></li>
			<li><a class=\"color4\" href=\"#\">Books</a>
				<div class=\"megapanel\">
					<div class=\"row\">
						<div class=\"col1\">
							<div class=\"h_nav\">
								<h4>Course Books</h4>
								<ul>
									<li><a href=\"../womens.html\">Computer Science</a></li>
									<li><a href=\"../womens.html\">Physics</a></li>
									<li><a href=\"../womens.html\">Chemistry</a></li>
									<li><a href=\"../womens.html\">Mathematics</a></li>
									<li><a href=\"../womens.html\">Electronics</a></li>
									<li><a href=\"../womens.html\">Economics</a></li>
									<li><a href=\"../womens.html\">English</a></li>
								</ul>	
							</div>							
						</div>
						<div class=\"col1\">
							<div class=\"h_nav\">
								<h4>Other</h4>
								<ul>
									<li><a href=\"../womens.html\">Biographies</a></li>
									<li><a href=\"../womens.html\">Magazines</a></li>
									<li><a href=\"../womens.html\">Novels</a></li>
									<li><a href=\"../womens.html\">Comics</a></li>
									<li><a href=\"../womens.html\">Mythological Books</a></li>
								</ul>	
							</div>							
						</div>
					</div>
				</li>				
				<li><a class=\"color6\" href=\"other.php\">Best Bids</a></li>
				<li><a class=\"color6\" href=\"postad.php\">Post an Ad</a></li>
				
			</ul>
			</div>
		</div>
	   <div class=\"header-bottom-right\">
         <div class=\"search\">	  
				<input type=\"text\" name=\"s\" class=\"textbox\" value=\"Search\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Search';}\">
				<input type=\"submit\" value=\"Subscribe\" id=\"submit\" name=\"submit\">
				<div id=\"response\"> </div>
		 </div>
	  <div class=\"tag-list\">
	   <!-- <ul class=\"icon1 sub-icon1 profile_img\">
			<li><a class=\"active-icon c1\" href=\"#\"> </a>
				<ul class=\"sub-icon1 list\">
					<li><h3>sed diam nonummy</h3><a href=\"\"></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href=\"\">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul>-->
		<ul class=\"icon1 sub-icon1 profile_img\">
			<li><a class=\"active-icon c2\" href=\"#\"> </a>
				<ul class=\"sub-icon1 list\">
					<li><h3>No Products</h3><a href=\"\"></a></li>
					
				</ul>
			</li>
		</ul>
	    <ul class=\"last\"><li><a href=\"#\">Cart(0)</a></li></ul>
	  </div>
    </div>
     <div class=\"clear\"></div>
     </div>
	</div>"
	?>
