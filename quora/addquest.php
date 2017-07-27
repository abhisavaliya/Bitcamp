<?php

include('connect.php');

$question=$_POST['question'];

$query1="INSERT INTO questions(`questions`) values ('$question')";

$run1=mysqli_query($connect,$query1);

if($run1)
    echo "<script>alert('Submitted QUESTION');location.href='qa.php';</script>";

?>