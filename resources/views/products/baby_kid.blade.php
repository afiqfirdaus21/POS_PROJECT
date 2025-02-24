<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>BABY AND KID - POS</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Montserrat';
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #0033cc, #66ccff);
            color: white;
        }

        header,
        footer {
            text-align: center;
            padding: 15px 0;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
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
            border: 4px solid rgba(255, 255, 255, 0.3);
            padding: 20px;
            width: 300px;
            margin: 30px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.3);
        }

        .product img {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
            border-radius: 10px;
        }

        button {
            padding: 10px 15px;
            background-color: #0055ff;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin: 10px;
            border-radius: 10px;
            font-size: 16px;
        }

        button:hover {
            background-color: #0033cc;
        }

        .price {
            font-size: 18px;
            margin-top: 10px;
            font-weight: bold;
        }

        .submit {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Baby and Kid</h1>
    </header>
    <div class="menu">
        <div class="product">
            <img src="https://assets.babyzania.com/image/cache/catalog/1/cussons-baby-cream50-gr-almond-rose-800x800.jpg" alt="Cusson Baby Cream">
            <h3>Cusson Baby Cream</h3>
            <div class="buttons">
                <button>-</button>
                <input type="text" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button>+</button>
            </div>
            <div class="price">13.500 IDR</div>
        </div>
        <div class="product">
            <img src="https://www.staticsrc.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/MTA132435084/cussons_baby_cussons_baby_shampoo_bayi.jpg" alt="Cusson Shampo Baby">
            <h3>Cusson Shampo Baby</h3>
            <div class="buttons">
                <button>-</button>
                <input type="text" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button>+</button>
            </div>
            <div class="price">8.000 IDR</div>
        </div>
        <div class="product">
            <img src="https://www.staticsrc.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/97/MTA143802195/cussons_cusson_baby_soap.jpg" alt="Cusson Baby Soap">
            <h3>Cusson Baby Soap</h3>
            <div class="buttons">
                <button>-</button>
                <input type="text" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button>+</button>
            </div>
            <div class="price">5.000 IDR</div>
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
