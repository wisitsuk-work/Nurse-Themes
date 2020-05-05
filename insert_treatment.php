<?php
session_start();

$reporter = $_SESSION['valid_firstname'];
$record = date("Y-m-d H:i:s");

include "connect.php";

$sql = "INSERT INTO treatment (student_id, weight, height, pulse, temperature, treatment, reporter, record, drug1, count1, drug2, count2, drug3, count3)
VALUES ('$_POST[student_id]',
        '$_POST[weight]',
        '$_POST[height]',
        '$_POST[pulse]',
        '$_POST[temperature]',
        '$_POST[treatment]',
        '$reporter',
        '$record',
        '$_POST[drug1]',
        '$_POST[count1]',
        '$_POST[drug2]',
        '$_POST[count2]',
        '$_POST[drug3]',
        '$_POST[count3]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>