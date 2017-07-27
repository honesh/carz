<?php
$pickUpTime = $_POST['pick-up-time'];
$returnTime = $_POST['return-time'];
$location = $_POST['location'];
$car = $_POST['car'];
$username = $_COOKIE['username'];

$conn = mysqli_connect("localhost", "root", "", "carz");

$query = "CREATE TABLE IF NOT EXISTS cars(pickuptime text, returntime text, location text, car text, username text)";
mysqli_query($conn, $query);


$query = "INSERT INTO rents VALUES('$pickUpTime', '$returnTime', '$location', '$car', '$username')";

mysqli_query($conn, $query);

echo $pickUpTime, $returnTime, $location, $car;

mysqli_close($conn);

include "success.html";