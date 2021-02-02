<?php
$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$people = $_POST['people'];
$email = $_POST['email'];
$request = $_POST['request'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
</head>

<body>
    <div id="cursor"><img class="cursor" src="./img/cursor.png" alt=""></div>
    <div id="stalker"><img src="./img/stalker.png" alt="" class="stalker"></div>
    <div class="contact-bottom">
        <div class="contact-title">
            <h3 glot-model="contact-info">入力内容確認</h3>
        </div>
        <form class="check-form" action="thank.php" method="post">
            <div class="contact-item">
                <label for="contact-name" glot-model="contact-name">お名前</label>
                <p><?php echo $name; ?></p>
            </div>
            <div class="contact-item">
                <label for="contact-date" glot-model="contact-date">ご来店日</label>
                <p><?php echo $date; ?></p>
            </div>
            <div class="contact-item">
                <label for="contact-time" glot-model="contact-time">ご来店時間</label>
                <p><?php echo $time; ?></p>
            </div>
            <div class="contact-item">
                <label for="contact-people" glot-model="contact-people">人数</label>
                <p><?php echo $people; ?></p>
            </div>
            <div class="contact-item">
                <label for="contact-email" glot-model="contact-email">メールアドレス</label>
                <p><?php echo $email; ?></p>
            </div>
            <div class="contact-item">
                <label for="contact-request" glot-model="contact-request">ご要望</label>
                <p><?php echo $request; ?></p>
            </div>
            <div class="check-btn btn">
                <button type="submit" value="予約する" glot-model="contact-btn">予約する</button>
                <button type="reset" value="戻る" onclick="history.back()">戻る</button>
            </div>
        </form>
    </div>

    <script src="https://unpkg.com/glottologist"></script>
    <script src="hamburger.js"></script>
    <script src="scroll.js"></script>
    <script src="cursor.js"></script>

</body>

</html>