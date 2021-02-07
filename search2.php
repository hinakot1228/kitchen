<?php
  // １．データベースに接続する
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

  // POSTでデータが送信された時のみSQLを実行する
  if (!empty($_POST)) {
    // ２．SQL文を実行する
    $sql = 'SELECT * FROM `booking` WHERE `date` = ' . $_POST['date'];

    $stmt = $dbh->prepare($sql);
    // var_dump($sql);
    // die;
    $stmt->execute();

    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    // var_dump($rec);
    // die;

    // SQLを実行
    // $stmt = $dbh->prepare($sql);
    // $stmt->execute();

  }

  // ３．データベースを切断する
  $dbh = null;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <title>検索ページ</title>
  <meta charset="utf-8">
</head>
<body>
  <form action="" method="post">
    <p>検索したいcodeを入力してください。</p>
    <input type="date" name="date">
    <input type="submit" value="検索">
  </form>
  <?php foreach ($stmt as $row):?>
    <?php echo $row[0]; ?>
  <?php endforeach; ?>
  
</body>
</html>