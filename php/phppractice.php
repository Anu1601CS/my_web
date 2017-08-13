

<!DOCTYPE html>
<html>
<body>

<form  enctype="multipart/form-data" method="post" action="upload.php">

Select image to Upload<br>
<br>

NAME:<input type="text" name="username">
PASS:<input type="password" name="pass">
<input type="file" name="fileToUpload" id="fileToUpload">


<input type="submit" name="submit" value="Upload">
</form>




</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE my_db";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>