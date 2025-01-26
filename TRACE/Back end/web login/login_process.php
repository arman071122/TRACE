<?php
include "../db.php";

if( empty($_POST['email']) ||  empty($_POST['password']) )
{
    echo "<script>alert('SORRY ALL FILEDS REQUIRED');window.location.assign('../../Front end/web login'); </script>";
}

$username = mysqli_real_escape_string($con,$_POST['email']);
$pass = mysqli_real_escape_string($con, $_POST['password']);

$query = "SELECT * FROM user_details WHERE email = '$username' AND password = '$pass'";
$result = mysqli_query($con,$query);
if($result)
{
    if (mysqli_num_rows($result) > 0 )
    {
        $row = mysqli_fetch_array($result);
        session_start();
        $_SESSION['Name'] = $row[2];
        $_SESSION['year']=$row[4];
        $_SESSION['ktuid']=$row[1];
        $_SESSION['email']=$row[7];
        $_SESSION['sem']=$row[6];
        $_SESSION['branch']=$row[5];
        $_SESSION['institution']=$row[3];
        $_SESSION['password']=$row['Password'];

        // new code to select data from the certificates table and join it with data from the user_details table
        $query = "SELECT ud.email, ud.Name, c.file_name, c.Activity_head, c.id, c.Activity, c.loa, c.uploaded_on, c.points, c.Approval FROM user_details ud JOIN certificates c ON ud.KTU_ID = c.KTU_ID WHERE ud.email = '$username'";
        $result = mysqli_query($con, $query);
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                // do something with the data
                // for example, store it in session variables to use in another PHP file
                $_SESSION['slno'] = $row['id'];
                $_SESSION['title'] = $row['file_name'];
                $_SESSION['acthd'] = $row['Activity_head'];
                $_SESSION['act'] = $row['Activity'];
                $_SESSION['loa'] = $row['loa'];
                $_SESSION['date'] = $row['uploaded_on'];
                $_SESSION['points'] = $row['points'];
                $_SESSION['approval'] = $row['Approval'];
            }
        } else {
            // handle the error
        }

        header("location:../../Front end/dashboard/dash-home.php");
    }
    else
    {
       echo "<script>alert('Invalid Username or Password');window.location.assign('../../Front end/web login'); </script>";
    }
}
else
{
   die("QUERY fAiLED");
}
?>