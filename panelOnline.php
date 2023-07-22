<?php
$servername = "localhost:3306";
$username = "shamirit_shamirit";
$password = "Microsecure69";
$dbname = "shamirit_regis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name, Email, Numbers, Dates, Destination, Guests, TIme FROM Reserve";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    echo "<table><tr><th>Name</th><th>Email</th><th>Numbers</th><th>Dates</th><th>Destination</th><th>Guests</th><th>Time Registered</th></tr>";

  while($row = $result->fetch_assoc()) {
   // echo "Name: " . $row["Name"]. " - Email: " . $row["Email"]. "Numbers " . $row["Numbers"]. "Dates: " . $row["Dates"]. " Destination: " . $row["Destination"]. "Guests " . $row["Guests"]. "TIme " . $row["TIme"];

    echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Numbers"]."</td><td>".$row["Dates"]."</td><td>".$row["Destination"]."</td><td>".$row["Guests"]."</td><td>".$row["TIme"]."</td><tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
