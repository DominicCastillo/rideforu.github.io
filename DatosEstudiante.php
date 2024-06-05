<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/DatosEstudiante.css">
    <title>Datos del Estudiante</title>
</head>
<body>
    
<center class="mainForm">

<h2>Por favor, ingrese sus datos</h2><br><br><br>

<form class="singInForm" action="" method="POST">
    <label class="formLabel">Correo:</label><br>
    <input class="formInput" type="email" name="email" id="email"><br>

    <label class="formLabel">Contraseña:</label><br>
    <input class="formInput" type="password" name="password" id="password"><br>

    <label class="formLabel">Nombre Completo:</label><br>
    <input class="formInput" type="text" name="fullname" id="fullname"><br>

    <label class="formLabel">Edad:</label><br>
    <input class="formInput" type="number" name="age" id="age"><br>

    <label class="formLabel">Teléfono:</label><br>
    <input class="formInput" type="tel" name="phone" id="phone"><br>

    <label class="formLabel">Universidad:</label><br>
    <input class="formInput" type="text" name="university" id="university"><br>

    <label class="formLabel">Carnet de Estudiante:</label><br>
    <input class="formInput" type="text" name="studentID" id="studentID"><br>

    <label class="formLabel">Departamento:</label><br>
    <select class="formInput" name="department" id= "department">
        <option value="">Selecciona un departamento</option>
        <option value="Ahuachapán">Ahuachapán</option>
        <option value="Cabañas">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        
    </select> <br>

    <label class="formLabel">Municipio:</label><br>
    <select class="formInput" name="municipality" id="municipality">
        <option value="">Selecciona un municipio</option>
        <option value="Ahuachapán">Ahuachapán</option>
        <option value="Cabañas">Cabañas</option>
        <option value="Chalatenango">Chalatenango</option>
        <option value="Cuscatlán">Cuscatlán</option>
        <option value="La Libertad">La Libertad</option>
        <option value="La Paz">La Paz</option>
        <option value="La Unión">La Unión</option>
        <option value="Morazán">Morazán</option>
        <option value="San Miguel">San Miguel</option>
        <option value="San Salvador">San Salvador</option>
        <option value="San Vicente">San Vicente</option>
        <option value="Santa Ana">Santa Ana</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Usulután">Usulután</option>
        <option value="Sonsonate">Sonsonate</option>
        <option value="Ciudad Delgado">Ciudad Delgado</option>
    </select><br>

    <a href=""><input type="submit" value="Siguiente" name="subirEstudiante"></a>
    <br><br>

</form>

</body>
</html>