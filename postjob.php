<?php
include("connect.php");
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
    <link rel="stylesheet" href="postjob.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
    <title>TechJobs</title>
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
                  <a href="admin.php">Home</a>
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
                  <a href="">Welcome</a>
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
 <section id="banner1">
      <div class="banner1-txt">
        <h1>Post Jobs</h1>
        <p>
"Empower your company's future by posting jobs on our website and handpicking the perfect candidate to shape success together. Your next great hire is just a click away."</p>
        <div class="banner-btn">
          <a href="homepage.php"><span></span>Home</a>
          <a href="joblist.php"><span></span>Job Lists</a>
        </div>
      </div>
    </section>
     <h1 class="heading"> Post A Job </h1>
     <div class="postbox">
        <form action="" method="POST">
            <div class="inbox">
               <label>Job Name:</label>
               <input type="text" name="jname" required><br>
             </div>
             <div class="inbox">
               <label>Company Name:</label>
               <input type="text" name="cname" required><br>
             </div>
             <div class="inbox">
               <label>Company Address:</label>
               <input type="text" name="caddress" required><br>
             </div>
             <div class="inbox">
               <label>Vacancy:</label>
               <input type="number" name="caddress" required><br>
             </div>
             <div class="inbox">
               <label>Job Nature:</label>
               <input type="text" name="caddress" required><br>
             </div>
             <div class="inbox">
               <label>Date Line:</label>
               <input type="date" name="caddress" required><br>
             </div>
             <div class="inbox">
               <label>Company logo:</label>
               <input type="file" name="clogo" required><br>
             </div>
              <div class="inbox"> 
               <label>Company Description:</label><br>
               <textarea id="description" name="des" rows="5" cols="60" > </textarea>
             </div>
             <button type="submit">Submit</button>
             <!-- <input type="submit" name="submit" class="submit" value="Submit"> -->
             
        </form> 

        <?php
        if(isset($_POST['submit'])){

         $jname=$_POST['jname'];
         $cname=$_POST['cname'];
         $caddress=$_POST['caddress'];
         $clogo=$_POST['clogo'];
         $des=$_POST['des'];
         $result=mysqli_query($conn,"insert into job_list values('','$jname', '$cname', '$caddress', '$clogo', '$des')");

         if($result){
            echo"sucess";
         }
         else{
            echo "failed";
          }
        }

        ?>
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