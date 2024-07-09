<?php
include "connection.php";

$name = "";
$price = "";
$quantity = "";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (!isset($_GET["id"])) {

        header("location:/php/pdo and crud operation/view.php");
        exit;
    }
    $id = $_GET["id"];

    $query = "select * from products where ID = '$id'";
    $sql = $con->prepare($query);
    $res = $sql->execute();
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    if (!$row) {
        header("location:/php/pdo and crud operation/view.php");
        exit;
    }

    $name = $row['PRODUCT_NAME'];
    $price = $row["PRICE"];
    $quantity = $row["QUANTITY"];
} else {
    $name = $_POST["product_name"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $id = $_POST["ID"];

    $query = "UPDATE `products` SET `PRODUCT_NAME`=?,`PRICE`=?,`QUANTITY`=? WHERE id=?";
    $sql = $con->prepare($query);
    $res = $sql->execute([$name, $price, $quantity, $id]);
    header("location:/php/pdo and crud operation/view.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E COMMERCE </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</head>

<body>
    <h2> update product </h2>
    <form method="post">
        <input type="hidden" name="ID" value="<?php echo $id;     ?>">

        <div class="center">
            <label class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" placeholder="enter name" name="product_name" value="<?php echo $name ?>">
            </div>
        </div>
        <div class=" center">
            <label class="col-sm-3 col-form-label">Quantity</label>
            <div class="col-sm-6">
                <input type="text" placeholder="enter quantity" name="quantity" value="<?php echo $quantity ?>">
            </div>
        </div>
        <div class="center">
            <label class="col-sm-3 col-form-label">Price</label>
            <div class="col-sm-6">
                <input type="text" placeholder="enter price" name="price" value="<?php echo $price ?>">
            </div>
        </div>
        <style>
            .center {
                display: flex;
                justify-content: center;
            }
        </style>


        <div class="center">
            <button type="submit" class="btn btn-primary">submit</button>

        </div>


    </form>

</body>

</html>