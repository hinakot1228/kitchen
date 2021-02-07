<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索ページ</title>
</head>

<body>
    <form action="" method="post">
        <p>検索したい日付を入力してください。</p>
        <input type="date" name="date">
        <input type="submit" value="検索">
    </form>

    <?php
    // 1. DBに接続
    // $dsn = 'mysql:dbname=koreanrestaurant;host=localhost';
    // $user = 'root';
    // $password = '';
    // $dbh = new PDO($dsn, $user, $password);
    // $dbh->query('SET NAMES utf8');

    $host = getenv('us-cdbr-east-03.cleardb.com'); //MySQLがインストールされてるコンピュータ
    $dbname = getenv('heroku_02ff199312307ce'); //使用するDB
    $charset = "utf8"; //文字コード
    $user = getenv('bfc9b0befde9d2'); //MySQLにログインするユーザー名
    $password = getenv('52614880'); //ユーザーのパスワード

    // POSTでデータが送信されたときのみSQLを実行する
    if (!empty($_POST)) {
        // 2. SQL文の実行
        // データ（bookingテーブルのdateカラムのデータ）を読み込む
        $sql = 'SELECT * FROM `booking` WHERE `date` = ?';
        $data[] = $_POST['date'];
        $stmt = $dbh->prepare($sql);
        // var_dump($sql);
        // die;
        $stmt->execute($data);


        // データを取得
        while(1){
            // レコードを一件ずつ取り出し、それを連想は入れる（カラム名がキーになる）に変換する
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($rec == false) {
                break;
            }
            echo 'お名前：' . $rec['name'] . '<br>';
            echo '来店日時：' . $rec['date'] . '<br>';
            echo '来店時間：' . $rec['time'] . '<br>';
            echo '人数：' . $rec['people'] . '<br>';
            echo 'メアド：' . $rec['email'] . '<br>';
            echo 'ご要望：' . $rec['request'] . '<br>';
            echo '<hr>';

        }
    }

    // 3. DBの切断
    $dbh = null;
    ?>
</body>

</html>