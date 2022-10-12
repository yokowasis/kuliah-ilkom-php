<?php

// mysql connect

$host = "localhost:3306";
$user = "root";
$pass = "123123";
$db = "test";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// mysql query

$sql = "SELECT * FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "{$row['id']}. {$row['s']}";
    }
} else {
    echo "0 results";
}
