<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Food & Beverage - POS</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header,
        footer {
            color: white;
            text-align: center;
            padding: 10px 0;
            background-image: linear-gradient(#01153e, #4b3a26);
        }

        .menu {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .product {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 4px solid #ccc;
            padding: 20px;
            width: 300px;
            margin: 20px;
            border-radius: 35px;
            background-color: white;
        }

        .product img {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
            border-radius: 15px;
        }

        .buttons {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        button {
            padding: 10px;
            background-color: #01153e;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 35px;
            font-size: 16px;
        }

        button:hover {
            background-color: #4b3a26;
        }

        .price {
            font-size: 18px;
            margin-top: 10px;
        }

        .submit {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }
    </style>
    <script>
        function increaseQuantity(id) {
            let quantityInput = document.getElementById('quantity-' + id);
            quantityInput.value = parseInt(quantityInput.value) + 1;
        }

        function decreaseQuantity(id) {
            let quantityInput = document.getElementById('quantity-' + id);
            if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
            }
        }
    </script>
</head>

<body>
    <h1>Food & Beverage</h1>
    <div class="menu">
        <div class="product">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/8b/Nasi-Goreng.jpg" alt="Nasi Goreng">
            <h3>Nasi Goreng</h3>
            <div class="buttons">
                <button onclick="decreaseQuantity('nasi-goreng')">-</button>
                <input type="text" id="quantity-nasi-goreng" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button onclick="increaseQuantity('nasi-goreng')">+</button>
            </div>
            <div class="price">
                <p>Price: <span>10.000</span> IDR</p>
            </div>
        </div>

        <div class="product">
            <img src="https://nilaigizi.com/assets/images/produk/produk_1578041377.jpg" alt="Es Teh Manis">
            <h3>Es Teh Manis</h3>
            <div class="buttons">
                <button onclick="decreaseQuantity('es-teh')">-</button>
                <input type="text" id="quantity-es-teh" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button onclick="increaseQuantity('es-teh')">+</button>
            </div>
            <div class="price">
                <p>Price: <span>5.000</span> IDR</p>
            </div>
        </div>

        <div class="product">
            <img src="https://dorebyletao.com/wpcontent/uploads/2021/03/Matcha-choco-1-533x800-1.jpg" alt="Cake Matcha">
            <h3>Cake Matcha</h3>
            <div class="buttons">
                <button onclick="decreaseQuantity('cake-matcha')">-</button>
                <input type="text" id="quantity-cake-matcha" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button onclick="increaseQuantity('cake-matcha')">+</button>
            </div>
            <div class="price">
                <p>Price: <span>20.000</span> IDR</p>
            </div>
        </div>
    </div>
    
    <div class="submit">
        <button onclick="window.location.href='../'">Home</button>
        <button onclick="window.location.href='./'">Choose Another Category</button>
        <button onclick="window.location.href='../sales'">Go to Sales</button>
        <button onclick="window.location.href='../user/14/name/Muhammad Afiq Firdaus'">Go to User Profile</button>
    </div>
</body>

</html>