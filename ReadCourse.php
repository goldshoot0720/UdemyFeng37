<?php
// 資料庫連接資訊
$servername = "sql301.infinityfree.com";
$username = "if0_38435166"; 
$password = "gf0Tagood129"; 
$dbname = "if0_38435166_udemyfeng37"; 

// 連接資料庫
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連接是否成功
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "資料庫連線失敗: " . $conn->connect_error]));
}

// 查詢課程資料
$sql = "SELECT * FROM udemy3data";
$result = $conn->query($sql);

$courses = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $courses[] = $row;
    }
}

// 關閉資料庫連接
$conn->close();

// 回傳課程資料
header('Content-Type: application/json');
echo json_encode($courses);
?>
