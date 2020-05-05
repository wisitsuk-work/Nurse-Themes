<?php
session_start();

$reporter = $_SESSION['valid_firstname'];
$record = date("Y-m-d H:i:s");

include "connect.php";

$sql = "INSERT INTO treatment (student_id, weight, height, pulse, temperature, treatment, reporter, record)
VALUES ('$_POST[student_id]',
        '$_POST[weight]',
        '$_POST[height]',
        '$_POST[pulse]',
        '$_POST[temperature]',
        '$_POST[treatment]',
        '$reporter',
        '$record')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>