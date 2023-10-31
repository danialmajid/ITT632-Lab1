<?php
    // Database connection
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "danial";

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query
    $sql = "SELECT * FROM danial";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output data from each row
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["name"];
            $ic = $row["ic"];
            $nationality = $row["nationality"];
            $gender = $row["gender"];
            $dateofbirth = $row["dateofbirth"];
            $age = $row["age"];
            $address = $row["address"];
            $language = $row["language"];
            $email = $row["email"];
            $hobbies = $row["hobbies"];
            $team = $row["team"];          
            $images = $row["images"];
        }
    } else {
        echo "No records found";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>