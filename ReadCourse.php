<?php
$servername = "sql301.infinityfree.com";
$username = "if0_38435166";
$password = "gf0Tagood129";
$dbname = "if0_38435166_udemyfeng37";

$conn = new mysqli($servername, $username, $password, $dbname);

header('Content-Type: application/json');

if ($conn->connect_error) {
    echo json_encode([
        "status" => "error",
        "message" => "Database connection failed: " . $conn->connect_error
    ]);
    exit;
}

$sql = "SELECT * FROM udemy3data";
$result = $conn->query($sql);

$courses = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $courses[] = $row;
    }
}

$conn->close();

echo json_encode($courses);
?>
