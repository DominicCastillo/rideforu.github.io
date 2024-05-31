<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Crear Cuenta</h2>
        <form id="signupForm" action="politicas_privacidad.html" method="post" onsubmit="return validateForm()">
            <label for="username">Nombre de Usuario:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="checkbox" id="privacyPolicy" name="privacyPolicy" required>
            <label class="check-label" for="privacyPolicy">Acepto las políticas de privacidad</label>
            
            <button type="submit" class="btn">Registrarse</button>
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
