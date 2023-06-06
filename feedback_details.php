<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedbacks</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head> 

<body > 
  
   <div  id="myDiv">
  
   <?php include 'navbar_admin.php'; ?>
   <br><br><br>
   <div class="container">
      <div class="container">
         <div class="row">
             <div class="col-md-3"></div>
             <div class="col-md-6">
                 <div class="page-header">
                    <h1 class="animated tada" style="text-align: center;">Feedbacks</h1>      
                  </div> 
                  <table class="table foo">
                    <thead>
                        <th>username</th>
                        <th>email</th>
                        <th>comment</th>
                    </thead>  
                    <tbody>
                
                <?php
                $conn = mysqli_connect("localhost","root","","tbs");
                if($conn-> connect_error){
                    die("Connection failed:". $conn-> connect_error);
                }
              

                $sql ="SELECT username,email,comment from feedback";
                $result = $conn-> query($sql);

                if($result-> num_rows > 0) {
                    while ($row =$result-> fetch_assoc()){
                        echo "<tr><td>". $row["username"]."</td><td>". $row["email"]. "</td><td>".$row["comment"]. "</td></tr>";
                    }
                    echo "</table>";

                }
                else{
                    echo "0 result";
                }
                $conn-> close();
                

                ?>
                                    
            </tbody>
                    </tbody> 
                
                </table>
             </div>
             <div class="col-md-3"></div>
         </div>
          
      </div>  
       
   </div>
    </div> 
    
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    
<script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
     
    </script>
     

    
</body>
</html>