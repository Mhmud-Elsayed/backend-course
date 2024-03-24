<?php

$product_name=$_POST['product_name'];
$quantity=$_POST["quantity"];
$price=$_POST["price"];
echo "<pre>";
// var_dump($_POST);
echo "</pre>";
$hostname="localhost";
$username="root";
$password ="";
$DB_name="e_commerce";
$con=mysqli_connect($hostname,$username,$password,$DB_name);
$query_insert ="INSERT INTO `products`( `PRODUCT_NAME`, `PRICE`, `QUANTITY`)
VALUES ('$product_name',$price,$quantity)";

mysqli_query($con,$query_insert);
$query_select="SELECT `ID`, `PRODUCT_NAME`, `PRICE`, `QUANTITY` FROM `products`";
$select = mysqli_query($con,$query_select);

$products = $select-> fetch_all(MYSQLI_ASSOC);
foreach ($products as $product) {
    
    echo "<h2 style='background-color:#006666; padding:12px; color:#fff;'> name: $product[PRODUCT_NAME] quantity: $product[QUANTITY]  price: $product[PRICE]  <br></h1>";
    

}
?>