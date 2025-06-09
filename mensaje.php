<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Recibido</title>
	<style>
		body{
			background: url(imagenes/fond1.png) no-repeat;
			background-size: cover;
			margin-top: 170px;
			color: white;
			font-size: 25px; 
			font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
			text-align: center;
		}
		button {
			background-color:  #171717;
            border: 2px solid rgb(180, 4, 4);
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
			color: white;
			height: 35px;
            width: 140px;
            font-size: 20px;  
		}
		input {
			background-color:  #171717;
            border: 2px solid rgb(180, 4, 4);
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
			color: white;
			height: 40px;
            width: 250px;
            font-size: 20px;  
		}
	</style>
</head>
<body>
	<script>
		function enviarMensaje() {
			var mensaje = document.getElementById("mensaje").value;
			window.location.href = "mensaje.html?mensaje=" + mensaje;
		}
		var urlParams = new URLSearchParams(window.location.search);
		var mensaje = urlParams.get("mensaje");
		if (mensaje) {
			alert("<br/>Mensaje enviado: " + mensaje);
		}
	</script>
	<center>
		<div id="message"></div>
		<label>MENSAJE:</label>
		<input type="text" id="mensaje"><br><br>
		<button onclick="enviarMensaje()">ENVIAR</button>
		<button onclick="window.location.href='Celular.html'">REGRESAR</button>
	</center>
</body>
</html>
