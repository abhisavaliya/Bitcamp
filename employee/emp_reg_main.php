<?php
include("connect.php");

$aadhar=$_POST["aadhar"];
$name=$_POST["name"];
$age=$_POST["age"];
$phone=$_POST["phone"];
$skills="";

if(isset($_POST["Receiptionist"]))
    $skills=$skills.",".$_POST["Receiptionist"];

if(isset($_POST["Warden"]))
    $skills=$skills.",".$_POST["Warden"];
   
if(isset($_POST["Compounder"]))
    $skills=$skills.",".$_POST["Compounder"];

$skills1=$_POST["others"];
    $skills=$skills.",".$skills1;

$skills=ltrim($skills,",");

$salary=$_POST["salary"];


$query1="select * from employee_reg where aadhar='$aadhar'";

$check=mysqli_query($connect,$query1);
$count=mysqli_num_rows($check);

if($count==0)
{


$query="INSERT INTO `employee_reg` (`aadhar`, `name`, `age`, `contact`, `skills`, `salary`) VALUES ('$aadhar', '$name', '$age', '$phone', '$skills', '$salary')";



if($run=mysqli_query($connect,$query))
{
    echo "<script>alert('$name Successful Registrated!');location.href='emp_reg.php';</script>";
}
}

else echo "<script>alert('$name Already Registrated!');location.href='emp_reg.php';</script>";



?>