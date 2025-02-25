<!DOCTYPE html>
<html>
<head>
    <title>Products - POS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        td {
            background-color: #fafafa;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Kategori Produk: {{ ucwords(str_replace('-', ' ', $category)) }}</h1>

    <h2>Daftar Produk:</h2>
    <table>
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $product }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <button onclick="window.location.href='/'">Kembali ke Home</button>
</body>
</html>
