<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO animals (name, breed, dob, gender) VALUES ('$name', '$breed', '$dob', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "New animal added successfully!";
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
