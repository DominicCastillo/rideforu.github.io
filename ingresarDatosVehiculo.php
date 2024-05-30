<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/ingresarDatosVehiculo.css">
    <title>Registrate</title>
</head>
<body>
    
<center class="mainForm">

<h2>Por favor, ingrese sus datos</h2><br><br><br>

<form class="singInForm" action="" method="POST">

  <label class="formLabel" >Modelo:</label><br>
  <input class="formInput" type="text" name="model" id="model"><br>

  <label class="formLabel" >Placa:</label><br>
  <input class="formInput" type="text" name="plate" id="plate"><br>
  
  <label class="formLabel" >Año del vehículo:</label><br>
  <input class="formInput" type="text" name="carYear" id="carYear"><br>

  <label class="formLabel" >Número de Licencia:</label><br>
  <input class="formInput" type="text" name="license" id="license"><br>

  <label class="formLabel" >Color de Vehículo:</label><br>
  <input class="formInput" type="text" name="carColor" id="carColors"><br>

  <a href="subirArchivosCarro.php"><input type="submit" value="Siguiente"></a>
  <br><br>

</form>
</center>

</body>
</html>
