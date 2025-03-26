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
    die("Connection failed: " . $conn->connect_error);
}

// 從 POST 請求獲取資料
$data = json_decode(file_get_contents("php://input"), true);

$courseMain = $data['courseMain'];
$courseSub = $data['courseSub'];
$courseContext = $data['courseContext'];
$courseProgress = $data['courseProgress'];

// 使用預處理語句來插入資料
$stmt = $conn->prepare("INSERT INTO udemy3data (courseMain, courseSub, courseContext, courseProgress) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $courseMain, $courseSub, $courseContext, $courseProgress);

// 執行插入操作
if ($stmt->execute()) {
    $response = ["success" => true, "message" => "課程新增成功"];
} else {
    $response = ["success" => false, "message" => "課程新增失敗: " . $stmt->error];
}

// 關閉資料庫連接
$stmt->close();
$conn->close();

// 回傳資料
header('Content-Type: application/json');
echo json_encode($response);
?>
