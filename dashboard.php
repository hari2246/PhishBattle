<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phish Battle Dashboard</title>
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
            top: 50px;
            left: 80px;
        }

        .blue-circle {
            width: 180px;
            height: 180px;
            background-color: #B5F9FF;
            top: 300px;
            right: 70px;
        }

        .red-circle {
            width: 120px;
            height: 120px;
            background-color: #FF7979;
            top: -20px;
            right: -30px;
        }

        /* Navbar */
        .navbar {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 70px;
            background-color: rgba(255, 255, 255, 0.9);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        .navbar-title {
            font-size: 24px;
            font-family: 'Bungee Shade', cursive;
            color: black;
        }

        .navbar-icons {
            display: flex;
            align-items: center;
        }

        .navbar-icons img {
            width: 40px;
            height: 40px;
            margin-right: 36px;
            cursor: pointer;
        }

        /* Dashboard Cards */
        .cards-container {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin: 100px auto 0;
            max-width: 900px;
            padding: 20px;
        }

        .card {
            background: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 20px;
            font-family: 'Black Ops One', cursive;
            color: black;
            margin-bottom: 10px;
        }

        .card-description {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
        }

        .card img {
            width: 100px;
            height: 100px;
            margin-top: 10px;
        }

        /* Chat Bot */
        .chat-bot {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background-color: #1BA0FF;
            border-radius: 50%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 100;
        }

        .chat-bot:hover {
            background-color: #1579d1;
            transform: scale(1.1);
        }

        .chat-bot img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Decorative Circles -->
        <div class="circle yellow-circle"></div>
        <div class="circle blue-circle"></div>
        <div class="circle red-circle"></div>

        <!-- Navbar -->
        <div class="navbar">
            <div class="navbar-title">Phish Battle</div>
            <div class="navbar-icons">
                <img src="leaderboard-icon.png" alt="Leaderboard" title="Leaderboard">
                <img src="profile-icon.png" alt="Profile" title="Profile">
            </div>
        </div>

        <!-- Cards Container -->
        <div class="cards-container">
            <?php
            // Define the card content
            $cards = [
                ["title" => "Beginner", "description" => "Start learning the basics of phishing detection.", "image" => "beginner.jpg", "link" => "beginner.php"],
                ["title" => "Intermediate", "description" => "Level up with hands-on phishing challenges.", "image" => "intermediate.jpg", "link" => "intermediate.php"],
                ["title" => "Advanced", "description" => "Master advanced techniques to catch the phish.", "image" => "advanced.jpg", "link" => "advanced.php"],
                ["title" => "Expert", "description" => "Become a pro at spotting phishing attacks!", "image" => "expert.jpg", "link" => "expert.php"]
            ];

            // Loop through and generate cards
            foreach ($cards as $card) {
                echo "
                <div class='card' onclick=\"location.href='{$card['link']}'\">
                    <div class='card-title'>{$card['title']}</div>
                    <div class='card-description'>{$card['description']}</div>
                    <img src='{$card['image']}' alt='{$card['title']} Image'>
                </div>
                ";
            }
            ?>
        </div>
    </div>

    <!-- Chat Bot -->
    <div class="chat-bot">
        <img src="chatbot.png" alt="Chat Bot" title="Chat with us">
    </div>
</body>
</html>
