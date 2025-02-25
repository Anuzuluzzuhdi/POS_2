<!DOCTYPE html>
<html>
<head>
    <title>Home - POS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        h1, h2 {
            color: #333;
        }
        .menu {
            list-style-type: none;
            padding: 0;
        }
        .menu li {
            margin: 10px;
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
    <h1>Welcome to POS System</h1>
    
    <h2>Menu</h2>
    <ul class="menu">
        <li><button onclick="window.location.href='/user/1/name/JohnDoe'">User Profile</button></li>
        <li><button onclick="window.location.href='/category/food-beverage'">Food-Beverage</button></li>
        <li><button onclick="window.location.href='/category/beauty-health'">Beauty-Health</button></li>
        <li><button onclick="window.location.href='/category/home-care'">Home-Care</button></li>
        <li><button onclick="window.location.href='/category/baby-kid'">Baby-Kid</button></li>
        <li><button onclick="window.location.href='/penjualan'">Penjualan</button></li>
    </ul>
</body>
</html>
