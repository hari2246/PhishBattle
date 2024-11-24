<?php
// Include database connection file
$conn = new mysqli("localhost", 'root', "Bhachi@135", "Phish_Battle");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$errMsg = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Validate input
    if (empty($name) || empty($email) || empty($password)) {
        $errMsg = "All fields are required!";
    } else {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert user into database
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $hashed_password);
        
        if ($stmt->execute()) {
            header("Location: login.php");  // Redirect to login page on successful registration
            exit();
        } else {
            $errMsg = "Error occurred during registration. Please try again!";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Black+Ops+One&display=swap" rel="stylesheet">
    <style>
        /* Same styles as the Login Page for consistency */
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
            align-items: center;
            justify-content: center;
        }

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

        .form-container {
            position: relative;
            z-index: 1;
            width: 350px;
            background: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
        }

        .form-title {
            font-size: 36px;
            font-family: 'Black Ops One', cursive;
            color: black;
            margin-bottom: 20px;
        }

        .form-input {
            width: 100%;
            height: 40px;
            margin: 10px 0;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-button {
            width: 100%;
            height: 45px;
            background-color: #1BA0FF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            font-family: 'Black Ops One', cursive;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-button:hover {
            background-color: #1579d1;
        }

        .switch-link {
            margin-top: 15px;
            font-size: 14px;
            color: #555;
        }

        .switch-link a {
            color: #1BA0FF;
            text-decoration: none;
            font-weight: bold;
        }

        .switch-link a:hover {
            text-decoration: underline;
        }

        .error-msg {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Decorative Circles -->
        <div class="circle yellow-circle"></div>
        <div class="circle blue-circle"></div>
        <div class="circle red-circle"></div>

        <!-- Register Form -->
        <div class="form-container">
            <div class="form-title">Register</div>
            <?php if ($errMsg != "") { echo "<div class='error-msg'>$errMsg</div>"; } ?>
            <form method="POST" action="register.php">
                <input type="text" name="name" class="form-input" placeholder="Name" value="<?php echo isset($name) ? $name : ''; ?>" />
                <input type="email" name="email" class="form-input" placeholder="Email" value="<?php echo isset($email) ? $email : ''; ?>" />
                <input type="password" name="password" class="form-input" placeholder="Password" />
                <button type="submit" class="form-button">Register</button>
            </form>
            <div class="switch-link">Already have an account? <a href="login.php">Log In</a></div>
        </div>
    </div>
</body>
</html>