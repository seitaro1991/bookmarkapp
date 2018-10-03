<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="select.php">ブックマーク管理</a>
      <a class="navbar-brand" href="index.php">ブックマーク登録</a>
      <a class="navbar-brand" href="user_select.php">ユーザー管理</a>
      <a class="navbar-brand" href="user_index.php">ユーザー登録</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
    </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="user_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>lid：<input type="text" name="lid"></label><br>
     <label>lpw：<input type="text" name="lpw"></label><br>
     <label>kanri_flg：</label>
      <label>一般<input type="radio" name="kanri_flg" value="0" checked></label>
      <label>管理者<input type="radio" name="kanri_flg" value="1"></label><br>
     <label>life_flg：</label>
      <label>通常<input type="radio" name="life_flg" value="0" checked></label>
      <label>退会<input type="radio" name="life_flg" value="1"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>