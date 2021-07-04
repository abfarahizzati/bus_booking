<html>
<head>
<h1><b><center>Update Booking Details</center></b></h1>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="delete.css"></head>
<body>

<div style="text-align:center;font-size:110%">

<?php
include 'connect.php';

$id1 = $_GET['id'];
$sql = "SELECT * FROM booking_details WHERE id = '$id1'";
$result = $conn->query($sql);

while($row = $result->fetch_array()){
	$id = $row['id'];
   $dateBooking = $row['dateBooking'];
   $destinationFrom = $row['destinationFrom'];
   $destinationTo = $row['destinationTo'];
   $dateTravel = $row['dateTravel'];
   $email = $row['email'];
   $userName = $row['userName'];
   $number = $row['number'];
   $mobileNumber = $row['mobileNumber'];
}
mysqli_close($conn);
?>


<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
<input type="hidden" name="Current_ID" value="<?php echo $id1; ?>">
Booking Id: <input type="text" name="id" value="<?php echo $id; ?>"readonly><br><br>
Date Booking: <input type="text" name="dateBooking" value="<?php echo $dateBooking; ?>" readonly><br><br>
Destination From: <input type="text" name="destinationFrom" value="<?php echo $destinationFrom; ?>"><br><br>
Destination To: <input type="text" name="destinationTo" value="<?php echo $destinationTo; ?>"><br><br>
Date Travel: <input type="text" name="dateTravel" value="<?php echo $dateTravel; ?>"><br><br>
Email: <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
Full Name: <input type="text" name="userName" value="<?php echo $userName; ?>"><br><br>
Ic Number: <input type="text" name="number" value="<?php echo $number; ?>"><br><br>
Phone Number: <input type="text" name="mobileNumber" value="<?php echo $mobileNumber; ?>"><br><br>


<input type="submit" name="Update" value="Update"><br>
</body>
</html>

<?php
include 'connect.php';

if(isset($_GET['Update'])){
	$id1 =$_GET['Current_ID'];
    $id =$_GET['id'];
	$dateBooking = $_GET['dateBooking'];
	$destinationFrom = $_GET['destinationFrom'];
	$destinationTo = $_GET['destinationTo'];
	$dateTravel = $_GET['dateTravel'];
	$email = $_GET['email'];
	$userName = $_GET['userName'];
	$number = $_GET['number'];
	$mobileNumber = $_GET['mobileNumber'];
	
	$sql = "UPDATE booking_details SET id ='$id1' ,
			dateBooking = '$dateBooking'
		,destinationFrom = '$destinationFrom' ,
		destinationTo = '$destinationTo'	,
		dateTravel = '$dateTravel',
		email = '$email'	,
		userName = '$userName',number = '$number'
		,mobileNumber = '$mobileNumber'
	WHERE id = '$id1'";
	if($conn->query($sql)){
		mysqli_close($conn);
echo "<div style='text-align:center;font-size:110%'><span style='background-color: springgreen';><b>Update Success.</b></span></div>";
		header("Refresh:0;url=welcome.php?id=$id");
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

?>
<form>
 <br> <input type="button" value="Back" onclick="location.href ='welcome.php'">
</form></div>