<?php
    include 'connect.php';
    if(isset($_GET['deleteId'])){
        $deleteId=$_GET['deleteId'];

        $query="DELETE FROM job_list WHERE job_id = '$deleteId' ";
        $result = mysqli_query($conn,$query);

        if($result){
            // session_start();
            // $_SESSION['message'] = "Job Deleted Successfully";
            header('location:profile.php?delete_msg=Job Deleted Successfully');
            // exit(0);
        }
        else{
            die("Query Failed".mysqli_error($conn));
            $_SESSION['message'] = "Job not Deleted Successfully";
           
        }
    }

?>
