

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>University web design</title>
	<link rel="stylesheet" type="text/css" href="style.css"> <!--connect css to htmt page-->
	<!--Google fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

<!--Awesome font 4 cdn-->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!--Header-->
<section class="sub-header">
	<nav>
		<a href="Index.html"><img src="images/logo.png"></a>
		<div class="nav-links" id="navLinks"><!--Tab menu-->
			<!--Awesome close btn-->
 		<i class="fa fa-window-close" onclick="hideMenu()"></i><!--Hide menu by using javascript-->
			<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="about.php">ABOUT</a></li>
			<li><a href="course.php">COURSE</a></li>
			<li><a href="blog.php">BLOG</a></li>
			<li><a href="contact.php">CONTACT</a></li>	
			</ul>
			
		</div>
		<!--Awesome menu btn-->
		 <i class="fa fa-bars" onclick="showMenu()"></i><!--Show menu by using javascript-->
	</nav>
	<h1>About Us</h1>
</section>

<!----About us content--->
<section class="about-us">
	<div class="row">
		<div class="about-col">
			<h1>We are the world's largest University</h1>
			<p>The calls were very costly. ISD 
				and STD were used to pass on urgent messages only and the rest of the routine 
				communication was done using letters since it was a relatively very cheap. Now internet have 
				made it possible to not only talk but use video conference using popular applications like 
				skype, gtalk etc.</p>
				<a href="more.php" class="hero-btn red-btn">EXPLORE NOW</a>
		</div>
		<div class="about-col">
			<img src="images/about.jpg">
		</div>
	</div>
</section>


<!-----Footer---->
<section class="footer">
	<h4>About Us</h4>
	<p>The calls were very costly. ISD 
				and STD were used to pass on urgent messages only and the<br> rest of the routine 
				communication was done using letters since it was a relatively very cheap.<br> Now internet have 
				made it possible to not only talk but use video conference using popular<br> applications like 
				skype, gtalk etc.</p>
	<div class="icons">
				<i class="fa fa-facebook"></i>
				<i class="fa fa-twitter"></i>
				<i class="fa fa-instagram"></i>
				<i class="fa fa-linkedin"></i>			
	</div>
	<p>Made with <i class="fa fa-heart-o">by Technology Center</i></p>
</section>


<!--Javscript for Toggle Menu-->
<script>
	var navLinks= document.getElementById("navLinks");
	function showMenu() {
		navLinks.style.right="0";
	}
	function hideMenu() {
		navLinks.style.right="-200px";
	}
</script>


</body>
</html>