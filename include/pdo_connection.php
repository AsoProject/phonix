<?php


try{
$dsn='mysql:dbname=phoenix;host=localhost;port=1234;charset=utf8'; //データベースの源 database source name
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
     //Databasehandler を作成する
// dbh の設定
 $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//エラーが発生した時にどんなエラーを表示する関数
// クエリを用意しデータベースに入れる関数
}catch(Exception $e)
{
    echo '<pre>'.$e.'</pre>';
}
?>
