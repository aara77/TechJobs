<?php

include 'connect.php';
session_start();
// Fetch data from the database based on the provided job ID
if (isset($_GET['jobId'])) {
  $jobId = $_GET['jobId'];

  $sql = "SELECT * FROM job_list WHERE job_id = $jobId"; // Adjust the table name and columns accordingly
  $result = mysqli_query($conn, $sql);
  
  if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
 } 
 else {
    echo "Job not found or an error occurred.";
}
} else {
echo "Job ID not provided.";
}
// mysqli_close($conn); 



// // for apply
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $cv = $_FILES['cv']['name'];
  $coverletter = $_POST['coverletter'];
  
  // Prepare and execute SQL query
  $sql = "INSERT INTO apply_job(name, email, cv , cover_letter, job_id) 
           VALUES ('$name', '$email', '$cv', '$coverletter',$jobId)";
  $result = mysqli_query($conn, $sql);

  // Check for SQL errors
if (!$result) {
  echo "Error: " . mysqli_error($conn);
} else {
  // Upload file if the query was successful
  $uploadFolder = "uploads/";
  $destination = $uploadFolder . $_FILES["cv"]["name"];
  
  if (move_uploaded_file($_FILES["cv"]["tmp_name"], $destination)) {
      echo "Applied";
  } else {
      echo "Error uploading file.";
  }
}
}
mysqli_close($conn); 
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
  <title>TechJobs</title>
  <link rel="stylesheet" href="JobDetails.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
                      <li class="menu-item"><a href="joblist.php">View Jobs</a></li>
                      <li class="menu-item"><a href="postjob.php">Post Jobs</a></li>
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
                  </ul>
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
    <h1 class="heading"><?php echo $row['company_name']; ?></h1>
    <div class="container2">
    
      <div class="box1">
        <h1>Company's Decription</h1>
        <div class="companylogo">
          
        <img class ="img-fluid border rounded" img src= "<?php echo "image/".$row['company_logo']; ?>" alt="img" style="width: 180px; height: 180px; margin-left:50px;">
                        <!--img src="img\eb pearls.png" alt=""-->
        </div>
        <div class="details">
          <li><i class="fa fa-briefcase"></i> <?php echo $row['company_name']; ?></li>
          <li><i class="fa fa-map-marker-alt"></i> <?php echo $row['company_address']; ?></li>
        </div>
      </div>
      <div class="box2">
        <h1>Job's Decription</h1>
        <div class="info">
          <li><i class="fa-solid fa-chevron-right" style="color: #692782;"></i> Post: <span class="bold-job-name"><?php echo $row['job_name']; ?></span></li>
          <li><i class="fa-solid fa-chevron-right" style="color: #692782;"></i> Published On: <?php echo $row['published']; ?></li>
          <li><i class="fa-solid fa-chevron-right" style="color: #692782;"></i> Vacancy: <?php echo $row['vacancy']; ?></li>
          <li><i class="fa-solid fa-chevron-right" style="color: #692782;"></i> Job Nature: <?php echo $row['shift']; ?></li>
          <!-- <li><i class="fa-solid fa-chevron-right" style="color: #692782;"></i> Date Line: 01 Jan, 2045</li> -->
        </div>
      </div>
    </div>
    <h1 class="heading">Apply Now</h1>
    <div class="container3">
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="cv">Your CV (PDF, DOCX):</label>
        <input type="file" id="cv" name="cv" accept=".pdf, .docx" required>

        <label for="coverletter">Cover Letter:</label>
        <textarea id="coverletter" name="coverletter" required></textarea>

        <button type="submit" name="submit">Submit Application</button>
    </form>
    </div>
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