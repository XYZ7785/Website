<!DOCTYPE html>
<html>
<head>
<title>Janow Financializer</title>
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
<h2>Hi,</h2> 
<h2>This your Janow Financializer.</h2>
<h2>Please enter the following credentials to proceed further.</h2>
<form action="Janow Financializer Confirmation Screen.php" method="POST">   
<label>S.L No.:</label>  <input type="number" name="sl_no">    
<br><br>   
<label>Name:</label>  <input type="text" name="name">  
<br><br>
<label>Wings:</label> <input type="text" name="wings">  
<br><br>  
<label>Department:</label>  <input type="text" name="department">  
<br><br>
<label>Amount:</label>  <input type="text" name="amount">  
<br><br>
<input type="submit" name="submit" value="Add Record">  
</form>

<?php
if(isset($_POST["submit"])) {
    $sl_no = $_POST["sl_no"];
    $name = $_POST["name"];
    $wings = $_POST["wings"];
    $department = $_POST["department"];
    $amount = $_POST["amount"];
    echo "Insert into expenses Table values ($sl_no, '$name', '$wings', '$department', '$amount')";
}
?>
<br><br><br><br>
Click below to view the data saved till now
<br><br>
<form action="Janow Financializer Output Screen.php">
<input type="submit" name="submit" value="Click Here">
</form> 
</body>
</html>
