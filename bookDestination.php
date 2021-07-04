<?php
include 'session.php';

$login_session = $row['email'];
$sql = "SELECT * FROM userdetails WHERE email = '$login_session'";
$result = $conn->query($sql);

while($row = $result->fetch_array()){
   $email = $row['email'];
   $userName = $row['userName'];
   $number = $row['number'];
   $mobileNumber = $row['mobileNumber'];
   }
mysqli_close($conn);
?>

<?php
include 'connect.php';

if(!$conn){
    die ("Conenection Failed: ".mysqli_connect_error());
}

if(isset($_GET["email"]))
{
    $sql = "INSERT INTO booking_details
    (dateBooking, destinationFrom, destinationTo, dateTravel, userName, number, email, mobileNumber) 
    VALUES ('".$_GET["dateBooking"]."','".$_GET["destinationFrom"]."','".$_GET["destinationTo"]."'
    ,'".$_GET["dateTravel"]."','".$_GET["userName"]."','".$_GET["number"]."'
    ,'".$_GET["email"]."','".$_GET["mobileNumber"]."')";
    
    
if(mysqli_query($conn,$sql)){
echo "<font color= 'Green'><b>Staff is successfully created. </b></font>";
header("Refresh:0;url=welcome.php");
}else{
echo "Error:".$sql."<br>".mysqli_error($conn);
}
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bookDestination.css">
   <h2><b><center>Book Destination</center></b></h2>
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF'];?>" method ="get">
   <div class="wrapper">
    <div class="form">
      <input type="hidden" name="dateBooking"value="<?php date_default_timezone_set('asia/kuala_lumpur');echo date("Y-m-d");?>"><br><br>
      <div class="inputfield">
       <br>
 
         <br> <label>Destination From</label>
          <div class="custom_select">
            <select name="destinationFrom">
              <option value="">From</option>
              <option value="Johor">Johor</option>
              <option value="Melaka">Melaka</option>
              <option value="Selangor">Selangor</option>
              <option value="Pahang">Pahang</option>
              <option value="Kelantan">Kelantan</option>
              <option value="Terengganu">Terengganu</option>
              <option value="Perlis">Perlis</option>
              <option value="Kedah">Kedah</option>
              <option value="Negeri Sembilan">Negeri Sembilan</option>
              <option value="Perak">Perak</option>
              <option value="Pulau Pinang">Pulau Pinang</option>
              <option value="Putrajaya">Putrajaya</option>
              <option value="Kuala Lumpur">Kuala Lumpur</option>
            </select>
          </div>
       </div> 
       
        <select name="department">
            <option value=""> Select Department</option>
            <?php echo $options;?>
        </select>

      <div class="inputfield">
          <label>Destination To</label>
          <div class="custom_select">
            <select name="destinationTo">
              <option value="">To</option>
              <option value="Johor">Johor</option>
              <option value="Melaka">Melaka</option>
              <option value="Selangor">Selangor</option>
              <option value="Pahang">Pahang</option>
              <option value="Kelantan">Kelantan</option>
              <option value="Terengganu">Terengganu</option>
              <option value="Perlis">Perlis</option>
              <option value="Kedah">Kedah</option>
              <option value="Negeri Sembilan">Negeri Sembilan</option>
              <option value="Perak">Perak</option>
              <option value="Pulau Pinang">Pulau Pinang</option>
              <option value="Putrajaya">Putrajaya</option>
              <option value="Kuala Lumpur">Kuala Lumpur</option>
            </select>
          </div>
       </div> 


        <div class="inputfield">
          <label>Date</label>
          <input type="date" class="input" name="dateTravel"><br><br>
       </div>  

       <div class="inputfield">
          <label>Name</label>
          <input type="text"  class="input" name="userName" value="<?php echo $userName; ?>" readonly>
       </div>  

       <div class="inputfield">
          <label>IC Number</label>
          <input type="text"  class="input" name="number" value="<?php echo $number; ?>" readonly>
       </div> 

      <div class="inputfield">
          <label>Email</label>
          <input type="text"  class="input" name="email" value="<?php echo $email; ?>" readonly>
       </div> 

      <div class="inputfield">
          <label>Phone</label>
          <input type="text"  class="input" name="mobileNumber" value="<?php echo $mobileNumber; ?>" readonly>
       </div> 

      <div class="inputfield">
        <input type="submit" value="Book your Date" class="btn" onclick="location.href='welcome.php'">
      </div>

      <center><input type="button" value="BACK" class="button"  onclick="location.href ='welcome.php'"></center>

    </div>
</div>

</body>
</html>