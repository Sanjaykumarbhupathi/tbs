<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'tbs');

$veh_id = $_POST['veh_id'];



// $s = "select *
//     from startup 
//     where s_id='$rollno'";
// $result= mysqli_query($con,$s);

// $num= mysqli_num_rows($result);
$query=mysqli_query($con, "delete from vehicle where veh_id=$veh_id");

if($query){
    header("location:deletevehicle.php");
}
// else{
//     echo "Add Student!!!";
// }
?>