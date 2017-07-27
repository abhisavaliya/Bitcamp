<!DOCTYPE html>
<?php
include('translate.php');
include ('connect.php');

?>
    <html>

    <head>
        <title>Shopping Cart</title>
        <link rel="stylesheet" type="text/css" href="shop.css">
        
         
        <link rel="icon" type="text/css" href="images/crown.png">
</head>
    <body>
        <div class="main">
            <div class="nav">
                <div class="logo"><img src="images/crown.png" width=60 height="60"></div>
                <div class="main1">
                    <ul>
                        <li><a href="#medicines1">MEDICINES</a></li>
                        <li><a href="#bulk1">BULK</a></li>
                        <li><a href="#equipments1">EQUIPMENTS</a></li>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="location.php">LOCATION BASED</a></li>
                    </ul>
                </div>
            </div>
        </div>
            
               
        <div id="medicines1"></div>
        <div class="nav2">
            <br>
            <br>
            
            <div class="headings">
                
            <div class="next"><a href="#bulk1"><img src="images/down.png" width=50px height=50px></a></div>  
            <h1>MEDICINES</h1> </div>
            <br>
            <div class="form1">
                <?php
            
            $query="select image,name,price from medicines;";
            $run=mysqli_query($connect,$query);
            
            while($row=mysqli_fetch_assoc($run))
            {
                
                $image=$row['image'];
                $name=$row['name'];
                $price=$row['price'];
                
                echo "<form name='medicines' action='buy.php' method='post'>";
                echo "<div ><img src=m_images/".$image.".jpg width='300px' height='150px'><h4 class='btn btn-primary btn1'>".$name."</h4></div>";
                echo "<input type='hidden' name='name' value='$name'>";
                echo "<input type='hidden' name='price' value='$price'>";
                echo "<input type='submit' name='submit' class='btn btn-primary' value='Buy For RS.".$price."'>";
                echo "</form>";
            }
            
            
            
?>
            </div>
            <br> </div>
        <div id="bulk1"></div>
        <div class="nav3">
            <br>
            <br>
            <div class="headings">
                <div class="next">
                    <a href="#equipments1"><img src="images/down.png" width=50px height=50px></a>
                </div>
                <h1>BULK</h1> </div>
            <br>
            <div class="form1">
                <?php
            
            $query="select image,name,price from bulk;";
            $run=mysqli_query($connect,$query);
            
            while($row=mysqli_fetch_assoc($run))
            {
                
                $image=$row['image'];
                $name=$row['name'];
                $price=$row['price'];
                
                echo "<form name='medicines' action='buy.php' method='post'>";
                echo "<div ><img src=m_images/".$image.".jpg width='300px' height='150px'><h4 class='btn btn-primary' style='background-color:rgba(255,255,255,0.5);'>".$name."</h4></div>";
                echo "<input type='hidden' name='name' value='$name'>";
                echo "<input type='hidden' name='price' value='$price'>";
                echo "<input type='submit' name='submit' class='btn btn-primary' value='Buy For RS.".$price."'>";
                echo "</form>";
            }
            
            
            
?>
            </div>
            <br> </div>
        <div id="equipments1"></div>
        <div class="nav4">
            <br>
            <br>
            <div class="headings">
                <div class="next">
                    <a href="#top"><img src="images/up.png" width=50px height=50px></a>
                </div>
                <h1>EQUIPMENTS</h1> </div>
            <br>
            <div class="form1">
                <?php
            
            $query="select image,name,price from equipments;";
            $run=mysqli_query($connect,$query);
            
            while($row=mysqli_fetch_assoc($run))
            {
                
                $image=$row['image'];
                $name=$row['name'];
                $price=$row['price'];
                
                echo "<form name='medicines' action='buy.php' method='post'>";
                echo "<div ><img src=m_images/".$image.".jpg width='300px' height='150px'><h4 class='btn btn-primary btn1'>".$name."</h4></div>";
                echo "<input type='hidden' name='name' value='$name'>";
                echo "<input type='hidden' name='price' value='$price'>";
                echo "<input type='submit' name='submit' class=' btn btn-primary' value='Buy For RS.".$price."'>";
                echo "</form>";
            }
            
            
            
?>
            </div>
            <br> </div>
    </body>

    </html>