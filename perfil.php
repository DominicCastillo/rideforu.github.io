<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
    
.navbar {
    display: flex; 
    justify-content: space-around; 
    background-color: #D9D9D9;
    font-size: x-small;
  }
  
.itemNav {
    display: flex;
    flex-direction: column; 
    align-items: center; 
    text-align: center; 
}
  
.itemNav a {
    display: block; 
    margin: 5px 0; 
    color: black; 
    text-decoration: none;
}
  
.itemNav img {
    width: 20px; 
    height: auto; 
}
</style>
<body>
    <div class="profile-card">
        <div class="header">
            <img src="assets/images/icon.jpg" alt="Avatar" class="avatar">
            <div class="user-info">
                <h2>Lizbeth Candray</h2>
                <h3>Bienvenida</h3>
            </div>
            <div class="settings">
                <a href="ajustesEstudiante.php">
                <img src="assets/images/rueda-dentada.png" alt="Settings" class="settings-icon">
                </a>
            </div>
        </div>
        <div class="details">
            <div class="detail-item">
                <label>Usuario</label>
                <input type="text" id="usuario" value="Lizbeth_Candray" class="detail-value">
            </div>
            <div class="detail-item">
                <label>Correo electrónico</label>
                <input type="email" id="email" value="Lizbeth_Candray@gmail.com" class="detail-value">
            </div>
            <div class="detail-item">
                <label>Contraseña</label>
                <input type="password" id="password" value="**********" class="detail-value">
            </div>
            <div class="detail-item">
                <label>Universidad</label>
                <input type="text" id="universidad" value="Universidad Don Bosco" class="detail-value">
            </div>
            <div class="detail-item">
                <label>Carnet de estudiante</label>
                <input type="text" id="carnet" value="LC2024T" class="detail-value">
            </div>
            <div class="button-container">
            
            </div>
        </div>
        <div class="navbar">
        <div class="itemNav">
        <a class="active" href="inicioAppEstudiante.php"><img src="./assets/img/home.png" alt="">inicio</a> 
        </div>
        <div class="itemNav">
        <a href="agendar.php" ><img src="./assets/img/chat.png" alt="">agenda</a> 
        </div>
        <div class="itemNav">
        <a href="#" ><img src="./assets/img/calendar.png" alt="">chat</a> 
        </div>
        <div class="itemNav">
        <a href="notificacionesEstudiante.php" ><img src="./assets/img/bell-ring.png" alt="">notificaciones</a>
        </div>
        <div class="itemNav">
        <a href="perfil.php" ><img src="./assets/img/user.png" alt="">perfil</a>
        </div>
    </div>
    </div>
</body>
</html>
