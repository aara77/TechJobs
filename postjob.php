<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/
    fontawesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="homepage.css">
    <title>PostJob</title>
</head>

<body>
  <!-- header start -->
  <header class="header">
    <div class="container">
       <div class="header-main">
          <div class="logo">
             <a href="homepage.php">TECHJobs</a>
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
                  <a href="aboutus/aboutus.html">About</a>
               </li>
               <li class="menu-item menu-item-has-children">
                  <a href="#" data-toggle="sub-menu">Jobs <i class="plus"></i></a>
                  <ul class="sub-menu">
                      <li class="menu-item"><a href="joblist.php">View Jobs</a></li>
                      <li class="menu-item"><a href="postjob.php">Post Jobs</a></li>
                  </ul>
               </li>
               <li class="menu-item">
                  <a href="#">News</a>
               </li>
               <li class="menu-item">
                  <a href="login/login.php">Login/Register</a>
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
     <h1 class="heading"> Post A Job </h1>
     <div class="postbox">
        <div class="inbox">
          <label>Company Name:</label>
          <input type="text" name="cname"><br>
        </div>
        <div class="inbox">
          <label>Company Address:</label>
          <input type="text" name="caddress"><br>
        </div>
        <div class="inbox">
          <label>Select your Company Logo:</label>
          <input type="file" id="myfile" name="myfile"><br><br>
        </div>
        <div class="submit">
        <a href="#" class="submit">Submit</a>
        </div>
      </div>
</div>

<!--footer section start-->
<footer>
    <div class="footer-col">
            <h1>Tech<span>Jobs</span></h1>
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