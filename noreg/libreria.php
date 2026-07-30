<?php
	
	function colocarTitulo($titulo){
		echo "<header><h1>".$titulo."</h1></header>";
	}
	function barradenavegacion(){
		echo'<nav class="nav-main">
      <!-- Brand -->
      <img src="img/logo.jpg" alt="Joshtech Logo" class="nav-brand">
      <!-- Left Nav -->
      <ul class="nav-menu">
        <!-- Menu de la pagina -->
        <li>
          <a href="../index/index.html">Inicio</a>
        </li>
        <li>
          <a href="../productos/compus.html">Computadoras</a>
        </li>
        <li>
          <a href="../productos/componentes.html">Componentes</a>
        </li>
        <li>
          <a href="../productos/Acce.html">Accesorios</a>
        </li>
        <li>
          <a href="../productos/cuenta.php">Cuenta</a>
        </li>
        <li>
          <a href="../ayuda.html">Ayuda</a>
        </li>
        <li>
          <a href="carrito.php">Carrito</a>
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
    <hr>';
	}
  function computadoras(){
    echo'<div class="cartas">
      <div>
        <img src="img/compu1.png" alt="" />
        <h3>Computadora Gamer PRIDE PUG</h3>
        <p>AMD RADEON RX 550 2GB GDDR5 / Intel Core i3-10100F / 8GB RAM / 480GB SSD / 400W
        </p>
         <p>$7,999.00</p>
        <a href="#">Ver mas <i class="fas fa-angle-double-right"></i></a>
      </div>
      <!-- Cartas con productos de presentacion -->
      <div>
        <img src="img/compu2.png" alt="" />
        <h3>Computadora PRIDE GAMING WEEVIL</h3>
        <p>AMD RADEON VEGA 7 / AMD Ryzen 5 PRO 4650G / 16GB RAM / 480GB SSD SATA / 480W 80+ BRONZE
        </p>
        <p>$7,999.00</p>
        <a href="#">Ver mas <i class="fas fa-angle-double-right"></i></a>
      </div>
      <!-- Cartas con productos de presentacion -->
      <div>
        <img src="img/compu3.png" alt="" />
        <h3>Computadora PRIDE GAMING T-REX</h3>
        <p>NVIDIA® GeForce GTX™ 1050 Ti / Intel Pentium Gold G6400 / 8GB RAM / 240GB SSD / 400W /
        </p>
        <p>$11,699.00</p>
        <a href="#">Ver mas <i class="fas fa-angle-double-right"></i></a>
      </div>
      <!-- Cartas con productos de presentacion -->
      <div>
        <img src="img/compu4.jpg" alt="" />
        <h3>Computadora PRIDE LOGIC RABBIT</h3>
        <p>Intel Core i5-10400 / 8GB RAM / 480GB SSD SATA / 450W 80+ BRONZE
        </p>
        <p>$9,599.00</p>
        <a href="#">Ver mas <i class="fas fa-angle-double-right"></i></a>
      </div>
      <!--Salto de linea-->
      <!-- Cartas con productos de presentacion -->
      <div>
        <img src="img/compu4.png" alt="" />
        <h3>Computadora PRIDE GAMING SNAIL</h3>
        <p>MD RADEON GRAPHICS / AMD Ryzen 7 5700G / 16GB RAM / 480GB SSD / 550W 80+ BRONZE / Tu primer Ryzen
        </p>
         <p>$14,999.00</p>
        <a href="#">Ver mas <i class="fas fa-angle-double-right"></i></a>
      </div>
      <!-- Cartas con productos de presentacion -->
      <div>
        <img src="img/compu5.jpg" alt="" />
        <h3>Computadora PRIDE GAMING AORUS PC FENRIR</h3>
        <p>NVIDIA® GeForce RTX™ 4090 / AMD Ryzen 9 7950X / 64GB DDR5 RAM / 2TB SSD M.2 NVMe / 2TB HDD / ENF. LIQ. 360MM / 1300W 80+ GOLD
        </p>
        <p>$109,999.00</p>
        <a href="#">Ver mas <i class="fas fa-angle-double-right"></i></a>
      </div>
      <!-- Cartas con productos de presentacion -->
      <div>
        <img src="img/compu6.png" alt="" />
        <h3>Computadora PRIDE CREATOR BUTTERFLY</h3>
        <p>Nvidia Quadro P620 2GB / Intel Core i3-10100F / 16GB RAM / 500GB SSD M.2 / 450W 80+ Bronze / Disipador por Aire
        </p>
        <p>$14,799.00</p>
        <a href="#">Ver mas <i class="fas fa-angle-double-right"></i></a>
      </div>
      <!-- Cartas con productos de presentacion -->
      <div>
        <img src="img/compu7.png" alt="" />
        <h3>Computadora PRIDE GAMING CRICKET</h3>
        <p>Radeon Vega Graphics / AMD Ryzen 3 PRO 4350G / 8GB RAM / 480GB SSD SATA
        </p>
        <p>$7,999.00</p>
        <a href="#">Ver mas <i class="fas fa-angle-double-right"></i></a>
      </div>
      <!--Salto de linea-->
      <!-- Cartas con productos de presentacion -->
      <div>
        <img src="img/compu8.jpg" alt="" />
        <h3>Computadora PRIDE GAMING AORUS PC CAMEL</h3>
        <p>NVIDIA® GeForce RTX™ 2060 / Intel Core i3-10100F / 16GB RAM / 500GB SSD M.2 / DISIPADOR POR AIRE RGB / 550W 80+ BRONZE
        </p>
         <p>$17,999.00</p>
        <a href="#">Ver mas <i class="fas fa-angle-double-right"></i></a>
      </div>
      <!-- Cartas con productos de presentacion -->
      <div>
        <img src="img/compu9.png" alt="" />
        <h3>Computadora PRIDE GAMING LION</h3>
        <p>AMD RADEON RX 6800 XT / AMD Ryzen 7 5800X / 32GB RAM / 1TB SSD M.2 / DISIPADOR POR AIRE RGB / 750W 80+ BRONZE
        </p>
        <p>$58,999.00</p>
        <a href="#">Ver mas <i class="fas fa-angle-double-right"></i></a>
      </div>
      <!-- Cartas con productos de presentacion -->
      <div>
        <img src="img/compu10.png" alt="" />
        <h3>Computadora PRIDE CREATOR MACAW</h3>
        <p>Nvidia Quadro RTX A2000 6GB / Intel Core i7-11700F / 32GB RAM / 500GB SSD M.2 / 1TB SSD SATA 2.5 / 650W 80+ Bronze / Disipador por Aire
        </p>
        <p>$29,999.00</p>
        <a href="#">Ver mas <i class="fas fa-angle-double-right"></i></a>
      </div>
      <!-- Cartas con productos de presentacion -->
      <div>
        <img src="img/compu11.png" alt="" />
        <h3>Computadora PRIDE PBA CREATOR AROD</h3>
        <p>NVIDIA® GeForce RTX™ 3070 TI / AMD Ryzen 7 5800X / 32GB RAM / 1TB SSD M.2 / ENF. LIQ. 280MM / 750W 80+ BRONZE
        </p>
        <p>$45,999.00</p>
        <a href="#">Ver mas <i class="fas fa-angle-double-right"></i></a>
      </div>
    </div>';
  }
?>