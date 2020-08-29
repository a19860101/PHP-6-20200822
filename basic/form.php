<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>POST</h2>
    <form action="res.php" method="post">
        <div>
            <label for="user">帳號</label>
            <input type="text" name="user" id="user">
        </div>
        <div>
            <label for="pw">密碼</label>
            <input type="password" name="pw" id="pw">
        </div>
        <div>
            <label>性別</label>
            <label for="male">
                <input type="radio" name="gender" id="male" value="男">男
            </label>
            <label for="female">
                <input type="radio" name="gender" id="female" value="女">女
            </label>
        </div>
        <div>
            <label for="edu1">學歷</label>
            <select name="edu" id="edu1">
                <option>--請選擇--</option>
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
                <option value="研究所以上">研究所以上</option>
            </select>
        </div>
        <div>
            <label>專長</label>
            <label for="design">
                <input type="checkbox" name="skills[]" id="design" value="平面設計">平面設計
            </label>
            <label for="web">
                <input type="checkbox" name="skills[]" id="web" value="網頁設計">網頁設計
            </label>
            <label for="video">
                <input type="checkbox" name="skills[]" id="video" value="影片剪輯">影片剪輯
            </label>
        </div>
        <div>
            <label for="comment">評論</label>
            <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        </div>
        <input type="submit">
    </form>
    <!-- <h2>GET</h2>
    <form action="res.php" method="get">
        <div>
            <label for="user">帳號</label>
            <input type="text" name="user" id="user">
        </div>
        <div>
            <label for="pw">密碼</label>
            <input type="password" name="pw" id="pw">
        </div>
        <input type="submit">
    </form>
    <a href="res.php?user=banana&pw=666">GET</a> -->
</body>
</html>