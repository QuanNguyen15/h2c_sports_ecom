<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>List of Products</h1>
    <ul>
        @foreach($products as $product)
            <li>
                <h2>{{ $product->name }}</h2>
                <p>Description: {{ $product->description }}</p>
                <p>Status: {{ $product->status }}</p>
                <p>Price: ${{ $product->price }}</p>
                <!-- Thêm các trường thông tin khác nếu cần -->
            </li>
        @endforeach
    </ul>
</body>
</html>
