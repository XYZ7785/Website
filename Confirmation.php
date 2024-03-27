<!DOCTYPE html>
<html>
<head>
<title>Expenses Report</title>
</head>
<style> 
body {
    background: url(background.jpg);
    background-repeat: no-repeat;
    background-size: Fit;
    font-family: "Lato", verdana;
    font-weight: bold;
    color: red; /* Changed from font-color to color */
}
</style>
</head>
<body>
<div>
<body>
<h2>Thank You For Your Response!!! </h2>
<?php
$con = mysqli_connect("localhost", "root", "", "janow financializer");
mysqli_select_db($con,"janow financializer");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sl_no = isset($_POST["sl_no"]) ? $_POST["sl_no"] : '';
$name = isset($_POST["name"]) ? $_POST["name"] : '';
$wings = isset($_POST["wings"]) ? $_POST["wings"] : '';
$department = isset($_POST["department"]) ? $_POST["department"] : '';
$amount = isset($_POST["amount"]) ? $_POST["amount"] : '';

$insert_query = "INSERT INTO expenses (sl_no, name, wings, department, amount) VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($con, $insert_query);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "issss", $sl_no, $name, $wings, $department, $amount);
    if (mysqli_stmt_execute($stmt)) {
        echo "Click the button below to get detailed expenses report";
    } else {
        echo "Error: " . $insert_query . "<br>" . mysqli_error($con);
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Error: Unable to prepare statement";
}

mysqli_close($con);
?>
<br><br>
<form action="Janow Financializer Output Screen.php">
<input type="submit" name="submit" value="Click Here">
</form>  
</div>
<br><br><br><br>
Click below to add another record
<br><br>
<form action="Janow Financializer Form Screen.php">
<input type="submit" name="submit" value="Click Here">
</form> 
</body>
</html>
