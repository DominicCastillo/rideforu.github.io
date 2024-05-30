<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editardatosAuto.css">
    <script src="https://kit.fontawesome.com/abe298e945.js" crossorigin="anonymous"></script>
    <title>Editar Datos</title>
    
</head>

<body>
 
<center class="form">

<h2>Editar datos del auto</h2><br><br><br>
<div>

<img src="assets/img/carrito.jpeg" alt="" width="150px" height="90px" style="padding: 3px; border-radius: 15px;"><i class="fa-regular fa-square-plus"></i></i>

<img src="assets/img/images.jpeg" alt="" width="150px" height="90px" style="padding: 3px; border-radius: 15px;" ><i class="fa-regular fa-square-plus"></i>

</div>
<br>
<form class="grupo_input" action="" method="POST">

  <div class="grupo_input">
  <label class="formLabel">Modelo:</label><br>
 
  <input class="input" type="text" name="model" id="model" ><i class="fa-solid fa-pen"></i><br>
</div>
<div class="grupo_input">
  <label class="formLabel" >Placa:</label><br>
  <input class="input" type="text" name="plate" id="plate"><i class="fa-solid fa-pen"></i><br>
</div>
<div class="grupo_input">
  <label class="formLabel" >Año del vehículo:</label><br>
  
  <input class="input" type="text" name="carYear" id="carYear"><i class="fa-solid fa-pen"></i><br>
</div>
<div class="grupo_input">
  <label class="formLabel" >Número de Licencia:</label><br>
  <input class="input" type="text" name="license" id="license"><i class="fa-solid fa-pen"></i><br>
</div>
<div class="grupo_input">
  <label class="formLabel" >Color de Vehículo:</label><br>
  
  <input class="input" type="text" name="carColor" id="carColors"><i class="fa-solid fa-pen"></i><br>
</div>
  <a href="subirArchivosCarro.php" ><input type="submit" value="Actualizar Datos" ></a>
  <br><br>
  
</form>
</center>
</body>
</html>