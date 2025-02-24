<!DOCTYPE html>
<html>
<head>
    <title>Products - POS</title>
</head>
<body>
    <h1>Kategori Produk: {{ ucwords(str_replace('-', ' ', $category)) }}</h1>

    <h2>Daftar Produk:</h2>
    <ul>
        @foreach($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>

    <a href="/">Kembali ke Home</a>
</body>
</html>