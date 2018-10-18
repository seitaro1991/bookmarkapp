<?php
session_start();
include('functions.php');
chk_ssid();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<!-- <header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="select.php">ブックマーク管理</a>
      <a class="navbar-brand" href="index.php">ブックマーク登録</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
    </div>
    </div>
  </nav>
</header> -->
<?=$menu = menu();?>

<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>Wikipedia-ブックマークアプリ</legend>
     <!-- <label>検索したい著名人：<input type="text" name="title"></label><br> -->
     <label>URL：<input type="text" name="url"></label><br>
     <label>コメント：<br>
     <textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
<script src="https://cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>
  <script>
      CKEDITOR.replace('comment');
      // jsではalert(CKEDITOR.instances.detail.getData());で値がとれる
  </script>


</body>
</html>
