<?php
session_start();
$wsId = $_SESSION["WorkSheetId"];
$rowNum = $_POST['rowNum'];
$column = $_POST['column'];
$oldVal = $_POST['oldVal'];
$newVal = $_POST['newVal'];

if($column == "AS")
	$column =  "AS1";
if($column == "AT")
	$column =  "AT1";


$txt = $_SESSION['textbox'];


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

$sql = "UPDATE WorkSheet SET ". $column ." = '" . $newVal . "' WHERE Rowid = ". $rowNum . " AND WorkSheetId = '" . $wsId . "'";
$result = $conn->query($sql);

$conn->commit();
$conn->close();





?>





















