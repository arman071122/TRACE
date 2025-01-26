<?php
   if(isset($_FILES['file'])){
    include "db.php";
    session_start();
      $errors= array();
      $file_name = $_SESSION['ktuid'].basename($_FILES["file"]["name"]);
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
      $acthd=$_POST['avhead'];
      $act=$_POST['av'];
      $loa=$_POST['loa'];
      $extensions= array("jpeg","jpg","pdf");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PDF file.";
      }
      
      if($file_size > 10485760){
         $errors[]='File size must be less than 10 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"files/".$file_name);
         $query="INSERT into certificates (KTU_ID,Academic_year,file_name, uploaded_on, Activity_head, Activity, loa, points, Approval) VALUES ('".$_SESSION['ktuid']."','".$_SESSION['year']."','".$file_name."', NOW(),'".$acthd."','".$act."','".$loa."','0','pending')";
         $result = mysqli_query($con,$query);
         if($result)
         {
            echo "<script>alert('Uploaded successfully');window.location.assign('../Front end/dashboard/cards/upload.html'); </script>";
        }
      }
      else{
        echo "<script>alert('".$errors."');window.location.assign('../Front end/dashboard/cards/upload.html'); </script>";
    }
   }
   else
   {
    echo "<script>alert('Please select a file');window.location.assign('../Front end/dashboard/cards/upload.html'); </script>";
   }
?>