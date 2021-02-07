<?php 
// 1. DBに接続
// $dsn = 'mysql:dbname=koreanrestaurant;host=localhost'; 
// $user = 'root'; 
// $password=''; 
// $dbh = new PDO($dsn, $user, $password); 
// $dbh->query('SET NAMES utf8'); 

$host = getenv('us-cdbr-east-03.cleardb.com'); //MySQLがインストールされてるコンピュータ
$dbname = getenv('heroku_02ff199312307ce'); //使用するDB
$charset = "utf8"; //文字コード
$user = getenv('bfc9b0befde9d2'); //MySQLにログインするユーザー名
$password = getenv('52614880'); //ユーザーのパスワード

// 2. SQL文を実行
$sql = 'SELECT * FROM `booking`'; 
$stmt = $dbh->prepare($sql); 
$stmt->execute(); 

while(1) {
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    if($rec == false) {
        break;
    }

    echo $rec['name'] . '<br>';
    echo $rec['date'] . '<br>';
    echo $rec['time'] . '<br>';
    echo $rec['people'] . '<br>';
    echo $rec['email'] . '<br>';
    echo $rec['request'] . '<br>';
    echo '<hr>';

}


// 3. DBを切断
$dbh = null; 
?>