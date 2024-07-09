<?php
$db = "mysql:host=localhost;dbname=e_commerce";

$username = "root";
$password = "";
$con = new PDO($db, $username, $password);
$query = "select * from products";
$sql = $con->prepare($query);
$res = $sql->execute();
$res2 = $sql->fetchAll(PDO::FETCH_ASSOC);
