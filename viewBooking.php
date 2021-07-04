<html>
<head>
<h1 style="border:4px solid black;  background: white; text-align: center;">Booking List</h1>
<hr />
</head>
<body>
<body style="background: url('images/loginUser.jpg');background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100%; "><div style="text-align:center;font-size:110%">
<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: center;
}
table tr:nth-child(even) {
    background-color: #eee;
}
table tr:nth-child(odd) {
   background-color:#fff;
}
table th {
    background-color: black;
    color: white;
}
</style>
</html>


<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="jquery.dataTables.min.js"></script>
    <script src="dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
   <table id="data-table" class="table table-bordered table-striped">
     <thead>
          <tr>
            <th><center>Booking ID</center></th>
			<th><center>Booking Date</center></th>
            <th><center>From</center></th>
            <th><center>To</center></th>
            <th><center>Date Itinery</center></th>
            <th><center>Edit</center></th>
          </tr>
     </thead>


<?php
include 'session.php';

$login_session = $row['email'];
//$id = isset($_POST['username']) ? $_POST['username']: '';
$sql = "SELECT * FROM booking_details WHERE email = '$login_session'";
echo "<br>";

$result = $conn->query($sql);
    if(mysqli_num_rows($result) > 0){

//$result["username"] = $row["username"];
    while($row = $result->fetch_array()){
           echo '
              <tr>
                <td>'.$row["id"].'</td>
				<td>'.$row["dateBooking"].'</td>
                <td>'.$row["destinationFrom"].'</td>
                <td>'.$row["destinationTo"].'</td>
                <td>'.$row["dateTravel"].'</td>
                <td><a href="update.php?update=1&id='.$row["id"].'?'.$row["email"].'">Edit<span class="glyphicon glyphicon-edit"></span></a></td>
              </tr>
            ';
        }
        echo "</table>";
        mysqli_free_result($result);
} else{ echo "<b><font color='Red'>You have no booking yet!</font></b>";}
mysqli_close($conn);

?>


<br><br>
<form>
  <input type="button" class="btn btn-info" value="Back" onclick="location.href ='welcome.php'">
  
</form></div>

