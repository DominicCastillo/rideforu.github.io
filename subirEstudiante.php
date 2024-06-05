<?php
include("conexion.php");

if(isset($_POST['subirEstudiantes'])){
    $contra = $_POST['password'];
    $correo = $_POST['email'];
    $nombre = $_POST['fullname'];
    $edad = $_POST['age'];
    $telefono = $_POST['phone'];
    $universidad = $_POST['university'];
    $carnet = $_POST['studentID'];
    $departamento = $_POST['department'];
    $municipio = $_POST['municipality'];

    $command = "INSERT INTO estudiante(Nombre_Completo, Edad, Telefono, Universidad, Departamento, Municipio, correo_electronico, contraseña, codigo_carnet)	
    VALUES('$nombre', '$edad', '$telefono', '$universidad', '$departamento', '$municipio', '$correo', '$contra','$carnet')";
    
    $resultado = mysqli_query($conn, $command);

    if($resultado){
        echo "Barbaro";
    }
    else{
        echo "Ni modo mija";
    }
}   
?>
