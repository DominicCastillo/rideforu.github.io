<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/ingresoDatos.css">
    <title>Registrate</title>
</head>
<body>
    
<center class="mainForm">

<h2>Por favor, ingrese sus datos</h2><br><br><br>

<form class="singInForm" action="crearCuentaEstudiante.php" method="POST">

  <label class="formLabel" >Nombre Completo:</label><br>
  <input class="formInput" type="text" name="email" id="email"><br>

  <label class="formLabel" >Edad:</label><br>
  <input class="formInput" type="text" name="age" id="age"><br>
  
  <label class="formLabel" >Teléfono:</label><br>
  <input class="formInput" type="text" name="phone" id="phone"><br>

  <label class="formLabel" >Universidad:</label><br>
  <input class="formInput" type="text" name="collegue" id="collegue"><br>

  <label class="formLabel" >Carrera:</label><br>
  <input class="formInput" type="text" name="career" id="career"><br>

  <label class="formLabel" >Carnet de estudiante:</label><br>
  <input class="formInput" type="text" name="idpass" id="idpass"><br>
  <input type="submit" value="Siguiente">
  <br><br>

</form>
</center>

</body>
</html>