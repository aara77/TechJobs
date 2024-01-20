

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechJobs</title>
    <link rel="stylesheet" href="JobDetails.css">
</head>
<body>
    <!-- header start -->
  <header class="header">
    <div class="container">
      <div class="header-main">
        <div class="logo">
          <a href="#">TechJobs</a>
        </div>
        <div class="open-nav-menu">
          <span></span>
        </div>
        <div class="menu-overlay">
        </div>
        <!-- navigation menu start -->
        <nav class="nav-menu">
          <div class="close-nav-menu">
            <img src="img/close.svg" alt="close">
          </div>
          <ul class="menu">
            <li class="menu-item menu-item-has-children">
              <a href="homepage.php">Home</a>
            </li>
            <li class="menu-item">
              <a href="/aboutus/aboutus.html">About</a>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="#" data-toggle="sub-menu">Jobs <i class="plus"></i></a>
              <ul class="sub-menu">
                <li class="menu-item"><a href="#">View Jobs</a></li>
                <li class="menu-item"><a href="#">Post Jobs</a></li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="#">News</a>
            </li>
            <li class="menu-item">
              <a href="login/login.html">Login/Register</a>
            </li>
          </ul>
        </nav>
        <!-- navigation menu end -->
      </div>
    </div>
  </header>
  <script src="homepage.js"></script>
  <!-- header end -->
    <div class="mainbody">
        
    </div>
    <!--footer section start-->
<footer>
    <div class="footer-col">
            <h1>Tech<span>Job</span></h1>
            <!-- <p>Get job easily</p> -->
    </div>

    <div class="footer-col">
       <h4>For Jobseeker</h4>
        <ul>
           <li><a href="/login/login.html">Register</a></li>
           <li><a href="#">Search Jobs</a></li>
           <li><a href="/login/login.html">Login</a></li>
           <li><a href="#">FAQ</a></li>
        </ul>          
    </div>       

    <div class="footer-col">
       <h4>For Employer</h4>
       <ul>
          <li><a href="/login/login.html">Register</a></li>
          <li><a href="#">Post a Job</a></li>
          <li><a href="/login/login.html">Login</a></li>
          <li><a href="#">FAQ</a></li>
       </ul>
    </div>

    <div class="footer-col">
      <h4>About Us</h4>
      <ul>
         <li><a href="/aboutus/aboutus.html">About TechJob</a></li>
         <li><a href="#">Life at TechJob</a></li>
         <li><a href="#">Blogs</a></li>
         <li><a href="#">FAQs</a></li>
      </ul> 
    </div>

    <div class="footer-col">
       <h4>Follow us</h4>
       <div class="links">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
        </div>
    </div>   
</footer>
<!---footer section ends-->
</body>
</html>