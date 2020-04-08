<html>
<body>
<br>

<?php
$servername = getenv('MYSQL_SERVICE_HOST');
$username = "myuser";
$password = "mypassword";
$dbname = "mydb";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection failed";
}

$sql = "SELECT * FROM address";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " ---   Email: " . $row["email"]. "<br>";
        
    }
} else {
    echo "0 results";
}
$conn->close();

?><br>

<form action="index.php" method ="get">
    <input type="submit" value="Back">    
</form>
</body>
</html>
