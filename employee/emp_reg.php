<?php
include('translate.php');
include('connect.php');
?>

<!DOCTYPE html>
    
<html>
    
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Employee Sign Up Form</title>
       
        
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="emp_reg_main.php" method="post">
      
          <h1>Employee Sign Up</h1><a href="index.php"><h1>Home</h1></a>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
          <label for="aadhar">Aadhar Card:</label>
          <input type="text" id="aadhar" name="aadhar">
          
          <label for="age">Age:</label>
          <input type="number" id="age" name="age">
          
          <label for="phone">Contact:</label>
          <input type="number" id="phone" name="phone">
          
          <label>Applying For:</label>
          <input type="checkbox" id="Receiptionist" value="Receiptionist" name="Receiptionist"><label for="Receiptionist" class="light">Receiptionist</label><br>
          <input type="checkbox" id="Warden" value="warden" name="Warden"><label for="Warden" class="light">warden</label><br>
          <input type="checkbox" id="Compounder" value="Compounder" name="Compounder"><label for="Compounder" class="light">Compounder</label><br>
            <label for="others" class="light">Others:</label><br>  <input type="text" id="others" name="others">
            
        <br>
         <br>
         
             <label for="salary" class="light">Salary Expected Per Month:</label>
             <input type="number" name="salary" id="salary">
          
        </fieldset>
        
        
      
        <button type="submit">Sign Up</button>
      </form>
      
    </body>
</html>