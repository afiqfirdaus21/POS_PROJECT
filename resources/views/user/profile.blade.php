<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>User Profile - POS</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
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

        p {
            color: #fff;
            font-size: 20px;
            margin-bottom: 15px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>User Profile</h1>
        <p>ID: {{ $id }}</p>
        <p>Name: {{ $name }}</p>
    </div>
</body>

</html>