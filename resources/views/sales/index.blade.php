<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Checkout - POS</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100vh;
            background: linear-gradient(135deg, #6e8cc3, #2a5298);
            color: #fff;
        }

        header,
        footer {
            color: white;
            text-align: center;
            padding: 15px 0;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            font-weight: bold;
        }

        main {
            width: 80%;
            margin: 20px auto;
            background: rgba(255, 255, 255, 0.2);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
        }

        h2, h1 {
            color: #fff;
            text-align: center;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid rgba(255, 255, 255, 0.3);
            text-align: left;
            padding: 12px;
            color: #fff;
        }

        th {
            background: linear-gradient(45deg, #3a7bd5, #00d2ff);
        }

        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.1);
        }

        tfoot td {
            font-weight: bold;
            background-color: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body>
    <header>
        <h1>Checkout</h1>
    </header>
    <main>
        <h2>Rincian Pesanan</h2>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>QTY</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nasi Goreng</td>
                    <td>10.000</td>
                    <td>3</td>
                    <td>30.000</td>
                </tr>
                <tr>
                    <td>Cushion</td>
                    <td>187.000</td>
                    <td>1</td>
                    <td>187.000</td>
                </tr>
                <tr>
                    <td>Ayam Bakar</td>
                    <td>25.000</td>
                    <td>2</td>
                    <td>50.000</td>
                </tr>
                <tr>
                    <td>Es Teh Manis</td>
                    <td>5.000</td>
                    <td>4</td>
                    <td>20.000</td>
                </tr>
                <tr>
                    <td>Mie Ayam</td>
                    <td>15.000</td>
                    <td>2</td>
                    <td>30.000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total</td>
                    <td>Rp 317.000</td>
                </tr>
            </tfoot>
        </table>
    </main>
    <footer>
        &copy; 2024 Pemesanan Makanan
    </footer>
</body>
</html>
