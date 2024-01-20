<?php

include 'connect.php';
$query = "select * from job_list";
$result = mysqli_query($conn, $query);

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
  <link rel="stylesheet" href="slider.css">
  <title>TechJobs</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@1,200&display=swap"
    rel="stylesheet">
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
    <section id="banner">
      <div class="banner-text">
        <h1>TechJobs</h1>
        <p>“In the middle of difficulty lies opportunity.” —Albert Einstein</p>
        <div class="banner-button">
          <a href="login\login.html"><span></span>View Jobs</a>
          <a href="login\login.html"><span></span>Post Jobs</a>
        </div>
      </div>
    </section>

    <!--h2>Get and Post jobs! </h2>
    <p>Finding The Right Employee For The Right Employer</p-->
    <div class="container">
      <!--div class="background_image">
        <img src="img/jobsphoto.png">
      </div-->
      <div class="centered">
        <i class="fa fa-search" aria-hidden="true"></i>
        <input type="text" placeholder="search">
      </div>
      <!--slider start-->
      <div class="feat">
        
        <section id="tranding">
          <p>Featured IT Jobs</p>
          <div class="container">
            <div class="swiper tranding-slider">
              <div class="swiper-wrapper">

                <!-- Slide-start -->
                <div class="swiper-slide tranding-slide">
                  <div class="tranding-slide-img">
                    <img src="img/eb pearls.png" alt="Tranding">
                  </div>
                  <div class="tranding-slide-content">
                    <a href="https://ebpearls.com.au/">
                      <div class="tranding-slide-content-bottom">
                        <h2 class="company-name">
                          EB Pearls Nepal
                        </h2>
                        <h3 class="job-name">
                          <span>Web Devloper</span>
                        </h3>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Slide-end -->

              <!-- Slide-start -->
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <img src="img/cedargate.jpg" alt="Tranding">
                </div>
                <div class="tranding-slide-content">
                  <div class="tranding-slide-content-bottom">
                    <h2 class="company-name">
                      Cedar Gate Technologies
                    </h2>
                    <h3 class="job-name">
                      <span>Cloud Engineer</span>
                    </h3>
                  </div>
                </div>
              </div>
              <!-- Slide-end -->

              <!-- Slide-start -->
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <img src="img/f1soft.png" alt="Tranding">
                </div>
                <div class="tranding-slide-content">
                  <div class="tranding-slide-content-bottom">
                    <h2 class="company-name">
                      F1 Soft International
                    </h2>
                    <h3 class="job-name">
                      <span>UX Designer</span>
                    </h3>
                  </div>
                </div>
              </div>
              <!-- Slide-end -->

              <!-- Slide-start -->
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <img src="img/infodev.jpg" alt="Tranding">
                </div>
                <div class="tranding-slide-content">
                  <div class="tranding-slide-content-bottom">
                    <h2 class="company-name">
                      InfoDevelopers Nepal
                    </h2>
                    <h3 class="job-name">
                      <span>Business Analyst</span>
                    </h3>
                  </div>
                </div>
              </div>
              <!-- Slide-end -->

              <!-- Slide-start -->
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <img src="img/leapfrog.png" alt="Tranding">
                </div>
                <div class="tranding-slide-content">
                  <div class="tranding-slide-content-bottom">
                    <h2 class="company-name">
                      Leapfrog Technology
                    </h2>
                    <h3 class="job-name">
                      <span>IT Manager</span>
                    </h3>
                  </div>
                </div>
              </div>
              <!-- Slide-end -->


            </div>

            <div class="tranding-slider-control">
              <div class="swiper-button-prev slider-arrow">
                <ion-icon name="arrow-back-outline"></ion-icon>
              </div>
              <div class="swiper-button-next slider-arrow">
                <ion-icon name="arrow-forward-outline"></ion-icon>
              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
      </div>
      </section>

      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
      <script src="slider.js"></script>

    </div>
    <!--slider ends-->

    <!--new job start-->
    <div class="browser">
      <h1 class="heading">New Jobs</h1>
      <div class="browser-container">

        <?php
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            ?>

            <div class="box">
              <div class="col-sm-12 col-md-8 d-flex align-items-center">
                <img class="img-fluid border rounded" <?php echo '<img src ="data:comapany_logo;base64,' . base64_encode($row['company_logo']) . '"  alt="" style="width: 80px; height: 80px;" '; ?>>
                <div class="text-start ps-4">
                  <h3>
                    <?php echo $row['job_name']; ?>
                  </h3>
                  <span class="text-truncate me-3"><a><i class="fa fa-briefcase"></i></a>
                    <?php echo $row['company_name']; ?>
                  </span>
                  <span class="text-truncate me-3"><a><i class="fa fa-map-marker-alt"></i></a>
                    <?php echo $row['company_address']; ?>
                  </span>
                </div>
                <button class="button" href="">Apply Now</button>
              </div>
            </div>
            <?php
          }
        }
        ?>
      </div>
      <button class="btn">Browse more jobs</button>
    </div>
    <!--new job endss-->

    <!---whyus start-->
    <div class="container1">
      <h1>Why us</h1>
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