<?php
// File: results.php

// GỌI FILE CHỨA CLASS VÀO (Lưu ý tên file flim.php)
require_once 'flim.php';
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Kết Quả Phim</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            text-align: center;
            background-color: #f4f4f4;
        }

        .result-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            text-align: left;
            width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Màu sắc riêng cho từng loại phim */
        .comedy {
            border-left: 10px solid #ffc107;
        }

        /* Màu vàng */
        .action {
            border-left: 10px solid #dc3545;
        }

        /* Màu đỏ */
        .docu {
            border-left: 10px solid #17a2b8;
        }

        /* Màu xanh */

        h3 {
            margin-top: 0;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h1>Kết Quả Khởi Tạo Film</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 1. Lấy thông tin chung từ Form
        $type = $_POST['filmType'];
        $title = $_POST['title'];
        $duration = $_POST['duration'];
        $year = $_POST['releaseYear'];
        $qty = $_POST['quantity'];
        $cost = $_POST['productionCost'];

        // Biến chứa đối tượng phim
        $filmObject = null;

        // 2. Kiểm tra loại phim để khởi tạo Class tương ứng
        switch ($type) {
            case 'comedy':
                $humor = $_POST['humorLevel'];
                // Tạo đối tượng Phim Hài
                $filmObject = new ComedyFilm($title, $duration, $year, $qty, "Hài Kịch", $cost, $humor);
                break;

            case 'action':
                $danger = $_POST['dangerScenesCount'];
                // Tạo đối tượng Phim Hành Động
                $filmObject = new ActionFilm($title, $duration, $year, $qty, "Hành Động", $cost, $danger);
                break;

            case 'documentary':
                $topic = $_POST['topic'];
                // Tạo đối tượng Phim Tài Liệu
                $filmObject = new DocumentaryFilm($title, $duration, $year, $qty, "Tài Liệu", $cost, $topic);
                break;
        }

        // 3. Hiển thị thông tin (Sử dụng tính Đa Hình)
        if ($filmObject) {
            $filmObject->showInfo();
        } else {
            echo "<p style='color:red'>Lỗi: Không tạo được đối tượng phim.</p>";
        }
    } else {
        echo "<p>Vui lòng nhập liệu từ Form.</p>";
    }
    ?>

    <br>
    <a href="index.php">⬅ Quay lại nhập phim mới</a>

</body>

</html>