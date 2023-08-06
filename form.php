<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seminarska_naloga</title>
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
        <h1>This is a form</h1>
        <form action="user_data.php" class="form" method="POST">
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

    </main>

    <!-- FOOTER -->
    <footer>
        <p>this is a footer</p>
    </footer>
    
</body>
</html>