<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Tracker</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .navbar {
            background-color: tomato;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
        }
        .navbar-center {
            flex-grow: 1;
            text-align: center;
        }
        .navbar-right {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-left">
            <a href="about.php">About</a>
        </div>
        <div class="navbar-center">
            <a href="index.php" style="font-size: 24px; font-weight: bold;">Progresso!</a>
        </div>
        <div class="navbar-right">
            <?php
            // TODO: Add logic to check if user is logged in
            // For now, always show login and signup buttons
            ?>
            <a href="login.php">Login</a>
            <a href="signup.php">Sign Up</a>
        </div>
    </nav>
</body>
</html>