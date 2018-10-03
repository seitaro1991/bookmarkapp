<?php

if(
  // !isset($_POST["title"]) || $_POST["title"]=="" ||
  !isset($_POST["url"]) || $_POST["url"]=="" ||
  !isset($_POST["comment"]) || $_POST["comment"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
//$name = filter_input( INPUT_GET, "name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ

$url = $_POST["url"];
$comment = $_POST["comment"];

// 名前をスクレイピング
require_once("./phpQuery-onefile.php");
$options['ssl']['verify_peer']=false;
$options['ssl']['verify_peer_name']=false;
$html = file_get_contents("$url", false, stream_context_create($options));

$title = phpQuery::newDocument($html)->find("h1")->text();

// 写真をスクレイピング
require_once("./phpQuery-onefile.php");
$options['ssl']['verify_peer']=false;
$options['ssl']['verify_peer_name']=false;
$html = file_get_contents("$url", false, stream_context_create($options));

$img = phpQuery::newDocument($html)->find(".infobox")->find("tbody")->find("tr:eq(1)")->find("td")->find(".image")->find("img")->text("src");

//2. DB接続します
include('functions.php');
db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO '. $table .'(id, title, img, url, comment )VALUES(NULL, :a1, :a2, :a3, :a4)');
$stmt->bindValue(':a1', $title, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $img, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("sqlError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("location: index.php");

}
?>
