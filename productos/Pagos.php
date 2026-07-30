<?php
// include database configuration file
include 'Configuracion.php';

// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;

// redirect to home if cart is empty
if ($cart->total_items() <= 0) {
    header("Location: index.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM clientes WHERE id = " . $_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pagos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="pago.css">
</head>

<body>
<header>
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
          <a href="../productos/compus.php">Computadoras</a>
        </li>
        <li>
          <a href="../productos/componentes.php">Componentes</a>
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
    </header>

            <div class="panel-body">
                <h1>Vista previa de la Orden</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Pricio</th>
                            <th>Cantidad</th>
                            <th>Sub total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($cart->total_items() > 0) {
                            //get cart items from session
                            $cartItems = $cart->contents();
                            foreach ($cartItems as $item) {
                        ?>
                                <tr>
                                    <td><?php echo $item["name"]; ?></td>
                                    <td><?php echo '$' . $item["price"] . ' mx'; ?></td>
                                    <td><?php echo $item["qty"]; ?></td>
                                    <td><?php echo '$' . $item["subtotal"] . ' mx'; ?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="4">
                                    <p>No hay articulos en tu carta......</p>
                                </td>
                            <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3"></td>
                            <?php if ($cart->total_items() > 0) { ?>
                                <td class="text-center"><strong>Estas a punto de pagar la cantidad de: <?php echo '$' . $cart->total() . ' mx'; ?></strong></td>
                            <?php } ?>
                        </tr>
                    </tfoot>
                </table>
              
                <div class="footBtn">
                    <a href="compus.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a>
                    <br>
                    <br>
                    <div id="paypal-button-container"></div>
	</p>
    <!-- Remplazar "test" con tu propio ID de cliente de la aplicaci�n de cuenta sandbox  -->
    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=MXN"></script>
    <!-- Configure un elemento contenedor para el bot�n -->
    <div id="paypal-button-container"></div>
    <script>
    const total = <?php echo $cart->total(); ?>;
      paypal.Buttons({
        // Configura la transacci�n cuando se hace clic en un bot�n de pago
        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: total,
                currency_code: 'MXN'// Tambi�n puede hacer referencia a una variable o funci�n TOTAL
              }
            }]
          });
        },
        // Finalizar la transacci�n despu�s de la aprobaci�n del pagador
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // �Captura exitosa! Para prop�sitos de desarrollo/demostraci�n:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // Cuando est� listo para comenzar, elimine la alerta y muestre un mensaje de �xito dentro de esta p�gina. Por ejemplo:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>�Gracias por su pago!</h3>';
            // O vaya a otra URL: actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');
    </script>
                </div>
            </div>
        </div>
        <!--Panek cierra-->
    </div>
</body>

</html>