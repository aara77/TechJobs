<?php
    include 'connect.php';
    session_start();
    if(isset($_GET['deleteId'])){
        $dId=$_GET['deleteId'];

        $query="DELETE FROM job_list WHERE job_id = '$dId' ";
        $result = mysqli_query($conn,$query);

        if($result){
            $_SESSION['status'] = "Job Deleted Successfully";
            header("location:profile.php");
            
        }
        else{
            die("Query Failed".mysqli_error($conn));
            $_SESSION['msg'] = "Job not Deleted Successfully";
           
        }
    }

?>
