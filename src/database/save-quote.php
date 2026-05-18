<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $sql = "INSERT INTO quotes
    (name, surname, email, number)

    VALUES
    ('$name', '$surname', '$email', '$number')";

    if (mysqli_query($conn, $sql)) {

        header("Location: ../contact.php?success=1");
        exit();

    } else {

        echo "Error: " . mysqli_error($conn);
    }
}

?>