<?php
include 'conexion.php';

$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Usuario = $_POST['Usuario'];
$Contraseña = $_POST['Contraseña'];

$query= "INSERT INTO registro (Nombre, Correo, Usuario, Contraseña)
         VALUES ('$Nombre', '$Correo', '$Usuario', '$Contraseña')";
         
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '<script>
    alert("Usuarios almacenados");
    window.location= "../index.php"
    </script>';
    
} else{

    echo '<script>
    alert("Error Intentarlo de nuevo);
    window.location= "../Registro.php"
    </script>';
}

mysqli_close($conexion);

?>