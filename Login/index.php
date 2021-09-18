<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("location: Ingreso.php");
} 
    
?>



<!DOCTYPE html>
<html>
<head>
	<title>Bombrero Municipales Palencia</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/Colorfull.svg">
		</div>
		<div class="login-content">

			<form action="php/Login.php" method="POST" >
			
				<img src="img/bom.png">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Correo</h5>
           		   		<input type="text" class="input" name="Correo">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input"  name="Contraseña">
            	   </div>
            	</div>
				<a href="Registro.php">Registrate</a>
				<input type="submit" class="btn" value="Login">
            	
            </form>
		</form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>

</body>

 
</html>
