<?php
include ('connect.php');

$query="select name from compare_meds order by name";
$run=mysqli_query($connect,$query);
    $options="";
    while($row=mysqli_fetch_assoc($run))
    {
        $options.= "<option value=".$row['name'].">".$row['name']."</option>";
    }
?>