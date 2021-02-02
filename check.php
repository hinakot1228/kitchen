<?php
$name = htmlspecialchars($_POST['name']);
$date = htmlspecialchars()$_POST['date']);
$time = htmlspecialchars()$_POST['time']);
$people = htmlspecialchars()$_POST['people']);
$email = htmlspecialchars()$_POST['email']);
$request = htmlspecialchars()$_POST['request']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic+Coding:400" rel="stylesheet">

</head>

<body>
    <div id="cursor"><img class="cursor" src="./img/cursor.png" alt=""></div>
    <div id="stalker"><img src="./img/stalker.png" alt="" class="stalker"></div>
    <section class="check-section">
        <div class="contact-bottom">
            <div class="check-form">
                <div class="contact-title">
                    <h3 glot-model="contact-info">入力内容確認</h3>
                </div>
                <form action="thank.php" method="post">
                    <div class="contact-item">
                        <label for="contact-name" glot-model="contact-name">お名前</label>
                        <p><?php echo $name; ?></p>
                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                    </div>
                    <div class="contact-item">
                        <label for="contact-date" glot-model="contact-date">ご来店日</label>
                        <p><?php echo $date; ?></p>
                        <input type="hidden" name="date" value="<?php echo $date; ?>">
                    </div>
                    <div class="contact-item">
                        <label for="contact-time" glot-model="contact-time">ご来店時間</label>
                        <p><?php echo $time; ?></p>
                        <input type="hidden" name="time" value="<?php echo $time; ?>">
                    </div>
                    <div class="contact-item">
                        <label for="contact-people" glot-model="contact-people">人数</label>
                        <p><?php echo $people; ?></p>
                        <input type="hidden" name="people" value="<?php echo $people; ?>">
                    </div>
                    <div class="contact-item">
                        <label for="contact-email" glot-model="contact-email">メールアドレス</label>
                        <p><?php echo $email; ?></p>
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="contact-item">
                        <label for="contact-request" glot-model="contact-request">ご要望</label>
                        <p><?php echo $request; ?></p>
                        <input type="hidden" name="request" value="<?php echo $request; ?>">
                    </div>
                    <div class="btn">
                        <button type="submit" value="予約する" glot-model="contact-btn">予約する</button>
                        <button type="reset" value="戻る" onclick="history.back()">戻る</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/glottologist"></script>
    <script src="hamburger.js"></script>
    <script src="scroll.js"></script>
    <script src="cursor.js"></script>

</body>

</html>