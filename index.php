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
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Products</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- MAIN -->
    <main>
        <form action="user_data.php" class="form">
            <div class="form-element">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" required>
            </div>
            <div class="form-element">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-element">
                <label for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" required>
            </div>
            <input type="submit" value="Submit">
        </form>

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

        <p>
            Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing elit</a>. Fusce vel nunc ut nulla venenatis condimentum. Sed nec velit eu velit ullamcorper tincidunt vel vel massa. Aenean interdum justo eu massa malesuada, at sagittis risus facilisis. Phasellus faucibus enim in bibendum tristique.
        </p>
        <p>
            Nunc eget nisi nec lorem suscipit blandit. Integer sodales, nisi ac mattis pulvinar, velit lorem elementum eros, et ultrices elit erat sit amet purus. Vivamus ut purus urna. Nulla facilisi. Sed eu ante eget tellus pharetra rhoncus.
        </p>
        <p>
            Vestibulum consectetur mi et magna ullamcorper, eu ullamcorper erat malesuada. Integer eget volutpat odio. Mauris vel eleifend orci. Duis dignissim, ex ac tristique rhoncus, neque ipsum congue quam, eget egestas ipsum enim nec ex. Phasellus pharetra libero vitae vestibulum dictum.
        </p>
        <p>
            Sed laoreet dui ac nisi euismod, id posuere ligula feugiat. Sed consectetur interdum nisl, id rutrum elit feugiat eu. In hac habitasse platea dictumst. Suspendisse potenti. Fusce vitae finibus elit. Curabitur scelerisque eros eu odio congue varius. Proin eu tellus lorem.
        </p>
        <p>
            Nullam lobortis tortor vel fermentum elementum. Etiam consequat, ligula quis faucibus volutpat, mauris arcu tristique elit, in pulvinar felis massa eu quam. Vivamus nec lacinia ex. Sed nec velit vel sapien cursus dapibus. Duis eu dignissim velit, id rutrum felis. Proin suscipit dolor a quam varius, nec pellentesque erat fermentum.
        </p>
        <p>
            Cras nec tortor at justo facilisis rhoncus. Maecenas laoreet bibendum dolor, ac rhoncus libero sollicitudin in. Phasellus at nunc vel tortor sodales sollicitudin. Pellentesque venenatis consectetur est, vel facilisis metus accumsan eu. Vivamus varius ex non libero facilisis, sit amet vestibulum mi dictum.
        </p>
        <img src="castle.png" alt="an image of a castle">
        
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-e8c630a3-aec3-4c91-bb46-1b947dd15b55 player"></div>

    </main>

    <!-- FOOTER -->
    <footer>
        <p>this is a footer</p>
    </footer>
    
</body>
</html>