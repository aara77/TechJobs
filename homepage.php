<?php

include 'connect.php';
 $query = "select * from job_list limit 5";
 $result = mysqli_query($conn,$query);

?>

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
    <link rel="icon" href="img/techjobs-high-resolution-logo-white-transparent.png" type="image/icon type">
    <title>TechJobs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
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
                  <a href="aboutus/aboutus.html">About</a>
               </li>
               <li class="menu-item menu-item-has-children">
                  <a href="#" data-toggle="sub-menu">Jobs <i class="plus"></i></a>
                  <ul class="sub-menu">
                      <li class="menu-item"><a href="login/login.php">View Jobs</a></li>
                      <li class="menu-item"><a href="login/login.php">Post Jobs</a></li>
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
    <section id="banner">
      <div class="banner-text">
        <h1>TechJobs</h1>
        <p>“In the middle of difficulty lies opportunity.” —Albert Einstein</p>
        <div class="banner-button">
          <a href="login\login.php"><span></span>View Jobs</a>
          <a href="login\login.php"><span></span>Post Jobs</a>
        </div>
      </div>
    </section>

        <div class="container">
            <div class="centered">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input type="text" placeholder="search">
            </div>
            
            <!--new job start-->
            <div class="browser">
               <h1 class="heading">New Jobs</h1>
                <div class="browser-container">
 
                      <?php
                       if(mysqli_num_rows($result)>0){
                         while($row = mysqli_fetch_assoc($result)){
                      ?> 
           
                      <div class="box">
                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                          <img class ="img-fluid border rounded" img src= "<?php echo "image/".$row['company_logo']; ?>"alt="img" style="width: 80px; height: 80px;">
                              <div class="text-start ps-4">
                                 <h3><?php echo $row['job_name']; ?></h3>
                                 <span class="text-truncate me-3"><a><i class="fa fa-briefcase"></i></a>  <?php echo $row['company_name']; ?></span>
                                 <span class="text-truncate me-3"><a><i class="fa fa-map-marker-alt"></i></a><?php echo $row['company_address']; ?></span>
                             </div>
                             <a href="login/login.php" class="button">Apply Now</a>
                        </div>
                      </div>
                      <?php
                         }
                         }
                      ?>
                </div>
                 <a href="login/login.php" class="btn">Browse more jobs</a>
             </div>
           </div>
            <!--new job endss-->

    <!---whyus start-->
    <div class="container1">
      <h1 class="heading">Why us</h1>
      <div class="box-container">
        <div class="boxs">
          <div class="font">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
          <h3>User-Friendly Interface</h3>
          <p>Easier to navigate through job listings
            and manage your job search.
          </p>
        </div>

        <div class="boxs">
          <div class="font">
            <i class="fa fa-lock" aria-hidden="true"></i>
          </div>
          <h3>Maintained Privacy</h3>
          <p> Reserve all your skills, achievements, and experience private.
          </p>
        </div>

        <div class="boxs">
          <div class="font">
            <i class="fa fa-building" aria-hidden="true"></i>
          </div>
          <h3>Company Information</h3>
          <p> Detailed information about the hiring companies,
            including their culture and employee reviews.
          </p>
        </div>
      </div>
    </div>
    <!--whyus end-->

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