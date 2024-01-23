<?php
include("connect.php");

$query = "select * from job_list ";
$result = mysqli_query($conn,$query);


if(isset($_POST['update'])){
    if(isset($_GET['updateId'])){
        $idnew = $_GET['updateId'];
    }

    // $jobs_id=$_POST['jobs_id'];
    $job_name=$_POST['job_name'];
    $company_name=$_POST['company_name'];
    $company_address=$_POST['company_address'];
    $company_logo=$_POST['company_logo'];
    $des=$_POST['des'];
   
    $sql="UPDATE job_list SET job_name='$job_name', company_name='$company_name', company_address='$company_address', company_logo='$company_logo',des='$des'
       WHERE job_id= $idnew";
    $result=mysqli_query($conn,$sql);
   
    if(!$result){
        die("query failed".mysqli_error());
    }
    else{
        header('location:profile.php?update_msg=Job Updated Sucessfully');
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
     <h1 class="heading"> Post A Job </h1>
     <div class="postbox">

        <?php
        if(isset($_GET['updateId'])){
            $updateId = $_GET['updateId'];
          
            $query =" SELECT * FROM job_list WHERE job_id=$updateId";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die("query failed".mysqli_error());
            }
            else{
                $row = mysqli_fetch_assoc($result);
            }
        }        
        ?>


        <form action="update.php?updateId=<?php echo $job_id; ?>" method="POST">
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
             <div class="inbox">
               <label>Company logo:</label>
               <input type="file" name="company_logo" value="<?php echo $row['company_logo'];?>" required><br>
             </div>
              <div class="inbox"> 
               <label>Company Description:</label><br>
               <textarea id="description" name="des" rows="5" cols="60" > </textarea>
             </div>
             
             <input type="submit" name="update" class="submit" value="Update">
             
        </form> 


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