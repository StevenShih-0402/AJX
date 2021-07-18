<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax入門</title>

    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <form action="">
        <div>
            <label for="name">姓名：</label>
            <input type="text" name="name" id="name" value="呱呱呱"/>
        </div>
        <br>
        <div>
            <select name="type" id="type">
                <option value="date" selected>日期</option>
                <option value="time">時間</option>
            </select>
        </div>
        <br>
        <input type="submit" value="送出"/>
    </form>
    <br>

    <div class="box">
        <div id="date"></div><br>
        <div id="myname"></div>
    </div>
    <br>

    <a href="postDateTime.php" class="tabs">載入網頁</a>
    <br>
</body>
</html>