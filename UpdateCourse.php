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

// 從 POST 請求獲取資料
$data = json_decode(file_get_contents("php://input"), true);

// 檢查資料是否有效
if (isset($data['courseMain'], $data['courseSub'], $data['courseContext'], $data['courseProgress'])) {
    $courseMain = $data['courseMain'];
    $courseSub = $data['courseSub'];
    $courseContext = $data['courseContext'];
    $courseProgress = $data['courseProgress'];

    // 假設 courseMain 和 courseSub 是唯一標識符，用於查找課程資料
    $stmt = $conn->prepare("UPDATE udemy3data SET courseContext = ?, courseProgress = ? WHERE courseMain = ? AND courseSub = ?");
    $stmt->bind_param("ssss", $courseContext, $courseProgress, $courseMain, $courseSub);

    // 執行更新操作
    if ($stmt->execute()) {
        $response = ["status" => "success", "message" => "課程資料更新成功"];
    } else {
        $response = ["status" => "error", "message" => "課程資料更新失敗: " . $stmt->error];
    }

    // 關閉預處理語句
    $stmt->close();
} else {
    $response = ["status" => "error", "message" => "資料不完整，請提供所有必要的課程資訊"];
}

// 關閉資料庫連接
$conn->close();

// 回傳資料
header('Content-Type: application/json');
echo json_encode($response);
?>
