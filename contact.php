<?php


//connect to the database microdam
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "shamirit_regis";

$con = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 

    $N=$_POST['Name'];
    $E=$_POST['Email'];
    $P=$_POST['Number'];
    $B=$_POST['date'];
    $A=$_POST['Destination'];
    $C=$_POST['Guests'];

//get the records form the form


//Insert into the database 
$sql = "INSERT INTO `reserve`(`Name`, `Email`, `Numbers`, `Dates`, `Destination`, `Guests`) VALUES ('$N','$E','$P','$B','$A','$C')";

if ($con->query($sql) === TRUE) {
  echo "<center>"."<h2>"."Thank you ". $N ." \nYour Reservation was successful, Our Agent will reach out to you shortly\n". "</h2>"."<center>";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();
?>

<!DOCTYPE html>
<html>
<head>
	<style>
body {background-color:  black;}
h2   {color: gold;
	padding-top:200px;
	padding-bottom:20px;	
}
a    {color: green;}
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Success</title>
</head>
<body>

<a href="https://shamiritours.com">Get Back to Site</a>
</body>
</html>