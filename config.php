<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$database="bootstrap";
// Create connection
$conn = mysqli_connect($servername, $username,$password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<br>";
mysqli_select_db($database,$conn) or die("opps,something went wrong"); 
*/
$servername = "localhost";
$username = "root";
$password = "";
$database="bootstrap";
$connection = mysqli_connect($servername,$username,$password);
if (!$connection) {
    die("Database connection failed: " . mysqli_error());
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection, $database);
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}

?> 