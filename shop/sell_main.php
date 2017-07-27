<!DOCTYPE html>
<?php

include ('connect.php');
ob_start();

$query="select * from medicines;";
$query2="select * from bulk;";
$query3="select * from equipments;";

$run=mysqli_query($connect,$query);
$run2=mysqli_query($connect,$query2);
$run3=mysqli_query($connect,$query3);

?>
    <html>

    <head>
        <title>SELL</title>
        <link rel="stylesheet" type="text/css" href="sell_main.css"> </head>

    <body>
        <div class="maindiv">
            <h1>SELL</h1></div>
        <div class="mainmain">
            <br>
            <div class="medicines">
                <form name='addmedicines' action='addmedicines.php' method="post">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Cover Page</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Delete</th>
                        </tr>
                        <?php
while($row=mysqli_fetch_array($run))
{
    $id=$row['id'];
    $image=$row['image'];
    $name=$row['name'];
    $price=$row['price'];
    
    echo "<tr><td>$id</td><td><img src='m_images/$image.jpg' alt=$image width='200px' height='100px'></td><td>$name</td><td>$price</td><td><a href='sell_main.php?delete=$id'>Delete</a></td></tr>";
}
  echo "<tr><td></td><td><input type='text' name='image' required></td><td><input type='text' name='name' required></td><td><input type='number' name='price' required></td>";
echo "<td><input type='submit' name='add' value='ADD MEDICINES'></td>";
 
?>
                    </table>
                </form>
            </div>
            <br>
            <br>
            <div class="bulk">
                <form name='addbulk' action='addbulk.php' method="post">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Cover Page</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Delete</th>
                        </tr>
                        <?php
while($row2=mysqli_fetch_array($run2))
{
    $id=$row2['id'];
    $image=$row2['image'];
    $name=$row2['name'];
    $price=$row2['price'];
    
    echo "<tr><td>$id</td><td><img src='m_images/$image.jpg' width='200px' height='100px'></td><td>$name</td><td>$price</td><td><a href='sell_main.php?delete2=$id'>Delete</a></td></tr>";
}
  echo "<tr><td></td><td><input type='text' name='image' required></td><td><input type='text' name='name' required></td><td><input type='number' name='price' required></td>";
echo "<td><input type='submit' name='add' value='ADD BULK'></td>";
 
?>
                    </table>
                </form>
            </div>
            <br>
            <br>
            <div class="medicines">
                <form name='addequipments' action='addequipments.php' method="post">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Cover Page</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Delete</th>
                        </tr>
                        <?php
while($row=mysqli_fetch_array($run3))
{
    $id=$row['id'];
    $image=$row['image'];
    $name=$row['name'];
    $price=$row['price'];
    
    echo "<tr><td>$id</td><td><img src='m_images/$image.jpg' width='200px' height='100px'></td><td>$name</td><td>$price</td><td><a href='sell_main.php?delete3=$id'>Delete</a></td></tr>";
}
  echo "<tr><td></td><td><input type='text' name='image' required></td><td><input type='text' name='name' required></td><td><input type='number' name='price' required></td>";
echo "<td><input type='submit' name='add' value='ADD EQUIPMENTS'></td>";
 
?>
                    </table>
                </form>
            </div>
            
        <?php
        if(isset($_GET['delete']))
        {
            $nid=$_GET['delete'];
            $querydel="DELETE from medicines where id=$nid;";
            $rundel=mysqli_query($connect,$querydel);
            header('location:sell_main.php');
        }
        
        
        if(isset($_GET['delete2']))
        {
            $nid=$_GET['delete2'];
            $querydel="DELETE from bulk where id=$nid;";
            $rundel=mysqli_query($connect,$querydel);
            header('location:sell_main.php');
        }
        
        if(isset($_GET['delete3']))
        {
            $nid=$_GET['delete3'];
            $querydel="DELETE from equipments where id=$nid;";
            $rundel=mysqli_query($connect,$querydel);
            header('location:sell_main.php');
        }
        
       
    ?>
        </div>  
    </body>

    </html>