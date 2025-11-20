<?php
// Nhúng file chứa các class Film
require_once 'flim.php';

// Kiểm tra xem form đã được gửi đi bằng phương thức POST chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thể loại phim được chọn
    $genre = $_POST['genre'] ?? '';

    $film = null;

    // Dựa vào thể loại để khởi tạo đối tượng tương ứng
    switch ($genre) {
        case 'action':
            $film = new ActionFilm(
                $_POST['action_moviename'],
                $_POST['action_duration'],
                $_POST['action_year'],
                $_POST['action_quantity'],
                'Hành động', // Category
                $_POST['action_investment'],
                $_POST['action_scenes']
            );
            break;

        case 'comedy':
            $film = new ComedyFilm(
                $_POST['comedy_moviename'],
                $_POST['comedy_duration'],
                $_POST['comedy_year'],
                $_POST['comedy_quantity'],
                'Hài', // Category
                $_POST['comedy_investment'],
                $_POST['comedy_comedian']
            );
            break;

        case 'documentary':
            $film = new DocumentaryFilm(
                $_POST['documentary_moviename'],
                $_POST['documentary_duration'],
                $_POST['documentary_year'],
                $_POST['documentary_quantity'],
                'Tài liệu', // Category
                $_POST['documentary_investment'],
                $_POST['documentary_topic']
            );
            break;
    }
?>
    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <title>Kết quả thông tin phim</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container mt-5">
            <h1 class="mb-4">Thông tin phim đã nhập</h1>
            <?php
            // Nếu đối tượng film được tạo thành công, gọi phương thức showInfo()
            if ($film) {
                $film->showInfo();
            } else {
                echo "<div class='alert alert-warning'>Vui lòng chọn một thể loại phim hợp lệ.</div>";
            }
            ?>
            <a href="index.php" class="btn btn-secondary mt-3">Quay lại</a>
        </div>
    </body>
    </html>
<?php
} else {
    // Nếu không phải là POST request, chuyển hướng về trang chủ
    header('Location: index.php');
    exit();
}
?>