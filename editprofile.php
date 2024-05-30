<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="assets/css/style2.css">
</head>
<body>
    <div class="profile-card">
        <div class="avatar-container">
            <img src="assets/images/icon.jpg" alt="Avatar" class="avatar">
            <div class="edit-avatar">
                <img src="assets/images/editar.png" alt="Edit" class="edit-icon">
            </div>
        </div>
        <div class="details">
            <div class="detail-item">
                <input type="text" id="usuario" value="Lizbeth_Candray" class="detail-value" readonly>
                <img src="assets/images/editar.png" alt="Edit" class="edit-icon" onclick="editField('usuario')">
            </div>
            <div class="detail-item">
                <input type="email" id="email" value="Lizbeth_Candray@gmail.com" class="detail-value" readonly>
                <img src="assets/images/editar.png" alt="Edit" class="edit-icon" onclick="editField('email')">
            </div>
            <div class="detail-item">
                <input type="password" id="password" value="**********" class="detail-value" readonly>
                <img src="assets/images/editar.png" alt="Edit" class="edit-icon" onclick="editField('password')">
            </div>
            <div class="detail-item">
                <input type="text" id="universidad" value="Universidad Don Bosco" class="detail-value" readonly>
                <img src="assets/images/editar.png" alt="Edit" class="edit-icon" onclick="editField('universidad')">
            </div>
            <div class="detail-item">
                <input type="text" id="carnet" value="LC2024T" class="detail-value" readonly>
                <img src="assets/images/editar.png" alt="Edit" class="edit-icon" onclick="editField('carnet')">
            </div>
            <div class="button-container">
                <button onclick="updateProfile()">Actualizar perfil</button>
            </div>
        </div>
    </div>

    <script>
        function editField(fieldId) {
            document.getElementById(fieldId).removeAttribute('readonly');
            document.getElementById(fieldId).focus();
        }

        function updateProfile() {
            const usuario = document.getElementById('usuario').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const universidad = document.getElementById('universidad').value;
            const carnet = document.getElementById('carnet').value;
            
            alert('Perfil actualizado:\n' + 
                  'Usuario: ' + usuario + '\n' +
                  'Correo electrónico: ' + email + '\n' +
                  'Contraseña: ' + password + '\n' +
                  'Universidad: ' + universidad + '\n' +
                  'Carnet de estudiante: ' + carnet);
        }
    </script>
</body>
</html>
