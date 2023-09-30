<?php

$db_host = "localhost"; 
$db_user = "root"; 
$db_pass = ""; 
$db_name = "petify"; 


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$country = $_POST['country'];
$city = $_POST['city'];



$sql = "INSERT INTO orders (name, phone, address, country, city) VALUES ('$name', '$phone', '$address', '$country', '$city')";

if (mysqli_query($conn, $sql)) {
    header("location:orderplaced.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>
