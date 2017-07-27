<?php
include('translate.php');
include('connect.php');
?>

<!DOCTYPE html>
    
<html>
    
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Doctor Sign Up</title>
       
    </head>
    <body>

      <form action="doctor_reg_main.php" method="post">
      
          <h1>Doctor Sign Up</h1><a href="index.php"><h1>Home</h1></a>
        
        <fieldset>
            <legend><h1>Enter Basic Info:</h1></legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
          <label for="aadhar">Aadhar Card:</label>
          <input type="text" id="aadhar" name="aadhar">
          
          <label for="contact">Contact:</label>
          <input type="number" id="contact" name="contact">
               
            <label for="field">Field Expert:</label>
          <input type="text" id="field" name="field">
             
             <label for="exp">Experience:</label>
          <input type="number" id="exp" name="exp">
             
           
            <label for="charges">Appointment Charges:</label>
          <input type="number" id="charges" name="charges">
              
            <label for="hosp">Hospital &amp; Clinics :</label>
          <input type="text" id="hosp" name="hosp">   
               
               
                <label for="rating">Rating:</label>
          <input type="text" id="rating" name="rating"> 
           
   
           
           
            
               
               
               
               
               
                
        </fieldset>
        
        
      
        <button type="submit">Sign Up</button>
      </form>
      
    </body>
</html>