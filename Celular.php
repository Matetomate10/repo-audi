<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Celular</title>
    <style>
        body {
            background: url(imagenes/fond1.png) no-repeat;
            margin-top: 30px;
            background-size: cover;
        }
        .fondo {
            border-radius: 30px;
            position: relative;
            background-color: rgba(239, 254, 255, 0.664);
            height: 1100px;
            width: 650px;
            box-shadow: 0 0 0 0.25em black,
                        0 0 0 0.75em rgb(180, 4, 4),
                        0 0 0 1em black;
        }
        center {
            color: #fff;
        }
        a {
            font-size: 50px;
        }
        .filA {
            margin-top: 50px;
        }
        section button {
            border-radius: 20px;
            margin-left: 30px;
            margin-top: 30px;
            height: 100px;
            width: 130px;
            font-size: 70px;
            background-color: black;
            border: 2px solid #ffffff56;
            box-shadow: 8px -2px rgb(180, 4, 4);
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        article button {
            border-radius: 20px;
            margin-top: 50px;
            margin-left: 10px;
            height: 60px;
            width: 110px;
            font-size: 18px;
            background-color: black;
            border: 2px solid #ffffff56;
            box-shadow: 8px -2px rgb(180, 4, 4);
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        input {
            color: #fff;
            margin-top: 50px;
            height: 200px;
            width: 500px;
            font-size: 70px;    
            background-color:  #171717;
            border: 2px solid rgb(180, 4, 4);
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .texto1 {
            position: relative;
            background-color: #171717;
            height: 100px;
            width: 502px;
            border: 2px solid rgb(180, 4, 4);
        }
    </style>
</head>
<body>
    <center>
    <div class="fondo">
    <section class="cuadr">
        <center><input type="text" id="cuadro"></center>
        <center><div class="texto1"><div id="resultado"></div></div></center>
    </section>
    <section class = "tel3">
        <div class = "filA">
            <center>
            <button class="digit" onclick="addNumber('1')"><center>1</center></button>
            <button class="digit" onclick="addNumber('2')"><center>2</center></button>
            <button class="digit" onclick="addNumber('3')"><center>3</center></button>
            </center>
        </div>
    </section>
    <section class = "tel6">
        <div class = "filB">
            <center>
            <button class="digit" onclick="addNumber('4')"><center>4</center></button>
            <button class="digit" onclick="addNumber('5')"><center>5</center></button>
            <button class="digit" onclick="addNumber('6')"><center>6</center></button>
            </center>
        </div>
    </section>
    <section class = "tel9">
        <div class = "filC">
            <center>
            <button class="digit" onclick="addNumber('7')"><center>7</center></button>
            <button class="digit" onclick="addNumber('8')"><center>8</center></button>
            <button class="digit" onclick="addNumber('9')"><center>9</center></button>
            </center>
        </div>
    </section>
    <section class = "tel0">
        <div class = "filD">
            <center>
            <button class="digit" onclick="addNumber('0')"><center>0</center></button>
            </center>
        </div>
    </section>
    <article class = "Bot">
        <div class = "MenLlVe">
            <center>
            <button onclick="window.location.href='mensaje.html'"><center>MENSAJE</center></button>
            <button><center>LLAMAR</center></button>
            <button onclick="mostrarMensajes()"><center>VER</center></button>
            <button onclick="deleteNumber()"><center>BORRAR</center></button>
            </center>
        </div>
    </article>
    </div>
    </center>
    <script src="Num.js"></script>
    <script>
        function deleteNumber() {
            var screen = document.getElementById("cuadro");
            screen.value = "";
        }
        function mostrarMensajes()
		{
			var xhr = new XMLHttpRequest();
			xhr.open("GET", "mensajes.json");
			xhr.onreadystatechange = function() 
			{
			if (xhr.readyState === 4) 
			{
				if (xhr.status === 200)
				{
					var mensajes = JSON.parse(xhr.responseText);
					var resultado = "";
					mensajes.forEach(function(mensaje) 
					{
						resultado += "Mensaje: " + mensaje.mensaje + "<br>";
					});
                        document.getElementById("resultado").innerHTML = resultado;
                    } 
                    else 
                    {
			            alert("Ha ocurrido un error al procesar su solicitud.");
		            }
		        }
	        };
            xhr.send();
		}
    </script>
</body>
</html>