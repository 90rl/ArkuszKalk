<?php
session_start();
$login = $_POST['login'];
$pwd = $_POST['pwd'];


$servername = "serwer1864358.home.pl";
$username = "29320386_1";
$password = "arkuszkalkulacyjny";
$dbname = "29320386_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br>";

$sql = "SELECT * FROM Users WHERE Email ='" . $login ."' AND Password = '" . $pwd . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {

		  $_SESSION["FirstName"] = $row["FistName"];
		  $_SESSION["SecondName"] = $row["SecondName"];
		  $_SESSION["WorkSheetId"] = $row["WorkSheetId"];
		echo  "EXIST LOGIN" .  $row["FistName"];
	 }
} else {
		echo "NOTEXIST LOGIN";
}	
$conn->commit();
$conn->close();





?>





















