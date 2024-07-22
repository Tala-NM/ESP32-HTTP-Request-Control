<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "my_robot_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT direction FROM directional_table ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    echo $row["direction"];
} else {
    echo "No data found";
}

$conn->close();
?>
