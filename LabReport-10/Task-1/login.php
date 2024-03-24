<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Connection variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_db";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_error($connection));
    }

    // Getting data from users
    $db_user = $_POST["username"];
    $db_password = $_POST["password"];

    // SQL to get user data
    $sql = "SELECT username, password FROM users WHERE username = '$db_user'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        // Fetching the user data
        $row = $result->fetch_assoc();
        if ($row["username"] == $db_user && $row["password"] == $db_password) {
            echo "Login Successful\n";
            // Your code for successful login
        } else {
            echo "Check your username or password";
        }
    } else {
        echo "No user found with that username";
    }

    $connection->close();
}