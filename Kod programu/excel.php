<?php
session_start();

if(!isset($_SESSION["FirstName"]) ||  !isset($_SESSION["WorkSheetId"])){
	ob_start();
    header('Location: login.html');
    ob_end_flush();
    die(); 
}

?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/handsontable-pro@latest/dist/handsontable.full.min.css">
<link rel="stylesheet" type="text/css" href="https://handsontable.com/static/css/main.css">
<script src="https://cdn.jsdelivr.net/npm/handsontable-pro@latest/dist/handsontable.full.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>
<DIV style="left: 50px">
<center>

<table style="width:90%">
<center>
Arkusz Kalkulacyjny Online
</center>
  <tr>
    <th align="left">Użytkownik: <?php  echo $_SESSION["FirstName"] ; ?></th>
    <th align="right" onClick="logout()">Wyloguj</th>
 </tr>
 </table>
			
<center>
</DIV>
<?php
$wsId = $_SESSION["WorkSheetId"];
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
$sql = "SELECT * FROM  WorkSheet WHERE WorkSheetId = '" .$wsId ."' AND RowId IS NOT NULL";
$result = $conn->query($sql);

echo "<script>var dataObject = [\r\n";
$isfirst = True;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		if (!$isfirst)
			echo ",\r\n";
        //echo "id: " . $row["RowId"]. " - Name: " . $row["A"]."N".$row["B"]."N"."<br>";
		echo "{";
		echo "id: " . $row["RowId"]. ",\r\n";
		echo "A:'".$row["A"]. "',\r\n"; echo "B:'".$row["B"]. "',\r\n"; echo "C:'".$row["C"]. "',\r\n"; echo "D:'".$row["D"]. "',\r\n"; echo "E:'".$row["E"]. "',\r\n"; 
		echo "F:'".$row["F"]. "',\r\n"; echo "G:'".$row["G"]. "',\r\n"; echo "H:'".$row["H"]. "',\r\n"; echo "I:'".$row["I"]. "',\r\n"; echo "J:'".$row["J"]. "',\r\n"; 
		echo "K:'".$row["K"]. "',\r\n"; echo "L:'".$row["L"]. "',\r\n"; echo "M:'".$row["M"]. "',\r\n"; echo "N:'".$row["N"]. "',\r\n"; echo "O:'".$row["O"]. "',\r\n"; 
		echo "P:'".$row["P"]. "',\r\n"; echo "Q:'".$row["Q"]. "',\r\n"; echo "R:'".$row["R"]. "',\r\n"; echo "S:'".$row["S"]. "',\r\n"; echo "T:'".$row["T"]. "',\r\n"; 
		echo "U:'".$row["U"]. "',\r\n"; echo "V:'".$row["V"]. "',\r\n"; echo "W:'".$row["W"]. "',\r\n"; echo "X:'".$row["X"]. "',\r\n"; echo "Y:'".$row["Y"]. "',\r\n"; 
		echo "Z:'".$row["Z"]. "',\r\n"; echo "AA:'".$row["AA"]. "',\r\n"; echo "AB:'".$row["AB"]. "',\r\n"; echo "AC:'".$row["AC"]. "',\r\n"; echo "AD:'".$row["AD"]. "',\r\n"; 
		echo "AF:'".$row["AF"]. "',\r\n"; echo "AG:'".$row["AG"]. "',\r\n"; echo "AH:'".$row["AH"]. "',\r\n"; echo "AC:'".$row["AC"]. "',\r\n"; echo "AI:'".$row["AI"]. "',\r\n"; 
		echo "AJ:'".$row["AJ"]. "',\r\n"; echo "AK:'".$row["AK"]. "',\r\n"; echo "AL:'".$row["AL"]. "',\r\n"; echo "AM:'".$row["AM"]. "',\r\n"; echo "AN:'".$row["AN"]. "',\r\n"; 
		echo "AO:'".$row["AO"]. "',\r\n"; echo "AP:'".$row["AP"]. "',\r\n"; echo "AQ:'".$row["AQ"]. "',\r\n"; echo "AR:'".$row["AR"]. "',\r\n"; echo "AS:'".$row["AS1"]. "',\r\n";
		echo "AT:'".$row["AT1"]. "',\r\n"; echo "AU:'".$row["AU"]. "',\r\n"; echo "AV:'".$row["AV"]. "',\r\n"; echo "AW:'".$row["AW"]. "',\r\n"; echo "AX:'".$row["AX"]. "'}\r\n"; 
		
		if($isfirst)
			$isfirst = False;
		 
	}
} else {
    //echo "0 results";
}
$conn->close();
echo "];"

?>
function logout(){
	location.href = 'logout.php';
}
</script>

<div id="hot" style="left: 50px"></div>
<script>
var hotElement = document.querySelector('#hot');
var hotElementContainer = hotElement.parentNode;
var hotSettings = {
  data: dataObject,
  columns: [ { data: 'A', type: 'text'}, { data: 'B', type: 'text'}, { data: 'C', type: 'text'},  { data: 'D', type: 'text'}, { data: 'E', type: 'text'},
			 { data: 'F', type: 'text'}, { data: 'G', type: 'text'}, { data: 'H', type: 'text'},  { data: 'I', type: 'text'}, { data: 'J', type: 'text'},
			 { data: 'K', type: 'text'}, { data: 'L', type: 'text'}, { data: 'M', type: 'text'},  { data: 'N', type: 'text'}, { data: 'O', type: 'text'},
			 { data: 'P', type: 'text'}, { data: 'Q', type: 'text'}, { data: 'R', type: 'text'},  { data: 'S', type: 'text'}, { data: 'T', type: 'text'},
			 { data: 'U', type: 'text'}, { data: 'V', type: 'text'}, { data: 'W', type: 'text'},  { data: 'X', type: 'text'}, { data: 'Y', type: 'text'},
			 { data: 'Z', type: 'text'}, { data: 'AA', type: 'text'}, { data: 'AB', type: 'text'}, { data: 'AC', type: 'text'}, { data: 'AD', type: 'text'},
			 { data: 'AE', type: 'text'}, { data: 'AF', type: 'text'}, { data: 'AG', type: 'text'}, { data: 'AH', type: 'text'}, { data: 'AI', type: 'text'},
			 { data: 'AJ', type: 'text'}, { data: 'AK', type: 'text'}, { data: 'AL', type: 'text'}, { data: 'AM', type: 'text'}, { data: 'AN', type: 'text'}, 
			 { data: 'AO', type: 'text'}, { data: 'AP', type: 'text'}, { data: 'AQ', type: 'text'}, { data: 'AR', type: 'text'}, { data: 'AS', type: 'text'}, 
			 { data: 'AT', type: 'text'}, { data: 'AU', type: 'text'}, { data: 'AV', type: 'text'}, { data: 'AW', type: 'text'}, { data: 'AX', type: 'text'}
  ],
  stretchH: 'all',
  width: $(window).width() * 0.95,
   height: $(window).height() * 0.85,
  autoWrapRow: true,
  formulas: true,
  maxRows: 50,
  rowHeaders: true,
  colHeaders: [
	 'A', 'B', 'C', 'D', 'E', 
	 'F', 'G', 'H', 'I', 'J', 
	 'K', 'L', 'M', 'N', 'O', 
	 'P', 'Q', 'R', 'S', 'T', 
	 'U', 'V', 'W', 'X', 'Y',
	 'Z', 'AA', 'AB', 'AC', 'AD', 
	 'AE', 'AF', 'AG', 'AH', 'AI', 
	 'AJ', 'AK', 'AL', 'AM','AN', 
	 'AO', 'AP', 'AQ', 'AR', 'AS',
	 'AT', 'AU', 'AV', 'AW', 'AX'
  ],
	afterChange: (changes) => {
		
	changes.forEach(([row, prop, oldValue, newValue]) => {
		$.ajax({
			url: 'manageCell.php',
			type: 'POST',
			data: {  rowNum: row + 1, column: prop, oldVal: oldValue,  newVal: newValue  },
			success: function(data) {
				//alert('Saved data to php! '  + data);
			},
			error: function (data) {
				alert('Problem z połączniem / zapisem danych');
			}
		});
	});
	}
  
};
var hot = new Handsontable(hotElement, hotSettings);
</script>
</body>
</html>