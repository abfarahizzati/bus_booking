<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM userdetails WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcomeAdmin.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   <head>
      <title>Login Page</title>
          <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
            background: url(userBackground.jpg);
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
		<br><br><br><br>
	
	<br><br>	
	<center><h1><strong>GET STARTED</h1></strong><br></center>
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><center><b>Admin Login</b></center></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
			   	 
				<center><input type="text" name="email" placeholder="Admin Email" style="font-family: 'Montserrat', sans-serif"></center>
				<br>
				<center><input type="password" name="password" placeholder="Password" style="font-family: 'Montserrat', sans-serif"></center>
				<br>
				<br>
				<center><input type="submit" name="Submit" value="Submit" style="font-family: 'Montserrat', sans-serif"></center>
            <br>
            <center><input type="button" value="Back" onclick="location.href ='index.php'" style="font-family: 'Montserrat', sans-serif"></center>

               </form>
               
           
            </div>
				
         </div>
			
      </div>

   </body>
</html>