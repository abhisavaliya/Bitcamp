
              <?php
include('connect.php');
include('translate.php');
echo '<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">';

               
                 $otp=$_POST["otp"];
               if($otp=="1234")
               {
                   
                   $aadhar=$_POST["aadhar"];
                   $query="select * from patient_main_data where aadhar='$aadhar'";
                   $run=mysqli_query($connect,$query);
                   
                   $row=mysqli_fetch_assoc($run);
                   $name=$row["name"];
                   $contact=$row["contact"];
                   $diseases=$row["diseases"];
                   $diseases=explode(':::',$diseases);
                   
                   
                   $date=$row["date"];
                   $date=explode(':::',$date);
                   
                   $treatment=$row["treatment"];
                   $treatment=explode(':::',$treatment);
                   
                   
                   $documents=$row["documents"];
                   $documents=explode(':::',$documents);
                   
                    
                   $cost=$row["cost"];
                   $cost=explode(':::',$cost);
                   
                   
                   
                   
                   echo "<button type='button' class='btn btn-primary' style='width:100%;border-radius:0'><h1>Details of $name</h1> </button> ";
                   
                   
                   echo "
                   
                   <div class='container'>
                   <table class='table'>
                    <thead class='table table-inverse'>
                        <tr>
                            <th>Diseases</th>
                            <th>Date</th>
                            <th>Treatment</th>
                            <th>Documents</th>
                            <th>Cost</th>
                        
                        
                        </tr>
                    </thead>
                        <tr>
                        <td>";foreach($diseases as $cell){echo "<table><tr><td>$cell</td></tr></table>";} echo "</td>
                        <td>";foreach($date as $cell){echo "<table><tr><td>$cell</td></tr></table>";}echo  "</td>
                        <td>";foreach($treatment as $cell){echo "<table><tr><td>$cell</td></tr></table>";}echo "</td>
                        <td>";foreach($documents as $cell){echo "<table><tr>
                        
                        
                        
                        
                        <td><img src='images/".$cell.".jpg' width=100px height=100px></td></tr></table>";}echo "</td>
                        
                        
                        
                        
                        <td>";foreach($cost as $cell){echo "<table><tr><td>$cell</td></tr></table>";}echo "</td>
                        
                        </tr>
                    
                    
                    
                        </thead>
                    </table>
                   
                   </div>
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   ";
                   
                   
                   
                   
               }
               else echo "<script>alert('Incorrect OTP!!');href.location='check_patient.php'</script>";
?>