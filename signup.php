<?php

require 'connection.php';
$conn = Connect();
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$telefono = $conn->real_escape_string($_POST['telefono']);
$poblacion = $conn->real_escape_string($_POST['poblacion']);
$idiomasHablados = $conn->real_escape_string($_POST['idiomasHablados']);
$idiomasAprendes = $conn->real_escape_string($_POST['idiomasAprendes']);
$query   = "INSERT into form_users (name,email,phone,city,languageSpoken,languageLearnt) VALUES('" . $name . "','" . $email . "',
  '" . $telefono . "','" . $poblacion . "','" . $idiomasHablados . "','" . $idiomasAprendes . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

echo "Gracias por registrate. Pronto recibirás un email con más detalles. <br>";

$conn->close();

?>