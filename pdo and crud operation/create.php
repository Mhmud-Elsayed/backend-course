
<?php
include "connection.php";
$name = $_POST["product_name"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];
$query = "INSERT INTO `products`( `PRODUCT_NAME`, `PRICE`, `QUANTITY`)VALUES (?,?,?)";
$sql = $con->prepare($query);
$res = $sql->execute([$name, $price, $quantity]);
header("location:/php/pdo and crud operation/view.php");
exit;


?>



