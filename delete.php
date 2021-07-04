<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="delete.css">
</head>
<body>

<h2><center><b>Delete Booking</b></center></h2>
<br>
<br>
<h3><center><b>Choose your Date Travel and Your Destination. Click button when your are ready to delete your booking number </b></center></h3>

</body>
</html> 


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get"><br>
<?php
include 'session.php';
$login_session = $row['email'];
$sql = "SELECT * FROM booking_details where email = '$login_session'";
$result = $conn->query($sql);
    if(mysqli_num_rows($result) > 0){
$select= '<center><select name="z"></center>';
while($row = $result->fetch_array()){
      $select.='<option value="'.$row['dateTravel'].'", "'.$row['destinationFrom'].'", , "'.$row['destinationTo'].'">
      Date Travel: '.$row['dateTravel'].', 
      Destination From: '.$row['destinationFrom'].', 
      Destination To: '.$row['destinationTo'].' </option>';
  }

$select.='</select>';
    echo $select;
    echo "<br><br><br><input type='submit' name='Delete' value='Delete'></p>";
    }
else{       
    echo "<b><font color='Red'>You don't have any booking yet!</font></b>";
    }
?>
</form>

<?php
include 'connect.php';
if(isset($_GET['Delete'])){
    $id = $_GET['id'];
        $sql1 = "DELETE FROM booking_details WHERE id = '$id'";
        if($conn->query($sql1)){
            echo "<b><font color='Green'>".$id." is deleted</font></b>";
        header("Refresh:0;url=viewBooking.php");
        }
    }
mysqli_close($conn);
?>

<form>
  <input type="button" value="Back" onclick="location.href ='welcome.php'">
</form></div>





