<?php

 // http://127.0.0.1:5500/index.html?name=Jan&email=example@gmail.com&phone=041555555

if ($_SERVER["REQUEST_METHOD"] == "POST") { //Server checks if the correct input method was used
    $name = $_POST["name"]; //sets the name variable to the value of the name input field
    $email = $_POST["email"]; //sets the email variable to the value of the email input field
    $phone = $_POST["phone"]; //sets the phone variable to the value of the phone input field

    $host = 'localhost'; //host sets the host name of the database server, in this case it is the "localhost", same machine
    $dbname = 'db_seminarska';  //database name
    $username = 'root'; //database username
    $password = ''; //database password

    // Create a MySQL connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Execute the SQL query directly
    $query = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if ($conn->query($query)) {
        header('Location: readout.php');
    } else {
        echo "There was an error!";
    }

    // Close the connection
    $conn->close();
}

//php example is very simple and susceptible to SQL injection
