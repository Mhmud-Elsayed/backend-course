<?php
if (isset($_GET["id"])) {
    include "connection.php";
    $id = $_GET["id"];
    $query = "DELETE FROM `products` WHERE id=$id";
    $sql = $con->prepare($query);
    $res = $sql->execute();
}
header("location:/php/pdo and crud operation/view.php");
exit;
