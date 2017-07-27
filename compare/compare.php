<!DOCTYPE html>
<?php
 include('connect.php');
include('compare_list.php');
?>
    <html>

    <head>
        <title>Compare!</title>
       
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        
        </head>
        <style>
      .container      table,th,td{
            text-align: center !important;
            }
        
        </style>
        
        
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en", layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, "google_translate_element");
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <body>
       
       
       
       
       
       
    <nav class="navbar navbar-default navbar-inverse" style="border-radius:0;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="color:white">MediScribe</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        <li><a href="index.php" style="color:white">Home</a></li>
         
      </ul>
       
      <ul class="nav navbar-nav navbar-right">
        <li><span id="google_translate_element"></span></li>
         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>   
       
       
       
       
       
       
       
    
       
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="container">
                <table class="table table-inverse" >
                    <tbody>
                        <tr>
                            <td class="col-xs-4" style="text-align: center; vertical-align: middle;">Enter Medicine:</td>
                            <td class="col-xs-4" style="text-align: center; vertical-align: middle;">
                                <select name="meds" required style="width:100%;">
                                    <option value="">--SELECT MS--</option>
                                    <?php echo $options; ?>
                                </select>
                            </td>
                        
                            
                            <td class="col-xs-4">
                                <input type="submit" value="Search Alternatives!" name="submit" class="btn btn-primary"> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
        <?php
        
        if(isset($_POST["submit"]))
        {
            $name=$_POST["meds"];

$query="select * from compare_meds where name='$name'";
$run=mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($run);

$image1=$row["image"];
$name1=$row["name"];
$cures1=$row["cures"];
$power1=$row["power"];
$price1=$row["price"];

echo "
<div class='text-center'>
<table class='table table-center' style='text-align:center'>
  <thead class='table-inverse text-center align-center'>
    <tr>
      <th class='col-xs-2'>Image</th>
      <th class='col-xs-2'>Name</th>
      <th class='col-xs-2'>Cures</th>
      <th class='col-xs-2'>Power</th>
      <th class='col-xs-2'>Price</th>
      <th class='col-xs-2'>Buy</th>
    </tr>
  </thead>
  

<tr>
      <td style='text-align: center; vertical-align: middle;'><img src='images/".$image1.".jpg' width=100px height=40px></td>
      <td style='text-align: center; vertical-align: middle;'>$name1</td>
      <td style='text-align: center; vertical-align: middle;'>$cures1</td>
      <td style='text-align: center; vertical-align: middle;'>$power1</td>
      <td style='text-align: center; vertical-align: middle;'>$price1</td>
      <td style='text-align: center; vertical-align: middle;'><a href='../shop/shop.php'><input type=button class='btn btn-primary' value='BUY'></a></td>
    </tr>
</table>
</div>
";
       
       $query1="select * from compare_meds where cures='$cures1' and price<'$price1' order by price";
$run1=mysqli_query($connect,$query1);
            $count=mysqli_num_rows($run1);      
            
        echo "<button type='button' class='btn btn-success text-center col-xs-12' style='border-radius:0' >Here You Go!! $count Alternatives Found!</button><br>";
            
            
            
            echo "
<div class='text-center'>
<table class='table table-center' style='align-text:center'>
  <thead class='thead-inverse'>
    <tr>
      <th class='col-xs-2'>Image</th>
      <th class='col-xs-2'>Name</th>
      <th class='col-xs-2'>Cures</th>
      <th class='col-xs-2'>Power</th>
      <th class='col-xs-2'>Price</th>
      <th class='col-xs-2'>Buy</th>
    </tr>
  </thead>
 ";
            
            
            
            
            
            
            
  
 
    while($row1=mysqli_fetch_assoc($run1))
    {


$image11=$row1["image"];
$name11=$row1["name"];
$cures11=$row1["cures"];
$power11=$row1["power"];
$price11=$row1["price"];

echo "


<tr>
      <td class='col-xs-2'><img src='images/".$image11.".jpg' width=100px height=40px></td>
      <td class='col-xs-2'>$name11</td>
      <td class='col-xs-2'>$cures11</td>
      <td class='col-xs-2'>$power11</td>
      <td class='col-xs-2'>$price11</td>
      <td class='col-xs-2'><a href='../shop/shop.php'><input type=button class='btn btn-primary' value='BUY'></a></td>
</tr>

";
           
    }
            
            echo "</table></div>";
            
}
        
        
        
        
        
        
        
        
        
        ?>
    </body>