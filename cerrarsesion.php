<?php
session_start();
session_destroy();

echo "Saliendo\n";
echo'<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=index.php">';
?>