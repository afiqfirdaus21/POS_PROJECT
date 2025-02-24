<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Beauty and Health</title>
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

        header, footer {
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
            border: 2px solid #ccc;
            padding: 20px;
            width: 300px;
            margin: 20px;
            border-radius: 15px;
            background-color: white;
        }

        .product img {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
            border-radius: 10px;
        }

        .buttons {
            display: flex;
            align-items: center;
        }

        button {
            padding: 10px;
            background-color: #01153e;
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.3s;
            border-radius: 10px;
            margin: 5px;
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
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Beauty and Health</h1>
    <div class="menu">
        <div class="product">
            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/2/19/ed1eb4f7-2f5f-4329-b224-7e75c5f533ee.jpg" alt="Cushion Carasun Solar">
            <h3>Cushion Carasun Solar</h3>
            <div class="buttons">
                <button onclick="changeQuantity('quantity1', -1)">-</button>
                <input type="text" id="quantity1" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button onclick="changeQuantity('quantity1', 1)">+</button>
            </div>
            <div class="price">Price: <span>187.000</span> IDR</div>
        </div>
    </div>
    <div class="submit">
        <button onclick="window.location.href='../'">Home</button>
        <button onclick="window.location.href='./'">Choose Another Category</button>
        <button onclick="window.location.href='../sales'">Go to Sales</button>
        <button onclick="window.location.href='../user/14/name/Muhammad Afiq Firdaus'">Go to User Profile</button>
    </div>

    <script>
        function changeQuantity(id, change) {
            let input = document.getElementById(id);
            let value = parseInt(input.value) + change;
            if (value > 0) input.value = value;
        }
    </script>
</body>

</html>