<?php
include("connect.php");

$aadhar=$_POST["aadhar"];
$name=$_POST["name"];
$contact=$_POST["contact"];
$field=$_POST["field"];
$exp=$_POST["exp"];
$charges=$_POST["charges"];
$hosp=$_POST["hosp"];
$rating=$_POST["rating"];


$query1="select * from doctor_reg where aadhar='$aadhar'";

$check=mysqli_query($connect,$query1);
$count=mysqli_num_rows($check);

if($count==0)
{


$query="INSERT INTO `doctor_reg`( `name`, `aadhar`, `contact`, `field`, `exp`, `charges`, `hosp`, `rating`) VALUES ('$name','$aadhar','$contact','$field','$exp','$charges','$hosp','$rating')";



if($run=mysqli_query($connect,$query))
{
    echo "<script>alert('$name Successful Registrated!');location.href='doctor_reg.php';</script>";
}
}

else echo "<script>alert('$name Already Registrated!');location.href='doctor_reg.php';</script>";



?>