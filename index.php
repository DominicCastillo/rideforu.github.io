<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <center class="mainForm">

        <h2>Crear Cuenta</h2><br><br><br>
        
        <form class="singInForm" action="politicas_privacidad.html" method="POST">
        
          <label class="formLabel" for="username">Nombre de Usuario</label><br>
          <input class="formInput" type="text" name="username" id="username" pattern="[A-Za-z\s]+" title="El nombre de usuario debe contener solamente letras, no números ni signos, gracias." required><br>
        
          <label class="formLabel" for="email">Correo electrónico:</label><br>
          <input class="formInput" type="email" name="email" id="email" required><br>
        
          <label class="formLabel" for="password">Contraseña:</label><br>
          <input class="formInput" type="password" name="password" id="password" required>
        
          <div class="privacy-policy">
            <input type="checkbox" id="privacy" name="privacy" required>
            <label for="privacy"> Leer <a href="politicas_privacidad.html">políticas de privacidad</a></label> 
          </div>
          <br>
        
          <input type="submit" value="Registrate">
          <br><br>
        
        </form>
    
        <button onclick="openGoogleSignIn()" class="google-btn btn">Registrarse con Google</button>
    </div>

    <script>
        function openGoogleSignIn() {
            window.open('https://accounts.google.com/signin/v2/identifier', '_blank');
        }

        function validateForm() {
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var privacyPolicy = document.getElementById("privacyPolicy").checked;

            if (username && email && password && privacyPolicy) {
                return true;
            } else {
                alert("Por favor, complete todos los campos y acepte las políticas de privacidad.");
                return false;
            }
        }
    </script>
</body>
</html>
