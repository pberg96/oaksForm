
Thanks for your submission!

<?php
$servername = "localhost";
$username = "pberg96";
$password = "password";
$dbname = "oakssurvey";

$varName = $_POST['name'];
$varAddress = $_POST['address'];
$varLength = $_POST['length'];
$varDescription = $_POST['description'];
$varNeeds = $_POST['needs'];
$varHelp = $_POST['help'];
$varPrayer = $_POST['prayer'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO responses (Name, Address, Length, Description, Needs, Help, Prayer)
VALUES ('$varName', '$varAddress', '$varLength', '$varDescription', '$varNeeds', '$varHelp', '$varPrayer')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
