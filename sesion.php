<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar Sesión</title>
    <link rel="stylesheet" href="assets/css/style3.css">
</head>
<body>
    <div class="container">
        <div class="profile">
            <img src="assets/images/icon.jpg" alt="Profile Picture" class="profile-pic">
            <div class="profile-info">
                <h2>Lizbeth Candray</h2>
                <p>Lizbeth_Candray@gmail.com</p>
            </div>
        </div>
        <p class="confirmation">¿Estas seguro de cerrar sesión?</p>
        <div class="buttons">
            <button id="yes-button" onclick="logout()">Sí</button>
            <button id="no-button" onclick="cancelLogout()">No</button>
        </div>
    </div>
    <script src="assets/js/logica.js"></script>
</body>
</html>
