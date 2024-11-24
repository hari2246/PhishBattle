<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phish Battle</title>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Black+Ops+One&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: white;
        }

        .container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            z-index: 1;
        }

        /* Decorative Circles */
        .circle {
            position: absolute;
            border-radius: 50%;
            z-index: 0;
        }

        .yellow-circle {
            width: 380px;
            height: 380px;
            background-color: #FFF12C;
            top: 80px;
            left: 100px;
        }

        .blue-circle {
            width: 180px;
            height: 180px;
            background-color: #B5F9FF;
            top: 350px;
            right: 50px;
        }

        .red-circle {
            width: 120px;
            height: 120px;
            background-color: #FF7979;
            top: -20px;
            right: -30px;
        }

        .small-red-circle {
            width: 120px;
            height: 120px;
            background-color: #FF7979;
            bottom: 20px;
            left: 30px;
        }

        .small-blue-circle {
            width: 150px;
            height: 150px;
            background-color: #B5F9FF;
            top: -30px;
            left: -50px;
        }

        /* Content Styles */
        .title {
            font-size: 80px;
            font-family: 'Bungee Shade', cursive;
            color: black;
            margin-bottom: 20px;
            z-index: 1;
        }

        .subtitle {
            font-size: 40px;
            font-family: 'Black Ops One', cursive;
            color: black;
            margin-bottom: 20px;
            z-index: 1;
        }

        .description {
            font-size: 24px;
            color: black;
            margin-bottom: 40px;
            z-index: 1;
        }

        /* Buttons */
        .button-container {
            display: flex;
            gap: 20px; /* Space between buttons */
            z-index: 1;
        }

        .button {
            width: 200px;
            height: 60px;
            background-color: #1BA0FF;
            color: white;
            font-size: 24px;
            border: none;
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Black Ops One', cursive;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button:hover {
            background-color: #1579d1;
            transform: scale(1.1);
        }

    </style>
</head>
<body>
    <div class="container">
        <!-- Decorative Circles -->
        <div class="circle yellow-circle"></div>
        <div class="circle blue-circle"></div>
        <div class="circle red-circle"></div>
        <div class="circle small-red-circle"></div>
        <div class="circle small-blue-circle"></div>

        <!-- Content -->
        <div class="title"><?php echo "Phish Battle"; ?></div>
        <div class="subtitle"><?php echo "Can you spot when you're being phished?"; ?></div>
        <div class="description"><?php echo "Join the race of learning how to catch the Phish..."; ?></div>

        <!-- Buttons -->
        <div class="button-container">
            <button class="button register-btn" onclick="location.href='register.php'">Register</button>
            <button class="button login-btn" onclick="location.href='login.php'">Log in</button>
        </div>
    </div>
</body>
</html>