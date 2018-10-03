<?php
//1.  DB接続します
include('functions.php');
$pdo = db_conn();


//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("sqlError:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    // $view .= "<div>"
    //          .'<img src="'.$result["img"]
    //          ."<h2>".$result["title"]."</h2>"
    //          ."<p>".$result["comment"]."-".$result["indate"]."</p>"
    //          .'<button type="button" onclick="location.href=\''.$result["url"].'\'">'."Wikipediaを表示"."</button>"
    //          .'　'
    //          .'<a href="delete.php?id='.$result['id'].'">'  //削除用aタグを作成
    //          .'［削除］'
    //          .'</a>'
    //          ."</div>";

    $view .= "<div>";
    $view .= '<img src="'.$result["img"];
    $view .= '<h2>';
    $view .= $result['title'];
    $view .= '</h2>';
    $view .= '<a href="logout_detail.php?id='.$result['id'].'">';//更新ページへのaタグを作成
    $view .= $result['comment'];
    $view .= '</a>';


  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="login.php">ログインページ</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
