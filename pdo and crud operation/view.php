<?php

include "connection.php";

$query = "select * from products";
$sql = $con->prepare($query);
$res = $sql->execute();
$products = $sql->fetchAll(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E COMMERCE</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</head>

<body>
  <h2> list of products</h2>


  <br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">product name</th>
        <th scope="col">quantity</th>
        <th scope="col">price</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $product) : ?>
        <tr>

          <th scope="row"><?php echo $product["ID"] ?></th>
          <td><?php echo $product["PRODUCT_NAME"] ?></td>
          <td><?php echo $product["QUANTITY"] ?></td>
          <td><?php echo $product["PRICE"] ?></td>
          <td>
            <a class=" btn btn-primary" href="/php/pdo and crud operation/delete.php?id=<?php echo $product['ID']; ?>">delete</a>
            <a class="btn btn-primary" href="/php/pdo and crud operation/update.php?id=<?php echo $product['ID']; ?>">update</a>

          </td>
        </tr>
      <?php endforeach ?>

    </tbody>
  </table>
  <style>
    .center {
      display: flex;
      justify-content: center;
    }
  </style>

  <div class="center">
    <a class="btn btn-primary" href="/php/pdo and crud operation/form.php" role="button">add new</a>
  </div>
</body>

</html>