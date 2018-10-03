<?php
//共通で使うものを別ファイルにしておきましょう。

//DB接続関数（PDO）
function db_conn(){
  $dbname='gs_f01_db26';
  try {
    return new PDO('mysql:dbname='.$dbname.';charset=utf8;host=localhost;port=3307','root','');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }
  return $pdo;
}

// テーブル名
$table = 'gs_bm_table';
$user_table = 'gs_user_table'; 

//SQL処理エラー
function errorMsg($stmt){
  $error = $stmt->errorInfo();
  exit('ErrorQuery:'.$error[2]);
}

/**
* XSS
* @Param:  $str(string) 表示する文字列
* @Return: (string)     サニタイジングした文字列
*/
function h($str){
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

//SESSIONチェック＆リジェネレイト
function chk_ssid(){
  if(!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid']!=session_id()){
    exit('Login Error.');
  }else{
    session_regenerate_id(true);
    $_SESSION['chk_ssid'] = session_id();
  }
}

// 管理者or一般画面設定
function menu(){
  $menu = "";
  if($_SESSION['kanri_flg']==0){
    $menu .= '<header>';
    $menu .= '<nav class="navbar navbar-default">';
    $menu .= '<div class="container-fluid">';
    $menu .= '<div class="navbar-header">';
    $menu .= '<a class="navbar-brand" href="select.php">';
    $menu .= 'ブックマーク管理';
    $menu .= '</a>';
    $menu .= '<a class="navbar-brand" href="index.php">';
    $menu .= 'ブックマーク登録';
    $menu .= '</a>';
    $menu .= '<a class="navbar-brand" href="logout.php">';
    $menu .= 'ログアウト';
    $menu .= '</a>';
    $menu .= '</div>';
    $menu .= '</div>';
    $menu .= '</nav>';
    $menu .= '</header>';
    return $menu;
  }else {
    $menu .= '<header>';
    $menu .= '<nav class="navbar navbar-default">';
    $menu .= '<div class="container-fluid">';
    $menu .= '<div class="navbar-header">';
    $menu .= '<a class="navbar-brand" href="select.php">';
    $menu .= 'ブックマーク管理';
    $menu .= '</a>';
    $menu .= '<a class="navbar-brand" href="index.php">';
    $menu .= 'ブックマーク登録';
    $menu .= '</a>';
    $menu .= '<a class="navbar-brand" href="user_select.php">';
    $menu .= 'ユーザー管理';
    $menu .= '</a>';
    $menu .= '<a class="navbar-brand" href="user_index.php">';
    $menu .= 'ユーザー登録';
    $menu .= '</a>';
    $menu .= '<a class="navbar-brand" href="logout.php">';
    $menu .= 'ログアウト';
    $menu .= '</a>';
    $menu .= '</div>';
    $menu .= '</div>';
    $menu .= '</nav>';
    $menu .= '</header>';
    return $menu;
  }
}

?>