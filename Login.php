<!-- Desarrollado por: Francisco Joshua Becerra Hernandez 19300479 7-B 27/11/2022-->
<?php
// Iniciar variables de sesion, la cual ayuda a recordar todos los datos de navegación mientras la sesion esté activa 
session_start();
?>
<!DOCTYPE HTML>
<html lang="es">
<html>
    <!-- Cabeza del codigo -->
  <head>
    <!-- Importamos la hoja de estilos -->
    <link rel="stylesheet" type="text/css" href="login.css">
    <!-- Colocamos el titulo de pestaña -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joshtech</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  </head>
  <!-- Cuerpo de la pagina -->
  <body>

  <div class="menu-btn">
    <i class="fas fa-bars fa-2x"></i>
  </div>
  <div class="container">
    <!-- Navigation -->
    <nav class="nav-main">
      <!-- Brand -->
      <img src="img/logo.jpg" alt="Joshtech Logo" class="nav-brand">
      <!-- Left Nav -->
      <ul class="nav-menu">
        <!-- Menu de la pagina -->
        <li>
          <a href="index.php">Inicio</a>
        </li>
        <li>
          <a href="noreg/compus.html">Computadoras</a>
        </li>
        <li>
          <a href="noreg/componentes.html">Componentes</a>
        </li>
        <li>
          <a href="noreg/Acce.html">Accesorios</a>
        </li>
        <li>
          <a href="noreg/ayuda.html">Ayuda</a>
        </li>
        <li>
          <a href="Login.php">Carrito</a>
        </li>
      </ul>

      <!-- Right Nav -->
      <ul class="nav-menu-right">
        <li>
          <a href="#">
            <i class="fas fa-search"></i>
          </a>
        </li>
      </ul>
    </nav>
    <hr>

  	<header>
      <!-- Titulo en la cabecera de la página -->
  		<h1>INICIAR SESIÓN</h1>
  		  	</header>
        <!-- Formulario que manda los datos por medio del POST -->
  		<form action="recibirLogin.php" method="POST" class="form-register" name="validacion">
        <!-- Caja de tipo texto -->
  			<p><br><label>Nombre:     </label>
  				<input type="text" name="txtnombre" id=caja placeholder="Ingrese su Nombre"/></p>
          <!-- Caja de tipo texto -->
  			<p><br><label>Password:</label>
  				<input type="password" name="txtPass" id="caja" placeholder="Ingrese su Password"/></p>
  				<br>
            <!-- Caja de tipo boton (submit - enviar datos) -->
          <p><input type="submit" name="btnEnviar" id="btnAccion" value="Incio de sesion" class="botones"/></p>
          <!-- Caja de a (este es un link que te llevara a el registrarse) -->
  				<p><a href="reg/formulario.html" class="reg">No tienes cuenta? Crea una aqui!</a></p>
  		</form>
       <!-- Banners de anuncios relacionados-->
    <section class="banner-uno">
      <div class="content">
        <h2>La tarjeta gráfica más avanzada para jugadores y creadores</h2>
        <p>Con la revolucionaria arquitectura AMD RDNA™ 3 con tecnología de chiplet como piedra angular, las tarjetas gráficas de la serie AMD Radeon™ RX 7900 te deslumbrarán con su rendimiento, potencia visual y eficiencia de última generación.
        </p>
        <a href="https://www.amd.com/es/graphics/radeon-rx-graphics" class="btn">Ver mas <i class="fas fa-chevron-right"></i></a>
      </div>
    </section>

    <!-- Banners de anuncios relacionados-->
    <section class="banner-dos">
      <div class="content">
        <h2>GeForce RTX Serie 40</h2>
        <p>Las GPUs NVIDIA® GeForce RTX™ Serie 40 son más rápidas para los jugadores y creadores. Están impulsadas ​​por la arquitectura ultra eficiente NVIDIA Ada Lovelace que ofrece un salto cuántico tanto en rendimiento como en gráficos impulsados ​​por IA. Experimenta juegos con mundos virtuales realistas, ray tracing y FPS ultra altos con la latencia más baja.</p>
        <a href="https://www.nvidia.com/es-la/geforce/graphics-cards/40-series/" class="btn">Ver mas <i class="fas fa-chevron-right"></i></a>
      </div>
    </section>
       <!-- Section de Reder sociales -->
    <section class="social">
      <p>Sigue a Joshtech</p>
      <div class="links">
        <a href="https://facebook.com">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://linkdin.com">
          <i class="fab fa-linkedin"></i>
        </a>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <h3>Pagina Realizada por Francisco Joshua Becerra Hernández 7-B</h3>
  </footer>

  <!-- Scroll Reveal -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="main.js"></script>
  </body>
  		</html>