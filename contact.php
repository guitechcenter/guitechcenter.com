
<?php 
    session_start();

    include("connect.php");
    include("func.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST")
     {
        // Something was posted
       $user_name = $_POST['user_name'];
       $email =  $_POST['email'];
       $subject =  $_POST['subject'];
       $message =  $_POST['message'];


       if (!empty($user_name) && !empty($email) && !empty($subject) && !empty($message) ) 
       {
            //save data to database
            $user_id = random_num(20);
            $query = "insert into customer(user_id,user_name,email,subject,message) value('$user_id', '$user_name','$email','$subject','$message')";

           mysqli_query($con, $query);

          header("Location: index.php");
          die;
       }else
       {
            echo "Please enter some valid information";
       }
    }
 ?>



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
            <li><a href="course.html">COURSE</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="contact.php">CONTACT</a></li> 
            </ul>
            
        </div>
        <!--Awesome menu btn-->
         <i class="fa fa-bars" onclick="showMenu()"></i><!--Show menu by using javascript-->
    </nav>
    <h1>Contact Us</h1>
</section>

<!----contact us--->
<section class="facilities">
    <h1>Meet your world's class Technology Center</h1>
    <p>Today internet have crosses every barrier and have changed the way we use to talk</p>

    <div class="row">
        <div class="facilities-col">
            <img src="images/tech1.jfif">
            <h3>Cloud Computing</h3>
            <p>Sometimes we interchangeably use the term internet and world wide web or simply the web, 
            as it is popularly known as</p>
        </div>
        <div class="facilities-col">
            <img src="images/tech2.jfif">
            <h3>Data Science</h3>
            <p>Sometimes we interchangeably use the term internet and world wide web or simply the web, 
            as it is popularly known as</p>
        </div>
        <div class="facilities-col">
            <img src="images/tech3.jfif">
            <h3>The Biggest Innovation</h3>
            <p>Sometimes we interchangeably use the term internet and world wide web or simply the web, 
            as it is popularly known as</p>
        </div>
    </div>
</section>
<section class="facilities">
    <div class="row">
        <div class="facilities-col">
            <img src="images/tech4.jfif">
            <h3>Sweetest Meeting</h3>
            <p>Sometimes we interchangeably use the term internet and world wide web or simply the web, 
            as it is popularly known as</p>
        </div>
        <div class="facilities-col">
            <img src="images/tech5.jfif">
            <h3>Enter into Virtual Life</h3>
            <p>Sometimes we interchangeably use the term internet and world wide web or simply the web, 
            as it is popularly known as</p>
        </div>
        <div class="facilities-col">
            <img src="images/tech.jfif">
            <h3>Having the World in the Hand</h3>
            <p>Sometimes we interchangeably use the term internet and world wide web or simply the web, 
            as it is popularly known as</p>
        </div>
    </div>
</section>
<section class="cta-location">
    
    <a href="" class="hero-btn">CONTACT US</a>
</section>  

<section class="conact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>XYZ Road ABC Building</h5>
                    <p>Accra, Ghana, IN</p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>+233 235 906 915</h5>
                    <p>Monday to Friday, 8AM to 6PM</p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>kabaabou120@gmail.com</h5>
                    <p>Email us your query</p>
                </span>
            </div>
        </div>
<!---Contact form---->
    <div class="contact-col">
        <!---Connect PHP form to html form---->
<form method="post">
<input type="text" name="user_name" placeholder="Enter your name" required>
<input type="email" name="email" placeholder="Enter email address" required>
 <input type="text" name="subject" placeholder="Enter your subject" required>
 <textarea rows="8" name="message" placeholder="Message" required></textarea>
 <button type="submit" class="hero-btn red-btn">Send Message</button>
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


 