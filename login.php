<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/file1.css" />
 
  
</head>
<div class="fadein">
<body style="background: url(background.jpg) no-repeat center center fixed;">

<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      
      <section class="login-form">
        <center>
      	
          <form method="POST" action="inputlogin.php" role="login" style="margin-right: 20%; margin-left: 20%;">

          <b><font size="6" face="Century Gothic">Log In</font></b><br><br>
          
          <input type="email" name="email" placeholder="Email" required="" class="form-control input-lg"><br>
          
          <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="">
          <br>      
          <button type="submit" name="go" class="button">Sign in</button>
          
          <div>
          	<font face="Century Gothic">
            <a href="#" onclick="history.back(-1)">Kembali</a>
            <a href="buatakun.php">Create account</a> 
            </font>
            
          
          
          </form>
     
        </div>        
      
      </center>
      </section>  
      </div>
      </div>
      
      <div class="col-md-4"></div>
      

  </div>

  <p>

    <br>
    <br>
    
  </p>     
  
  


</body>
</div>
</html>