<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edicion</title>
  <link rel="stylesheet" href="editar.css">
</head>
<body>
  
</body>
<center><h1>Edicion: Agenda Taller </h1></center>
</html>

<?php
include("abrir_conexion.php");

if(isset($_GET['dominio'])) {
  $dominio = $_GET['dominio'];

  $consulta = "SELECT dominio, vehiculo, nombre, tel, detalle FROM propietario WHERE dominio = '$dominio'"; 
  $resultados = mysqli_query($conexion,$consulta);

  while($datos = mysqli_fetch_array($resultados)){

    ?>

      <form method="POST" action="editar.php" >
    
        <div class="form-group">
           
          <input type="text"  value="<?php echo $datos["dominio"];?>" name="dominio" class="form-control" id="dominio"placeholder=Dominio>
      </div><br>
    
      <div class="form-group">
          
          <input type="text"  value="<?php echo $datos["vehiculo"];?>" name="vehiculo" class="form-control" id="vehiculo" placeholder=vehiculo >
      </div><br>
    
       <div class="form-group">
          
          <input type="text" value="<?php echo $datos["nombre"];?>"name="nombre" class="form-control" id="nombre"placeholder=Nombre >
      </div><br>
    
      <div class="form-group">
          
          <input type="number" value="<?php echo $datos["tel"];?>"name="tel" class="form-control" id="tel" placeholder=N°Contacto >
      </div>

      <div class="form-group">
  
  <textarea name="detalle" class="form-control" id="detalle" placeholder="Detalles" ><?php echo $datos["detalle"];?></textarea>

  </div>
        
        <center>
          <input type="submit" value="Guardar" class="btn btn-success" name="btn3">
          
         
        </center><br><br>
       
      </form>

      <?php 
      break;
  }
}
  
  if(isset($_POST['dominio'])) {

   mysqli_query($conexion,  "UPDATE propietario SET
  dominio ='".$_POST["dominio"]."',
  vehiculo ='".$_POST['vehiculo']."',
  nombre ='".$_POST['nombre']."',
  tel ='".$_POST['tel']."',
  detalle ='".$_POST['detalle']."'

  WHERE dominio ='".$_POST['dominio']."'");

  header('Location: registro.php');
  exit;

 }
 ?>

 