<?php

require 'connection.php';
$conn = Connect();
$nombre = $conn->real_escape_string($_POST['nombre']);
$email = $conn->real_escape_string($_POST['email']);
$telefono = $conn->real_escape_string($_POST['telefono']);
$poblacion = $conn->real_escape_string($_POST['poblacion']);
$idiomasHablados = $conn->real_escape_string($_POST['idiomasHablados']);
$idiomasAprendes = $conn->real_escape_string($_POST['idiomasAprendes']);
$query0 = "SELECT count(1) FROM form_users WHERE email = '" . $email . "'";
$result = $conn->query($query0);
$values = $result->fetch_array(MYSQLI_NUM);
$num_rows = $values[0];

if($num_rows < 1) {
  $now = new DateTime();
  $now = $now->format('Y-m-d H:i:s');
  $query   = "INSERT into form_users (name,email,phone,city,languageSpoken,languageLearnt,creationDate) VALUES('" . $nombre . "','" . $email . "',
    '" . $telefono . "','" . $poblacion . "','" . $idiomasHablados . "','" . $idiomasAprendes . "','" . $now . "')";
  $success = $conn->query($query);

  if (!$success) {
      die("Couldn't enter data: ".$conn->error);

  }
  $conn->close();
}
echo $now;

?>
