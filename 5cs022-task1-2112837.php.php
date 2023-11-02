<!DOCTYPE html>
<html>
<head>
<title>Game Inventory</title>

<?php
// Connect to database
$mysqli = new mysqli("localhost","2112837","p99fm2","db2112837");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Run SQL query
$res = mysqli_query($mysqli, "SELECT Game Name, Price, Genre, Date of Release FROM assessment");


echo "<table><tr><th>Name</th><th>Genre</th><th>Multiplayer</th><th>Price</th>";
while($row = mysqli_fetch_assoc($res)) {
	echo "<tr><td>"
	.$row['Game Name'] . "</td><td>"
	.$row['Price'] . "</td><td>"
	.$row['Genre'] . "</td></tr>"
	.$row['Date of Release'] . "</td></tr>";
}
echo "</table>";

echo("<p>". mysqli_num_rows($res) . "record(s)</p>");
?>

<style>
table{
	font-family: arial, sans-serif;
	border-collapse: collapse;
	width: 100%;
}
td, th {
	border: 1px solid #dddddd;
	text-align: left;
	padding: 8px;
}

tr:nth-child(even) {
	background-color: #dddddd;
}
</style>

</body>
</html>