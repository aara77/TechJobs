
 <?php
// Include the database connection file (e.g., connect.php)
include("connect.php");
session_start();

// Check if the form is submitted for updating
if(isset($_POST['update'])) {
    // Get the job ID from the form
    $job_id = $_POST['job_id'];
    
    // Retrieve other form data
    $job_name = $_POST['job_name'];
    $company_name = $_POST['company_name'];
    $company_address = $_POST['company_address'];

    $company_logo = $_FILES['company_logo']['name'];
    $company_logo_old = $_POST['company_logo_old'];
    $vacancy = $_POST['vacancy'];
    $shift = $_POST['shift'];
    $descrip= $_POST['descrip'];

    // Check if a new company logo is uploaded
    if(!empty($company_logo)) {
        // Upload the new company logo
        $target_dir = "image/";
        $target_file = $target_dir . basename($_FILES["company_logo"]["name"]);
        move_uploaded_file($_FILES["company_logo"]["tmp_name"], $target_file);
        // Use $company_logo as the updated logo filename
        $update_filename = $company_logo;
    } else {
        // Use the existing logo filename
        $update_filename = $company_logo_old;
    }

    // Update the job record in the database
    $sql = "UPDATE job_list SET job_name='$job_name', company_name='$company_name', company_address='$company_address',vacancy='$vacancy', shift='$shift', descrip='$descrip' 
            WHERE job_id=$job_id";

    if(mysqli_query($conn, $sql)) {
        // Redirect to the profile page after successful update
        header("Location: /Techjobs/profile.php");
        exit();
    } else {
        // Handle query errors
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// If the job ID is provided in the URL, fetch the job details for editing
if(isset($_GET['job_id'])) {
    $job_id = $_GET['job_id'];
    $query = "SELECT * FROM job_list WHERE job_id=$job_id";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}
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
    <title>PostJob</title>
</head>

<body>
  <!-- header start -->
  <header class="header">
    <div class="container">
       <div class="header-main">
          <div class="logo">
             <a href="admin.php">TECHJobs</a>
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
  
     <h1 class="heading"> Update A Job </h1>
     <div class="postbox">

        <form action="update.php?job_id=<?php echo $job_id; ?>" method="POST" enctype ="multipart/form-data">
             <input type="hidden" name="job_id" value="<?php echo $row['job_id'];  ?>">
             
            <div class="inbox">
               <label>Job Name:</label>
               <input type="text" name="job_name"  value="<?php echo $row['job_name']; ?>"required autocomplete="off"><br>
             </div>
             <div class="inbox">
               <label>Company Name:</label>
               <input type="text" name="company_name" value=" <?php echo $row['company_name']; ?>"  required autocomplete="off"><br>
             </div>
             <div class="inbox">
               <label>Company Address:</label>
               <input type="text" name="company_address" value="<?php echo $row['company_address'];  ?>" required autocomplete="off"><br>
             </div>
             <!-- <div class="inbox">
               <label>Company logo:</label>
               <input type="file" name="company_logo" required><br>
               <input type="hidden" name="company_logo_old" value="<?php echo $row['company_address'];  ?>">
             </div>
              <img class ="img-fluid border rounded" img src= "<?php echo "image/".$row['company_logo']; ?>"alt="img" style="width: 150px; height: 150px; margin-left:100px;">
                 -->
             <div class="inbox">
               <label>Vacancy:</label>
               <input type="text" name="vacancy" value="<?php echo $row['vacancy'];  ?>"><br>
             </div>
             <div class="inbox">
               <label>Job Nature:</label>
               <input type="text" name="shift" value="<?php echo $row['shift'];  ?>"><br>
             </div>
             <div class="inbox"> 
               <label>Company Description:</label><br>
               <textarea id="description" name="descrip" rows="5" cols="60" value="<?php echo $row['descrip'];  ?>"> </textarea>
             </div>
             
             <!-- <input type="reset" name="update" class="submit" value="Update"> -->
             <button type="submit" name="update" value="update">Update</button>
             
        </form>


      </div>
</div>


</body>
</html>