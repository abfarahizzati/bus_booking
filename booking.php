<?php

// php select option value from database

include 'connect.php';

// mysql select query
$query = "SELECT * FROM `addtravel`";

$result2 = mysqli_query($conn, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}
?>

<?php
include 'connect.php';

if(!$conn){
    die ("Conenection Failed: ".mysqli_connect_error());
}

if(isset($_GET["email"]))
{
    $sql = "INSERT INTO userdetails
    (userName, email, icNumber, gender, mobileNumber, password, passwordConfirmation) 
    VALUES ('".$_GET["userName"]."','".$_GET["email"]."','".$_GET["icNumber"]."'
    ,'".$_GET["gender"]."','".$_GET["mobileNumber"]."','".$_GET["password"]."'
    ,'".$_GET["passwordConfirmation"]."')";
    
    
if(mysqli_query($conn,$sql)){
echo "<font color= 'Green'><b>Staff is successfully created. </b></font>";
header("Refresh:0;url=mainMenu.php");
}else{
echo "Error:".$sql."<br>".mysqli_error($conn);
}
}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Identity</title>
	<link rel="stylesheet" type="text/css" href="registerUser.css">
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF'];?>" method ="get">
	<div class="wrapper">
    <div class="form">
       <div class="inputfield">
          <label>Full Name</label>
          <input type="text" class="input" name="userName" >
       </div>  
       
       <div class="inputfield">
          <label>Email</label>
          <input type="text" class="input" name="email">
       </div> 

       <div class="inputfield">
          <label>IC Number</label>
          <input type="text"  class="input" name="icNumber">
       </div> 

       <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="gender">
              <option value="">Select</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
       </div> 

       <div class="inputfield">
          <label>Mobile Number</label>
          <input type="text"  class="input" name="mobileNumber">
       </div> 
       
       <div class="inputfield">
          <label>Password</label>
          <input type="text" class="input" name="password">
       </div> 
       
       <div class="inputfield">
          <label>Confirm Password</label>
          <input type="text" class="input" name="passwordConfirmation">
       </div> 
       

        
      <div class="inputfield">
        <input type="submit" value="ADD" class="btn" onclick="location.href='login.php'">
      </div>

      <center><input type="button" value="BACK" class="button"  onclick="location.href ='index.php'"></center>


    </div>


</div>
    <center><u><p span class="dot" onclick="location.href ='login.php'" style="font-family: 'Montserrat', sans-serif" >Already have account? Click here</p></u></center>
</body>
</html>