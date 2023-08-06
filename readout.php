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
        <h1>Outputing data from database</h1>
        <?php
        if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Email</th><th>Phone</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
         } else {
        echo "No data found!";
        }
        ?>

    </main>

    <!-- FOOTER -->
    <footer>
        <p>this is a footer</p>
    </footer>
    
</body>
</html>