<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laptop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST["name"];
$number = $_POST["number"];
$address = $_POST["address"];
$pin = $_POST["pin"];
$type = $_POST["company"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];

$sql = "INSERT INTO buy (name, number, address, pin, company, price, quantity)
VALUES ('$name', '$number', '$address', '$pin', '$company', '$price', '$quantity')";

if (mysqli_query($conn, $sql)) {
    echo
    
    header('location:order.html');

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
