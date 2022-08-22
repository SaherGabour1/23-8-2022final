<?php

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="patientadver.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


 
  <title>רשימת חולים</title>
</head>
<body>

<div class="main" >
    <nav>
        <div class="logo">
            <img src="Picture3.png" > 
        </div>
        <div class="nav-links" >
            <ul>
            
              <li><a href="contact.html" >צור קשר </a></li>
              <li><a href="patientadver1.php" >רשימת חולים</a></li>
              <li><a href="hospital.html" >מעבדות בנק הדם</a></li>
              <li><a href="home.html" >דף בית  </a></li>
            </ul>   
        </div> 
        <div class="signin-signout">
                <h2 class="signout" > 
                    <a class="singout-a" href="signout.html" >הרשמה</a> 
                </h2>
                <h2 class="signin"> 
                    <a class="singin-a" href="signin.html">כניסה</a> 
                </h2>
            </div>
        </nav> 


    <hr width="70%" > 

    
        <br></br>

        <h2 class="middle-title">
            רשימת החולים 
          </h2>
          <br></br>

          <table class="table table-dark table-striped" style="border:1px solid black;">
            <thead>
              <tr class="tr1" >
              <th>  </th>
                <th>תיאור סיפור </th>
                <th>איזור תריימה  </th>
                <th>סוג דם </th>
                <th>טלפון </th>
                <th>גיל </th>
                <th>שם מלא </th>
                

               
              </tr>
            </thead>
            <tbody>
                    <?php
                    require ('connection.php');
                    $query = sqlsrv_query($conn,"SELECT * FROM patientadv ");
                  
                    while($row =sqlsrv_fetch_array($query))

                 
                    {
                    
                    ?>
              
                    <tr>
                    <td><a class="a2" href="signout.html">לתרום</a></td>
                      <td><?php echo $row['body'];?></td>
                      <td><?php echo $row['donatearea'];?></td>
                      <td><?php echo  $row['bloodtype'];?></td>
                      <td><?php echo  $row['phone'];?></td>
                      <td><?php echo  $row['age'];?></td>
                      <td><?php echo  $row['fname'];?></td>
                     
                    
                     

                  </tr>
                  
                        <?php } ?>
                 
                    
                      
            </tbody>

          </table>

      
         
    
    <footer class="footer-copyright">
            <h5>
             Nb.Sg.Platelet Donation - זכויות יוצרים שמורות ל-&copy;
            </h5>
       </footer>
       </div>
</body>
</html>

<?php?>
