<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <input type="submit" Value="Connect to MySQL Server & Insert data in a table">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "bkborisaniya-mysql.mysql.database.azure.com";
$username = "bhavesh";
$password = "Bkborisaniya@IT";
$dbname = "student";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
$sql = "insert into student values (1, "Nishant", "Bhavnagar", "9444444444", "nsshanghani@it.ssgec");";
$sql .= "insert into student values (2, "Bhavesh", "Bhavnagar", "9824244444", "bkborisaniya@it.ssgec");";
$sql .= "insert into student values (3, "Shardul", "Bhavnagar", "9824244444", "bkborisaniya@it.ssgec");";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
</body>
</html>
