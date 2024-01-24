<?php
    include 'connect.php';
    if(isset($_GET['deleteId'])){
        $dId=$_GET['deleteId'];

        $query="DELETE FROM job_list WHERE job_id = '$dId' ";
        $result = mysqli_query($conn,$query);

        if($result){
            // echo"Deleted Successfully";
            header('location:profile.php');
        }
        else{
            die("Query Failed".mysqli_error($conn));
            $_SESSION['message'] = "Job not Deleted Successfully";
           
        }
    }

?>
