<?php
include 'connect.php';
//  $result = mysqli_query($conn,$query);
 session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/
    fontawesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="aboutus.css">
  <link rel="stylesheet" href="homepage.css">
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
               <img src="close.svg" alt="close">
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
                      <li class="menu-item"><a href="#">View Jobs</a></li>
                      <li class="menu-item"><a href="/postjob.php">Post Jobs</a></li>
                  </ul>
               </li>
               <li class="menu-item">
                  <a href="#">News</a>
               </li>
               <li class="menu-item menu-item-has-children">
                  <a href="#" data-toggle="sub-menu">
                     Welcome, <?php echo $_SESSION['user_name']; ?>
                     <i class="plus"></i></a>
                  <ul class="sub-menu">
                      <li class="menu-item"><a href="logout.php">Logout</a></li>
                      <li class="menu-item"><a href="profile.php">Profile</a></li>
                      <!-- <li class="menu-item"><a href="Profile.php?jobId=<?php echo $row['job_id']; ?>">Profile</a></li> -->
                  </ul>
               </li>
            </ul>
          </nav>
          <!-- navigation menu end -->
       </div>
    </div>
 </header>
 <script src="aboutus.js"></script>
 <!-- header end -->

 
        <!-- About Start -->
        <div class="container-xxl py-5">
         <div class="container">
             <div class="row g-5 align-items-center">
                 <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                     <!-- <div class="row g-0 about-bg rounded overflow-hidden">
                         <div class="col-6 text-start">
                             <img class="img-fluid " src="img/bg.jpeg">
                         </div>
                         <div class="col-6 text-start">
                             <img class="img-fluid" src="img/bg4.jpg" style="width: 85%; margin-top: 15%;">
                         </div>
                         <div class="col-6 text-end">
                             <img class="img-fluid" src="img/download (1).jpeg" style="width: 85%;">
                         </div>
                         <div class="col-6 text-end">
                             <img class="img-fluid w-100" src="img/a.jpg">
                         </div>
                     </div> -->
                 </div>
                 <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                     <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                     <p class="mb-3">TechJob is your go-to platform for tech-related career opportunities.
                          We offer a comprehensive database of job listings and resources tailored to the tech industry.
                           Join us in shaping the future of technology.</p>
                     <p><i class="fa fa-check me-3"></i>Empower Tech Professionals: Empower tech professionals by providing tools and resources for career advancement.</p>
                     <p><i class="fa fa-check me-3"></i>Connect Talent and Companies: Connect talented individuals with top tech companies for meaningful career opportunities.</p>
                     <p><i class="fa fa-check me-3"></i>Simplifying the Job Search: Simplify the tech job search process for professionals.</p>
                     <p><i class="fa fa-check me-3"></i>Facilitate Career Growth: Facilitate career growth in the tech industry through diverse job opportunities.</p>
                     <p><i class="fa fa-check me-3"></i>Support Tech Innovation: Support tech innovation by matching skilled individuals with innovative companies.</p>
                    
                     <!-- <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a> -->
                     <p class="mb-3">At TechJob, we're committed to being your premier destination for tech career opportunities.
                          Our platform is designed to empower professionals like you with the tools and resources needed to thrive in the ever-evolving tech industry.
                           Whether you're seeking your next challenge, aiming for career growth, or looking to make a meaningful impact,
                          TechJob is here to support your journey. </p>
                 </div>
                 
                 <div class="team">
                      <h1>Meet Our Team</h1>
                      <div class="team-member">
                          <h2>Suman KC</h2>
                          <p>Position: CEO</p>
                          <!-- <p>Description: John is the visionary leader behind our company, driving innovation and growth.</p> -->
                      </div>
                      <div class="team-member">
                          <h2>Aarati Rai</h2>
                          <p>Position: CTO</p>
                          <!-- <p>Description: Jane oversees our technical operations, ensuring that our products are at the cutting edge of technology.</p> -->
                      </div>
                      <div class="team-member">
                          <h2>Shreya Shrestha</h2>
                          <p>Position: Lead Developer</p>
                          <!-- <p>Description: Mike leads our development team, bringing our ideas to life with his coding expertise.</p> -->
                      </div>
                  </div>
             </div>
         </div>
     </div>
     <!-- About End -->

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
         <li><a href="/aboutus/aboutus.php">About TechJob</a></li>
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
