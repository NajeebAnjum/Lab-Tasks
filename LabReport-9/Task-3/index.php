<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'user_registration_db';

    $connection = new mysqli($hostname, $username, $password, $dbname);

    if (!$connection) {
        die ('Connection error' . mysqli_error($connection));
    }

    echo 'Connection Successful';

    $sql = 'SELECT * FROM users';

    $result = $connection->query($sql);

    if (!$result) {
        die('Could not get data' . mysqli_error($connection));
    }

    while($row = $result->fetch_assoc())
    {
        echo '<table border = 1> <tr>';
        echo '<td>';
        echo $row['name'];
        echo '</td><td>';
        echo $row['regno'];
        echo '</td><td>';
        echo $row['email'];
        echo '</td><tr>';
    }

?>