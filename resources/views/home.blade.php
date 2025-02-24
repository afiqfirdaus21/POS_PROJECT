<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>POS - AFIQ</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #6e8cc3, #2a5298);
            color: #fff;
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.2);
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            width: 400px;
        }

        h1 {
            color: #fff;
            margin-bottom: 30px;
            font-size: 36px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        button {
            padding: 15px 30px;
            background: linear-gradient(45deg, #3a7bd5, #00d2ff);
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 18px;
            border-radius: 25px;
            transition: all 0.3s ease;
            box-shadow: 0px 4px 10px rgba(58, 123, 213, 0.5);
            font-weight: bold;
        }

        button:hover {
            background: linear-gradient(45deg, #00d2ff, #3a7bd5);
            transform: translateY(-3px);
            box-shadow: 0px 6px 15px rgba(58, 123, 213, 0.7);
        }

        h4, h6 {
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>POS Apps</h1>
        <div class="button-container">
            <button onclick="window.location.href='category/'">View Products</button>
            <button onclick="window.location.href='sales/'">Sales Page</button>
            <button onclick="window.location.href='./user/14/name/Muhammad Afiq Firdaus'">User Profile</button>
        </div>
        <h4>Muhammad Afiq Firdaus - SIB 2B - 14</h4>
        <h6>JOBSHEET 2 - ROUTING, CONTROLLER, VIEW</h6>
    </div>
</body>

</html>
