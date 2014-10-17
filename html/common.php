<?php
// 開発環境
// require_once 'smarty/Smarty.class.php';
// 本番環境
require_once 'Smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir  = 'templates_c/';

session_start();

//MYSQL接続
// 開発環境
// $mysqli = new mysqli( 'localhost' , 'root' , 'root' , 'jpfs_db' );
// 本番環境
$mysqli = new mysqli( 'jpfsdb.c6c8nmqgvm7h.ap-southeast-1.rds.amazonaws.com' , 'jpfsuser' , '6504695634' , 'jpfs_db' );

if ($mysqli->connect_errno){
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit;
}
$mysqli->set_charset("utf-8"); // 文字化け防止

ini_set('display_errors', 'Off');

function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

?>
