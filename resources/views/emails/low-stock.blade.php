<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Low Stock Alert</title>
</head>
<body>

     <h2>Low Stock Alert</h2>
    <p>
        The following product is running low on stock:
    </p>

    <ul>
        <li><strong>Product:</strong> {{ $product->name }}</li>
        <li><strong>Current Stock:</strong> {{ $product->stock_quantity }}</li>
        <li><strong>Price:</strong> ${{ number_format($product->price, 2) }}</li>
    </ul>

    <p>
        Please restock this product as soon as possible.
    </p>

    <hr>

</body>
</html>
