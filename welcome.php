<?php
include 'session.php';

$login_session = $row['email'];
$sql = "SELECT * FROM userdetails WHERE email = '$login_session'";
$result = $conn->query($sql);

while($row = $result->fetch_array()){
	$email = $row['email'];
	$userName = $row['userName'];
	}
mysqli_close($conn);
?>

 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="welcome.css">
</head>
<body>

  <div class="navbar">

   <a href="logout.php">Logout</a>

</div>

<div class="main">
  <center>Welcome <?php echo $userName; ?></center> 
</div>
<br>
<br>
<br>
<center><a href="bookDestination.php"><button class="btn"><i class="fa fa-bars"></i> Book Destination</button></center>
<br>
<br>
<br>
<center><a href="viewBooking.php"><button class="btn"><i class="fa fa-bars"></i> View Destination</button></center>
<br>
<br>
<br>   
<center><a href="delete.php"><button class="btn"><i class="fa fa-bars"></i> Delete Destination</button></center>



</body>
</html> 

