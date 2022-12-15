<?php
define("CLIENT_ID","Adkt9UmvDrK0FD-2xzjS2ptIwUKiSqTBapHVkKaTKrejHj3yB2A4lNwbrA5oqp_Uhku5Of3tXVaFG65e");
define("CURRENCY","USD");
define("KEY_TOKEN","APR.wqc-354*");
define("MONEDA","$");

session_start();

$num_cart = 0;
if (isset($_SESSION['carrito']['productos'])) {
    $num_cart = count($_SESSION['carrito']['productos']);
}
?>

