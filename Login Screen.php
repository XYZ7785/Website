<!DOCTYPE html>
<html>
<head>
<title>Login Screen</title>
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
<form action="Janow Financializer Form Screen.php" method="POST">
    <label>Name</label>  <input type="text" nam="name">  
    <br><br>
    <label>Password</label>  <input type="password" nam="password">
    <br><br>
    <input type="submit" name="submit" value="Login">  
</form>
<?php
if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];
    
    $con = mysqli_connect("localhost", "root", "", "login_details");

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($password === "dumka@321") {
        mysqli_select_db($con,"login_details");
        $insert_query = "INSERT INTO details (name, password) VALUES (?, ?)";

        $stmt = mysqli_prepare($con, $insert_query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $name, $password); // Changed "issss" to "ss"
            if (mysqli_stmt_execute($stmt)) {
                echo "Click the button below to get detailed expenses report";
            } else {
                echo "Error: " . $insert_query . "<br>" . mysqli_error($con);
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Error: Unable to prepare statement";
        }
    } else {
        echo "Wrong password, try again";
    }

    mysqli_close($con);
}
?>
</body>
</html>
