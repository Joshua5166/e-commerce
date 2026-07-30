<!-- Desarrollado por: Francisco Joshua Becerra Hernandez 19300479 7-B 27/11/2022-->
<?php
// Iniciar variables de sesion, la cual ayuda a recordar todos los datos de navegación mientras la sesion esté activa 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<html>
<!-- Cabeza del codigo -->
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- Importamos la hoja de estilos -->
  <link rel="stylesheet" href="menu.css">
	<title>Tu cuenta de Joshtech</title>
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
          <a href="../index/index.html">Inicio</a>
        </li>
        <li>
          <a href="compus.php">Computadoras</a>
        </li>
        <li>
          <a href="componentes.php">Componentes</a>
        </li>
        <li>
          <a href="Acce.html">Accesorios</a>
        </li>
        <li>
          <a href="cuenta.php">Cuenta</a>
        </li>
        <li>
          <a href="../ayuda.html">Ayuda</a>
        </li>
        <li>
          <a href="VerCarta.php">Carrito</a>
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

	<header>Informacion de tu cuenta</header>

		<?php
					if(isset($_SESSION["usuarios"])){
						/*Mostramos a la persona que se haya registrado*/
						echo '<span class="Etiquetas">Hola '.$_SESSION["usuarios"].'
								</span><br><p><span class="Etiquetas">Password '.$_SESSION["password"].'</span></p>';
						/*Enlace para destruir la variable de sesion*/
						echo '<a href="cerrarsesion.php">Cerrar sesion...</a>';
					}else{
						/*Formulario que permite acceder al sitio e inicializar la variable de sesion*/
						echo '<div class="login">
							<form action="recibirLogin.php" method="POST">
								<p>
									<label>Nombre: </label>
									<input type="text" name="txtnombre" id="cajas" />
								</p>
								<p>
									<label>Clave: </label>
									<input type="password" name="txtPass" id="cajas" />
								</p>
								<br>
								<p>
									<input type="submit" name="btnEnviar" id="boton" />
								</p>
							</form>
						</div>';
					}
				?>
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


