<?php

include('connect.php');

$answer=$_POST['answer'];
$qid=$_POST['qid'];

$query1="INSERT INTO answers(`aid`,`answer`) values ('$qid','$answer')";

$run1=mysqli_query($connect,$query1);

if($run1)
    echo "<script>alert('Submitted ANSWER');location.href='qa.php';</script>";

else echo "false";
?>