<?php
 
include 'connect.php';
 $query = "select * from job_list";
 
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
    <link rel="stylesheet" href="joblist.css">

    <title>JobList</title>
</head>

<body>
  <!-- header start -->
  <header class="header">
    <div class="container">
       <div class="header-main">
          <div class="logo">
             <a href="#">TECHJobs</a>
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
                      <li class="menu-item"><a href="#">Post Jobs</a></li>
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
 <div class="container1">
    <section id="banner">
      <div class="banner-text">
        <h1>JobDetails</h1>
        <p>Choose a job that fuels your passion and watch your daily efforts turn into a fulfilling journey.</p>
        <div class="banner-button">
          <a href="homepage.php"><span></span>Home</a>
          <a href="joblist.php"><span></span>Job Lists</a>
        </div>
      </div>
    </section>
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
                         <img class="img-fluid border rounded" <?php echo '<img src ="data:comapany_logo;base64,' . base64_encode($row['company_logo']).'"  alt="" style="width: 80px; height: 80px;" '; ?>>
                         <div class="text-start ps-4">
                             <h3><?php echo $row['job_name']; ?></h3>
                             <span class="text-truncate me-3"><a><i class="fa fa-briefcase"></i></a>  <?php echo $row['company_name']; ?></span>
                             <span class="text-truncate me-3"><a><i class="fa fa-map-marker-alt"></i></a><?php echo $row['company_address']; ?></span>
                         </div>
                         <a href="JobDetails.php?jobId=<?php echo $row['job_id']; ?>" class="button">Apply Now</a>
                           <!-- <a href="" class="button">Apply Now</a> -->
                    </div>
                  </div>
                     <?php
                        }
                        }
                     ?>

                   
                </div>
            </div>
             <!--new job endss-->
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
