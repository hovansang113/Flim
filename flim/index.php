<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .genre-form {
            display: none;
            margin-top: 15px;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div>thông tin của flim</div>
    <form action="results.php" method="post">
        chọn thể loại:
        <select name="genre" id="genre">
            <option value="">-- Vui lòng chọn --</option>
            <option value="action">Hành động</option>
            <option value="comedy">Hài</option>
            <option value="documentary">Tài liệu</option>
        </select>

        <div id="action-form" class="genre-form">
            <h2>thông tin phim hành động</h2>
            <label for="">tên phim</label>
            <input type="text" name="action_moviename" id="action_moviename">
            <label for="">thời gian</label>
            <input type="text" name="action_duration" id="action_duration">
            <label for="">năm sản xuất</label>
            <input type="text" name="action_year" id="action_year">
            <label for="">số lượng</label>
            <input type="text" name="action_quantity" id="action_quantity">
            <label for="">số tiền đầu tư</label>
            <input type="text" name="action_investment" id="action_investment">
            <label for="">số cảnh hành động</label>
            <input type="text" id="action_scenes" name="action_scenes">
        </div>

        <div id="comedy-form" class="genre-form">
            <h4>Thông tin phim Hài</h4>
            <label for="">tên phim</label>
            <input type="text" name="comedy_moviename" id="comedy_moviename">
            <label for="">thời gian</label>
            <input type="text" name="comedy_duration" id="comedy_duration">
            <label for="">năm sản xuất</label>
            <input type="text" name="comedy_year" id="comedy_year">
            <label for="">số lượng</label>
            <input type="text" name="comedy_quantity" id="comedy_quantity">
            <label for="">số tiền đầu tư</label>
            <input type="text" name="comedy_investment" id="comedy_investment">
            <label for="comedian">mức dồ hài hước</label>
            <input type="text" id="comedian" name="comedy_comedian">

        </div>

        <div id="documentary-form" class="genre-form">
            <h4>Thông tin phim Tài liệu</h4>
            <label for="subject">tên phim</label>
            <input type="text" name="documentary_moviename" id="documentary_moviename">
            <label for="duration">thời gian</label>
            <input type="text" name="documentary_duration" id="documentary_duration">
            <label for="year">năm sản xuất</label>      
            <input type="text" name="documentary_year" id="documentary_year">
            <label for="quantity">số lượng</label>
            <input type="text" name="documentary_quantity" id="documentary_quantity">
            <label for="investment">số tiền đầu tư</label>
            <input type="text" name="documentary_investment" id="documentary_investment">
            <label for="">đề tài</label>
            <input type="text" id="documentary_topic" name="documentary_topic">
        </div>

        <br>
        <input type="submit" value="Gửi thông tin">
    </form>

    <script>
        document.getElementById('genre').addEventListener('change', function() {
            document.querySelectorAll('.genre-form').forEach(form => form.style.display = 'none');
            
            const selectedGenre = this.value;
            if (selectedGenre) {
                document.getElementById(selectedGenre + '-form').style.display = 'block';
            }
        });
    </script>
</body>
</html>
