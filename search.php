<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banglaexpoframe";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
} 
$id = $_GET['q'];
$sql = "select username from user where username like '%".$id."%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 echo $row["username"]. "\n";
 }
} else {
 echo "0 results";
}
$conn->close();
?>