<?php
// getで送信されたidを取得
// $id = $_GET['id'];
// echo "GET:".$id;

session_start();
include('functions.php');

//1.GETでidを取得
if(!isset($_GET['id'])){
  exit("Error");
}
$id = $_GET['id'];

//1.  DB接続します
$pdo = db_conn();


//２．データ登録SQL作成，指定したidのみ表示する
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id=:id');
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if($status==false){
  // エラーのとき
  errorMsg($stmt);
}else{
  // エラーでないとき
  $rs = $stmt->fetch();
  // fetch()で1レコードを取得して$rsに入れる
  // $rsは配列で返ってくる．$rs["id"], $rs["name"]などで値をとれる
  // var_dump()で見てみよう
}
?>

<!-- htmlは「index.php」とほぼ同じです -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>更新ページ</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="logout_select.php">一覧ページ</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="logout_select.php">
  <div class="jumbotron">
   <fieldset>
    <legend>詳細ページ</legend>
     <!-- <label>検索したい著名人：<input type="text" name="title"></label><br> -->
     <h2><?=$rs["title"]?></h2>
     <p>コメント：<?=$rs["comment"]?></p><br>
     <!-- idは変えたくない = ユーザーから見えないようにする-->
     <input type="hidden" name="id" value="<?=$rs["id"]?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>