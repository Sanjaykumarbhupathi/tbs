<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'tbs');

$driverid = $_POST['driverid'];



// $s = "select *
//     from startup 
//     where s_id='$rollno'";
// $result= mysqli_query($con,$s);

// $num= mysqli_num_rows($result);
$query=mysqli_query($con, "delete from driver where driverid=$driverid");

if($query){
    header("location:deletedriver.php");
}
// else{
//     echo "Add Student!!!";
// }
?>