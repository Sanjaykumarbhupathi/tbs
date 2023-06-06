<?php
    $connection= mysqli_connect("localhost","root","","tbs");

    session_start();

    $sql= "SELECT * FROM `vehicle`";
    $res=mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Drivers</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    
</head> 

<body  > 
  
   <div id="myDiv">
  
   <?php include 'navbar_admin.php'; ?>
   <br><br><br>
   <div class="container">
   <h1 class="animated bounceIn" style="text-align: center;">Vehicle List</h1> 
                    <form action="deletevehicle1.php" method="post">
                <div class="form-input">
                    <input type="search" name="veh_id" placeholder="Entervehicle_id to Delete vehicle...">
                    <button type="submit" class="search-btn"><i class='bx bxs-message-square-x'></i></button>
                </div>  
      <?php
        if(mysqli_num_rows($res)>0){ ?>
    
      <div class="container">
         <div class="row">
             <div class="col-md-3"></div>
             <div class="col-md-6 foo">
                 <div class="page-header">
                       
                  </div> 
                  <table class="table">
                    <thead>
                        <th>vehicle Picture</th>
                        <th>vehileid</th>
                        <th>vehicle Registration No</th>
                    </thead>  

                    <?php while($row=mysqli_fetch_assoc($res)) {  ?>
                    <tbody>
                        <tr>
                            <td><img height="300px" width="300px" src="vehicle picture/<?php echo $row["veh_photo"]; ?>" alt="dp"></td>
                            <td><a href="busprofile.php?busid=<?php echo $row["veh_id"]; ?>"> <?php echo $row["veh_id"] ?></a></td>
                            <td><a href="busprofile.php?busid=<?php echo $row["veh_id"]; ?>"> <?php echo $row["veh_reg"] ?></a></td>
                            
                            
                        </tr>
                    </tbody> 
                <?php } }?>
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
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
       

   
    
</body>
</html>