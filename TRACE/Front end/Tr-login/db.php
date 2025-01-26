<?php
global $con;
$con = mysqli_connect('localhost','root','','trace');

if(!$con)
{
    echo 'Sorry cannot connect to database'.mysqli_error($con);
}


?>