
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Estilo.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Dia con tu amigo</title>
	</head>
	<body>
		<h1>Elige tu amigo y cuentanos por que quieres pasar el dia con él:</h1>
			<form method="post" action="media.jsp">
				Elige a tu amigo: 
				<br>
				<input type="text" name="nota1">
				<br>
				Expón el motivo por el que solicitas su compañía: 
				<br>
				<input type="text" name="nota2">
				<br>
				<input type="submit" value="enviar">
			</form>
			<?php
			include("correo.php");
			?>
			
	</body>
</html>
