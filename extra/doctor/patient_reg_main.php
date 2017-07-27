<?php
include("connect.php");

$aadhar=$_POST["aadhar"];
$name=$_POST["name"];
$contact=$_POST["contact"];

$query1="select * from patient_reg where aadhar='$aadhar'";

$check=mysqli_query($connect,$query1);
$count=mysqli_num_rows($check);

if($count==0)
{


$query="INSERT INTO `patient_reg`( `name`, `aadhar`, `contact`) VALUES ('$name','$aadhar','$contact')";



if($run=mysqli_query($connect,$query))
{
    echo "<script>alert('$name Successful Registrated!');location.href='patient_reg.php';</script>";
}
}

else echo "<script>alert('$name Already Registrated!');location.href='patient_reg.php';</script>";



?>