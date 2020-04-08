<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>


<?php
$servername = getenv('MYSQL_SERVICE_HOST');
$username = "myuser";
$password = "mypassword";
$dbname = "mydb";
$myport = getenv('MYSQL_SERVICE_PORT');

$n = $_POST["name"];
$e = $_POST["email"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $myport);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection failed";
}

$sql = "INSERT INTO address (name,  email) VALUES ('$n', '$e')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?><br>

<form action="index.php" method ="get">
    <input type="submit" value="Back">    
</form>
</body>
</html>
