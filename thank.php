<?php
// 1. DBに接続
// $dsn = 'mysql:dbname=koreanrestaurant;host=localhost'; 
// $user = 'root'; 
// $password=''; 
// $dbh = new PDO($dsn, $user, $password); 
// $dbh->query('SET NAMES utf8'); 

$host = getenv('host'); //MySQLがインストールされてるコンピュータ
$dbname = getenv('dbname'); //使用するDB
$charset = "utf8"; //文字コード
$user = getenv('username'); //MySQLにログインするユーザー名
$password = getenv('password'); //ユーザーのパスワード

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
try {
    $this->dbh = new PDO($dsn, $user, $password, $options);
} catch (\PDOException $e) {
    var_dump($e->getMessage());
    exit;
}

$name = htmlspecialchars($_POST['name']);
$date = htmlspecialchars($_POST['date']);
$time = htmlspecialchars($_POST['time']);
$people = htmlspecialchars($_POST['people']);
$email = htmlspecialchars($_POST['email']);
$request = htmlspecialchars($_POST['request']);

// 2. SQL文の実行
$sql = 'INSERT INTO `booking`(`name`, `date`, `time`, `people`, `email`, `request`) VALUES ("'. $name.'", "'. $date.'", "'.$time.'", "' . $people.'", "' . $email. '", "' . $request. '")'; 
$stmt = $dbh->prepare($sql); 
$stmt->execute(); 

// 3. DBを切断
$dbh = null; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信完了</title>
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
                    <h3 glot-model="contact-info">ご予約完了</h3>
                </div>
                <form action="" method="post">
                    <div class="contact-item">
                        <p><?php echo $name; ?>様、この度はご予約ありがとうございました。<br><?php echo $date; ?>の<?php echo $time; ?>にお待ちしております。</p>
                    </div>
                    <div class="contact-btn btn">
                        <button type="button" value="戻る" onclick="location.href='index.php'">ホームへ戻る</button>
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