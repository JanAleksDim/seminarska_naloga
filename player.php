<?php
$host = 'localhost';
$dbname = 'your_database_name';
$username = 'your_database_username';
$password = 'your_database_password';

// Create a MySQL connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the 'users' table
$query = "SELECT * FROM users";
$result = $conn->query($query);

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naloga 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="logo">LOGO</div>
        <!-- MENU -->
        <nav>
            <ul class="menu"> <!-- I used ul because I read it was good practice. -->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="form.php">Form</a>
                </li>
                <li>
                    <a href="readout.php">Database Readout</a>
                </li>
                <li>
                    <a href="player.php">Player</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- MAIN -->
    <main>
        <h1>This is a player</h1>
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-e8c630a3-aec3-4c91-bb46-1b947dd15b55 player"></div>

    </main>

    <!-- FOOTER -->
    <footer>
        <p>this is a footer</p>
    </footer>
    
</body>
</html>