<?php
include('translate.php');
include('connect.php');
?>

<!DOCTYPE html>
    
<html>
    
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Patient Sign Up</title>
       
    </head>
    <body>

      <form action="patient_reg_main.php" method="post">
      
          <h1>Patient Sign Up</h1><a href="index.php"><h1>Home</h1></a>
        
        <fieldset>
            <legend><h1>Enter Basic Info:</h1></legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
          <label for="aadhar">Aadhar Card:</label>
          <input type="text" id="aadhar" name="aadhar">
          
          <label for="contact">Contact:</label>
          <input type="number" id="contact" name="contact">
                
        </fieldset>
        
        
      
        <button type="submit">Sign Up</button>
      </form>
      
    </body>
</html>