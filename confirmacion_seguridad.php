<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_seguridad.css">
    <title>Registrate</title>
</head>
<body>
    
<center class="mainForm">

<h2>Confirmación de seguridad</h2><br><br>

<form class="singInForm" action="inicioAppEstudiante.php" method="POST">
<!-- onsubmit="showPopup(); return false;" -->

  <label class="formLabel" for="username">Usuario</label><br>
  <input class="formInput" type="text" name="username" id="username" pattern="[A-Za-z\s]+" title="El nombre de usuario debe contener solamente letras, no números ni signos, gracias." required><br>

  <label class="formLabel" for="email">Correo electrónico:</label><br>
  <input class="formInput" type="email" name="email" id="email" required><br>

  <label class="formLabel" for="password">Contraseña:</label><br>
  <input class="formInput" type="password" name="password" id="password" required><br><br><br><br><br>

  <input type="submit" value="Continuar">


</form>

<!-- Popup -->
<!-- <div id="popup" class="popup">
    <div class="popup-content">
        <img src="img/cheque.png" alt="Cheque" class="popup-image">
        <p class="popup-text">¡Su cuenta ha sido creada!</p>
    </div>
</div>

<script src="css/script.js"></script>
<script>
    function showPopup() {
        document.getElementById("popup").style.display = "block";
    }

    function closePopup() {
        document.getElementById("popup").style.display = "none";
    }
</script> -->



</body>
</html>
