<?php

require 'connection.php';
$conn = Connect();
$nombre = $conn->real_escape_string($_POST['nombre']);
$email = $conn->real_escape_string($_POST['email']);
$telefono = $conn->real_escape_string($_POST['telefono']);
$poblacion = $conn->real_escape_string($_POST['poblacion']);
$idiomasHablados = $conn->real_escape_string($_POST['idiomasHablados']);
$idiomasAprendes = $conn->real_escape_string($_POST['idiomasAprendes']);
$query   = "INSERT into form_users (name,email,phone,city,languageSpoken,languageLearnt) VALUES('" . $nombre . "','" . $email . "',
  '" . $telefono . "','" . $poblacion . "','" . $idiomasHablados . "','" . $idiomasAprendes . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
echo $success;
$conn->close();

?>
