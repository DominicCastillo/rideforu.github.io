<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/autoAsignado.css">
    <title>Auto Asignado</title>
</head>
<body>
<center class="form">

<h2>Auto Asignado</h2><br><br><br>
<div>

<img src="assets/img/carrito.jpeg" alt="" width="150px" height="90px" style="padding: 3px; border-radius: 15px;">

<img src="assets/img/images.jpeg" alt="" width="150px" height="90px" style="padding: 3px; border-radius: 15px;" >

</div>
<br>
<form class="grupo_input" action="" method="POST">

  <div class="grupo_input">
  <label class="formLabel">Modelo:</label><br>
 
  <input class="input" type="text" name="model" id="model" >
</div>
<div class="grupo_input">
  <label class="formLabel" >Placa:</label><br>
  <input class="input" type="text" name="plate" id="plate"><br>
</div>
<div class="grupo_input">
  <label class="formLabel" >Año del vehículo:</label><br>
  
  <input class="input" type="text" name="carYear" id="carYear"><br>
</div>
<div class="grupo_input">
  <label class="formLabel" >Número de Licencia:</label><br>
  <input class="input" type="text" name="license" id="license"><br>
</div>
<div class="grupo_input">
  <label class="formLabel" >Color de Vehículo:</label><br>
  
  <input class="input" type="text" name="carColor" id="carColors">
</div>

  
</form>
<div class="navbar">
            <div class="itemNav">
             <a class="active" href="inicioAppConductor.php"><img src="./assets/img/home.png" alt="">inicio</a> 
            </div>
            <div class="itemNav">
             <a href="chat.php" ><img src="./assets/img/chat.png" alt="">agenda</a> 
            </div>
            <div class="itemNav">
             <a href="agendar.php" ><img src="./assets/img/calendar.png" alt="">chat</a> 
            </div>
            <div class="itemNav">
             <a href="notificacionesConductor.php" ><img src="./assets/img/bell-ring.png" alt="">notificaciones</a>
            </div>
            <div class="itemNav">
             <a href="autoAsignado.php" ><img src="./assets/img/user.png" alt="">perfil</a>
            </div>
        </div>

</center>       

</body>
</html>