<?php

require_once "db/connection.php";

$name = $_POST['inputName'];
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];
$address = $_POST['inputAddress'];
$city = $_POST['inputCity'];
$state = $_POST['inputState'];
$zipCode = $_POST['inputZipCode'];

$query = ("INSERT INTO `user` (`name`, `email`, `password`)
            VALUES ('$name', '$email', '$password')
        ");
$statement = $pdo_connection->prepare($query);
$statement->execute();

