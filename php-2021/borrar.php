<?php
include("abrir_conexion.php");

if(isset($_GET['dominio'])) {

  $dominio = $_GET['dominio'];
  $query = "DELETE FROM propietario WHERE dominio= '$dominio'";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Tarea Borrada';
  $_SESSION['message_type'] = 'danger';
  header('Location: registro.php');
  
}

?>


