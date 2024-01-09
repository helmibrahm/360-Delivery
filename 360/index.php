<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Type Selection</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('image/p2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            text-align: center;
            padding: 50px;
            margin: 0;
            height: 100vh;
        }

        h1 {
            color: #333;
            margin-left: 0px;
        }

        .selection-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .user-type-button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #42BDEC;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .user-type-button:hover {
            background-color: #326fa8;
        }
    </style>
</head>

<body>
    <h1>Welcome! Please choose your user type:</h1>

    <div class="selection-buttons">
        <a href="customer/home.html" class="user-type-button">Customer</a>
        <a href="admin/login.php" class="user-type-button">Admin</a>
    </div>
</body>

</html>
