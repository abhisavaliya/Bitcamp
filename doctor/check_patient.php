<?php
include('connect.php');
include('translate.php');

?>




<!DOCTYPE html>


<html>
    <head><title>Patient Treatment</title></head>
    
       <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
       
   <body>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
           <table class="table">
            <thead class="table-inverse">
                <tr>
                    <th>
                        <label for="aadhar">Enter Aadhar Number:</label>
                    </th>
                    <th>
                        <input type="text" name="aadhar">
                    </th>
                    <th><input type="submit" value="Get Details!" name="submit"></th>
                    
                </tr>    
                
                
            </thead>
           </table>
        </form>
        
        
        <?php
       if(isset($_POST["submit"]))
       {
           $aadhar=$_POST["aadhar"];
        echo '   
          <form action="verify.php" method="post">
            
           <table class="table">
            <thead class="table-inverse">
                <tr>
                    <th>
                        <label for="otp">Enter OTP:</label>
                    </th>
                    <th>
                        <input type=number name="otp">
                    </th>
                    <th><input type="submit" value="Verify!" name="submit2"></th>
                    
                </tr>  
                <tr><td><input type="text" value="'.$aadhar.'" name="aadhar" hidden></td></tr>
                
                
            </thead>
           </table>
        </form>';
       }
           
           
           
           
           
           
       
       
       ?>
        
        
         
    </body>
</html>