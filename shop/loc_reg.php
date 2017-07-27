<?php
include("connect.php");


$location=$_POST["location"];
echo "<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>";




echo '<nav class="navbar navbar-inverse " style="border-radius:0;">
            <div class="container-fluid">
                <div class="navbar-header"> <a class="navbar-brand" href="index.php">MediScrib</a> </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="shop.php">SHOP</a></li>
                </ul>
            </div>
        </nav>';

echo "<button type='button' class='btn btn-primary' style='width:100%;border-radius:0px;'>Products Available for Delivery at HOME:</button>";

                        
            echo "<div class='container'><br>";
$query="select * from shop_loc where location='$location' ";

            $run=mysqli_query($connect,$query);
            
            while($row=mysqli_fetch_assoc($run))
            {
                
                $image=$row["image"];
                $name=$row["name"];
                $price=$row["price"];
             
                echo "<form class='form-horizontal '  name='medicines' action='buy.php' method='post'>";
                echo "<div ><img src=m_images/".$image.".jpg width='300px' height='150px' class='img-responsive'><h4 class='btn btn-primary btn1'>".$name."</h4></div>";
                echo "<input type='hidden' name='name' value='$name'>";
                echo "<input type='hidden' name='price' value='$price'>";
                echo "<input type='submit' name='submit' class='btn btn-primary' value='Buy For RS.".$price."'>";
                echo "</form>";
            }
            
            
            echo "</div>";
?>
