<!DOCTYPE html>
<html lang="en">
<head>
<title>Janow Finance Report</title>
<style> 
body {
    background: url(background.jpg);
    background-repeat: no-repeat;
    background-size: Fit;
    font-family: "Lato", verdana;
    color: red;
}
table, th, td {
  border:1px solid black;
font-weight: bold;
}
</style>
</head>
<body>
<centre><b><i>Detailed Expense Report</i></b><p>
<b><i>This is your Expense Report based on the various entries on the database.</i></b>
<br><br><br><br>
<?php
$con = mysqli_connect("localhost", "root", "", "janow financializer");
mysqli_select_db($con,"janow financializer");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM expenses";
$result = $con->query($sql);

echo "<table style='width:100%'>";
echo "<tr>
    <th><b>S.L No</b></th>
    <th>Name</th>
    <th>Wings</th>
    <th>Department</th>
    <th>Amount</th>
</tr>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['sl_no'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['wings'] . "</td>";
    echo "<td>" . $row['department'] . "</td>";
    echo "<td>" . $row['amount'] . "</td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='5'>No Results Found</td></tr>";
}
echo "</table>";
$con->close();

// Manually assigned row values
$row['sl_no']="1";
$row['name']="2";
$row['wings']="3";
$row['department']="4";
$row['amount']="5";
?>
<b>Note: This Information is obtained from the database.So, the user is accountable for any modifications in the data</b>
<br><br>
Click below to add another record
<br><br>
<form action="Janow Financializer Form Screen.php">
<input type="submit" name="submit" value="Click Here">
</form>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br>
<b><i>Thank you for your visit to the website :)</i></b> 
</body>
</html>
