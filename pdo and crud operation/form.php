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
    <h2> add new product </h2>
    <form action="create.php" method="post">

        <div class="center">
            <label class="col-sm-3 col-form-label">Name</label <div class="col-sm-6">
            <input type="text" placeholder="enter name" name="product_name">
        </div>
        </div>
        <div class=" center">
            <label class="col-sm-3 col-form-label">Quantity</label>
            <div class="col-sm-6">
                <input type="text" placeholder="enter quantity" name="quantity">
            </div>
        </div>
        <div class="center">
            <label class="col-sm-3 col-form-label">Price</label>
            <div class="col-sm-6">
                <input type="text" placeholder="enter price" name="price">
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