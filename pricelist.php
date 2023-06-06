<?php
    session_start();
?>


<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>Welcome to Vehicle Management</title>   
<meta name="description" content="Bootstrap."> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<link rel="stylesheet" href="style.css">

</head>


<body style="margin:80px auto">
<?php include 'navbar.php';?>  
<div class="container foo">
<div class="row header" style="text-align:center">
<h3>Our Price chart</h3>
</div>



<table id="myTable" class="table table-bordered table-striped table-hover table-condensed" >  


<thead>  
          <tr>  
            <th>NO</th>  
            <th>Vechile_Type</th>  
            <th>price per kilometer</th>   
          </tr>  
        </thead>  
       <tbody>  
          <tr>  
            <td>01</td>  
            <td>mini</td>  
            <td>20/-</td> 
          </tr> 
          <tr>  
            <td>02</td>  
            <td>prime seden</td>  
            <td>30/-</td> 
          </tr> 
          <tr>  
            <td>03</td>  
            <td>suv</td>  
            <td>40/-</td> 
          </tr> 
         
        </tbody>  

</table>

	</div>
    
    <br>
    <div style = "position:fixed; left:100px; top:320px;">
    <b style="font: size 500px;">You can make your payments through</b>
    <br>
    <img src="Google-Pay-Icon.jpg" alt="Gpay" width="50" height="60" >
    <a>upi id : taxibooking@okhdfc</a>
    <br>
    <img src="PhonePe-Logo-Svg.jpg" alt="phonepe" width="50" height="60">
    <a>upi id : 1234567890@ybl</a>
    <br>
    <img src="Paytm-Cricle-Logo-PNG.jpg" alt="paytm" width="50" height="60">
    <a>upi id : 1234567890@paytm</a>
    
    
  </div>  
	  
<script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        
</script>
    
</body>  

</html>