<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "ericksmevy@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <section> 
    <div class="container">
        <h3>Thank you for contacting me. I will get back to you as soon as possible :D!</h3>
        <h3>Gracias por contactarme. ¡Me pondré en contacto pronto :D!</h3>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        <p class="back">Regresa al <a href="index.html">home</a>.</p>
        <div class="photo-container">
            <img src="assets/imagenes/cyndaquil.gif" class="rounded mx-auto d-block contexto" alt="Cyndaquil pokemon 3ra gen">
    </div>
    </div>
</section>   
<style>
*{	margin: 0;
    padding: 0;
		}
h3{
  text-align: center; /* Centra el texto horizontalmente */
  display: flex;
  align-items: center; /* Centra el texto verticalmente */
  justify-content: center; /* Centra el texto horizontalmente */
  font-family: "Courier New", monospace; /* Cambia la fuente a una tipografía monoespaciada */
  font-size: 24px; /* Tamaño de fuente */
  color: #ffffff; /* Color del texto */
  text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5); /* Agrega una sombra al texto */
  letter-spacing: 2px; /* Espaciado entre letras */
  line-height: 1.5; /* Altura de línea */
  margin: 0; /* Elimina el margen por defecto */
  padding: 20px; /* Agrega espacio alrededor del texto */
}
p{
    text-align: center;
}
photo-container img{
    width: 145px;
}
.contexto{
    width: 250px;
}
section{
			width: 100%;
			height: 100vh;
			color: #fff;
			background: linear-gradient(45deg,red,blue,green,black);
			background-size: 400% 400%;
			position: relative;
			animation: cambiar 10s ease-in-out infinite;
}
@keyframes cambiar{
			0%{background-position: 0 50%;}
			50%{background-position: 100% 50%;}
			100%{background-position: 0 50%;}
		}
</style>
</body>
</html>

';


?>