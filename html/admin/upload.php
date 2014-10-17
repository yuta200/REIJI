<?php
header("Content-Type: text/html; charset=UTF-8");

//require_once '../../Smarty/Smarty.class.php';
require_once 'Smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir = '../templates/admin/';
$smarty->compile_dir  = '../templates_c/';

include 'inc/img.inc';          /* 画像関連関数のまとめ */
include 'inc/common_chg.inc';   /* 行数の少ない関数のまとめ */
include 'inc/address_chg.inc';  /* 関数の行数が多いので抜き出し */
include 'inc/access_chg.inc';   /* 関数の行数が多いので抜き出し */
include 'inc/query_make.inc';   /* クエリー作成 */

// 物件画像アップ
remove_img_directory("../img/property");  // 物件画像フォルダ削除
//uploade_img_directory("/Users/aki/Desktop/property", "/Applications/MAMP/htdocs/img/property"); // 物件画像フォルダアップロード

$upload_msg = "<br><span class='blue'>[○Success] 古い画像をすべて削除しました。手動で新しいpropertyフォルダをUPしてください。</span><br><br>";

// csv格納
if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["upfile"]["tmp_name"], "csv/" . $_FILES["upfile"]["name"])) {
    chmod("csv/" . $_FILES["upfile"]["name"], 0644);
    $file_name = $_FILES["upfile"]["name"];
    $upload_msg .= "<span class='blue'>[○Success] ".$_FILES["upfile"]["name"] . "をアップロードしました。</span><br><br>";
  // アップロードできなかった場合
  } else {
    $upload_msg .= "<span class='red'>[●Error] ファイルをアップロードできません。</span><br>";
    $smarty->assign('upload_msg', $upload_msg); 
    $smarty->display('index.html');
    exit;
  }
  // csvファイルかチェック
  $extension = explode(".", $file_name, 2);
  if(!preg_match("/^csv$/", $extension[1])){
    $upload_msg .= "<span class='red'>[●Error] csvファイルではありません。</span><br>";
    $smarty->assign('upload_msg', $upload_msg); 
    $smarty->display('index.html');
    exit;    
  }
  // ファイルサイズチェック 3Mまで
  if($_FILES['upfile']['size'] > 3000000) {
    $upload_msg .= "<span class='red'>[●Error] ファイルサイズオーバーです。</span><br>";
    $smarty->assign('upload_msg', $upload_msg); 
    $smarty->display('index.html');
    exit;    
  }
} else {
  $upload_msg .= "<span class='red'>[●Error] ファイルが選択されていません。</span><br>";
  $smarty->assign('upload_msg', $upload_msg); 
  $smarty->display('index.html');
  exit;
}

/* CSV読み取り */
setlocale(LC_ALL, 'ja_JP.UTF-8');
 
$data = file_get_contents("csv/".$file_name);
$data = mb_convert_encoding($data, 'UTF-8', 'sjis-win');
$temp = tmpfile();
$meta = stream_get_meta_data($temp);
 
fwrite($temp, $data);
rewind($temp);
 
$file = new SplFileObject($meta['uri']);
$file->setFlags(SplFileObject::READ_CSV);

$row_cnt = 0;
$property_id_cnt = 0;
$yield_15over_num = 0;
$p_insert_query_cnt = 0;
$one_room_num = 0;

// 物件情報テーブルINSERT文作成
$property_insert_query_org = "INSERT INTO property (id,price,built_date,access,land_area_sqm,land_area_sqft,private_road_sqm,private_road_sqft,"
  ."footprint_sqm,footprint_sqft,balcony_sqm,balcony_sqft,management_fee,maintenance_fee,plan,building_to_land_ratio,floor_area_ratio,"
  ."use_districts,current_state_flg,delivery_time_flg,yield,annual_income,monthly_income,building_structure_flg,"
  ."rank,total_rank,basement_rank,total_units,one_room_flg,address,land_rights_flg,building_area_sqm,"
  ."building_area_sqft,building_area_free,property_flg,management_flg,memo,distinction_id,create_at,update_at) VALUES";
// 交通情報テーブルINSERT文作成
$p_access_insert_query = "INSERT INTO p_access (property_id, p_railway_id, walk_minute) VALUES";
// 住所情報テーブルINSERT文作成
$p_address_insert_query = "INSERT INTO p_address (property_id, p_city_id) VALUES";
// 画像情報テーブルINSERT文作成
$p_img_insert_query = "INSERT INTO p_img(property_id, display, img_url) VALUES";
// 物件価格別カウントテーブルINSERT文作成
$c_price_count_insert_query = "INSERT INTO c_price_count (property_flg, price_flg, price_count) VALUES";
// 区別カウントテーブルINSERT文作成
$c_city_count_insert_query = "INSERT INTO c_city_count (p_city_id, city_count) VALUES";
// 路線別カウントテーブルINSERT文作成
$c_railway_count_insert_query = "INSERT INTO c_railway_count (p_railway_id, railway_count) VALUES";
// 総物件カウントテーブルINSERT文作成
$c_all_count_insert_query = "INSERT INTO c_all_count (all_property_num, yield_15over_num, one_room_num) VALUES";

foreach($file as $line) {
  if($row_cnt != 0 && $line[0]) {
    $property_id_cnt++;
    for($col_cnt=0; $col_cnt < count($line); $col_cnt++){
   //   echo $col_cnt.":".$line[$col_cnt]."<br>";
      // 物件判別種別ID変換 CSV0列目取得
      if ($col_cnt == 0 && $line[$col_cnt]) $distinction_id_a = str_replace(" ", "", $line[$col_cnt]);
      // 物件種別変換 CSV1列目取得
      if ($col_cnt == 1 && $line[$col_cnt]) $property_flg_a = property_flg_chg($line[$col_cnt]);
      // 価格変換 CSV2列目取得
      if ($col_cnt == 2 && $line[$col_cnt]) $price_a = price_chg($line[$col_cnt], $property_flg_a);
      // 利回り変換 CSV3列目取得
      if ($col_cnt == 3 && $line[$col_cnt]) $yield_a = yield_chg($line[$col_cnt]);
      if ($col_cnt == 3 && $line[$col_cnt] && $yield_a >= 15) $yield_15over_num++;
      // 年収/月収変換 CSV4列目取得
      if ($col_cnt == 4 && $line[$col_cnt]) income_chg($line[$col_cnt]);
      // 築年数変換 CSV5列目取得
      if ($col_cnt == 5 && $line[$col_cnt]) $built_date_a = built_date_chg($line[$col_cnt]);
      // 建物構造変換 CSV6列目 CSV8列目取得
      if ($col_cnt == 6 && $line[$col_cnt]) $building_structure_a = building_structure_chg($line[$col_cnt], $line[$col_cnt+2]);
      // 階数、総階数、地下階数、戸数変換 CSV5列目 CSV7列目 CSV9列目取得
      if ($col_cnt == 7 && $line[$col_cnt]) rank_units_chg($line[$col_cnt-1], $line[$col_cnt], $line[$col_cnt+2]);
      // 交通変換 CSV10列目取得
      if ($col_cnt == 10 && $line[$col_cnt]) $access_a = access_chg($line[$col_cnt]);
      // 住所変換 CSV11列目取得
      if ($col_cnt == 11 && $line[$col_cnt]) $address_a = address_chg($line[$col_cnt]);
      // 土地面積(私道もあれば含める)変換 CSV12列目取得
      if ($col_cnt == 12 && $line[$col_cnt]) land_area_chg($line[$col_cnt]);
      // 土地権利変換 CSV13列目取得
      if ($col_cnt == 13 && $line[$col_cnt]) $land_rights_a = land_rights_chg($line[$col_cnt]);
      // 専有面積(バルコニーもあれば含める)変換 CSV14列目取得
      if ($col_cnt == 14 && $line[$col_cnt]) footprint_square_chg($line[$col_cnt]);
      // 間取り変換 CSV15列目取得
      if ($col_cnt == 15 && $line[$col_cnt]) $plan_a = plan_chg($line[$col_cnt]);
      if ($one_room_flg_a == "yes" && $col_cnt == 15 && $line[$col_cnt]) $one_room_num++;
      // 管理費・修繕積立変換 CSV16列目取得
      if ($col_cnt == 16 && $line[$col_cnt]) management_fee_chg($line[$col_cnt]);
      // 管理方式変換 CSV17列目取得
      if ($col_cnt == 17 && $line[$col_cnt]) $management_flg_a = management_flg_chg($line[$col_cnt]);
      // 建物面積(自由記入項目もあれば含める)変換 CSV18列目取得
      if ($col_cnt == 18 && $line[$col_cnt]) building_area_chg($line[$col_cnt]);
      // 建ペイ率・容積率変換 CSV19列目取得
      if ($col_cnt == 19 && $line[$col_cnt]) ratio_chg($line[$col_cnt]);
      // 【todo:翻訳名を記載】用途地域変換 CSV20列目取得
      if ($col_cnt == 20 && $line[$col_cnt]) $use_districts_a = use_districts_chg($line[$col_cnt]);
      // 現況変換 CSV21列目取得
      if ($col_cnt == 21 && $line[$col_cnt]) $current_stat_flg_a = current_stat_flg_chg($line[$col_cnt]);
      // 引渡時期変換 CSV22列目取得
      if ($col_cnt == 22 && $line[$col_cnt]) $delivery_time_a = delivery_time_chg($line[$col_cnt]);
    }

/*
    echo "物件種別：".$property_flg_a."<br>";
    echo "価格：".$price_a."<br>";
    echo "利回り：".$yield_a."<br>";
    echo "年収：".$annual_income."<br>";
    echo "月収：".$monthly_income."<br>";
    echo "築年月：".$built_date_a."<br>";
    echo "建物構造：".$building_structure_a."<br>";
    echo "階数：".$rank_a."<br>";
    echo "総階数：".$total_rank_a."<br>";
    echo "地下階数：".$basement_rank_a."<br>";
    echo "総戸数：".$total_units_a."<br>";
    echo "交通：".$access_a."<br>";
    echo "交通ID,徒歩何分：";
    print_r($access_data_a);
    echo "<br>";
    echo "住所：".$address_a."<br>";
    echo "住所ID：".$p_city_id_a."<br>";
    echo "土地面積(sqm)：".$land_area_sqm_a."<br>";
    echo "土地面積(sqft)：".$land_area_sqft_a."<br>";
    echo "土地面積(私道あり)(sqm)：".$private_road_sqm_a."<br>";
    echo "土地面積(私道あり)(sqft)：".$private_road_sqft_a."<br>";
    echo "土地権利：".$land_rights_a."<br>";
    echo "専有面積(sqm)：".$footprint_sqm_a."<br>";
    echo "専有面積(sqft)：".$footprint_sqft_a."<br>";
    echo "専有面積(バルコニーあり)(sqm)：".$balcony_sqm_a."<br>";
    echo "専有面積(バルコニーあり)(sqft)：".$balcony_sqft_a."<br>";
    echo "1ルームフラグ：".$one_room_flg_a."<br>";
    echo "間取り：".$plan_a."<br>";
    echo "管理費：".$management_fee_a."<br>";
    echo "修繕積立：".$maintenance_fee_a."<br>";
    echo "管理方式：".$management_flg_a."<br>";
    echo "建物面積(sqm)：".$building_area_sqm_a."<br>";
    echo "建物面積(sqft)：".$building_area_sqft_a."<br>";
    echo "建物面積(free)：".$building_area_free_a."<br>";
    echo "建ペイ率：".$building_to_land_ratio_a."<br>";
    echo "容積率：".$floor_area_ratio."<br>";
    echo "用途地域：".$use_districts_a."<br>";
    echo "現況：".$current_stat_flg_a."<br>";
    echo "引渡時期：".$delivery_time_a."<br>";
    echo "<br><br>";
*/

    // propertyテーブル用クエリー作成
    if($property_id_cnt == 1){
      $property_insert_query[$p_insert_query_cnt]  = $property_insert_query_org;
    }else if($property_id_cnt == 4000){
      $p_insert_query_cnt++;
      $property_insert_query[$p_insert_query_cnt]  = $property_insert_query_org;
    }else if($property_id_cnt == 8000){
      $p_insert_query_cnt++;
      $property_insert_query[$p_insert_query_cnt]  = $property_insert_query_org;
    }else if($property_id_cnt == 12000){
      $p_insert_query_cnt++;
      $property_insert_query[$p_insert_query_cnt]  = $property_insert_query_org;
    }else if($property_id_cnt == 16000){
      $p_insert_query_cnt++;
      $property_insert_query[$p_insert_query_cnt]  = $property_insert_query_org;
    }else if($property_id_cnt == 22000){
      $p_insert_query_cnt++;
      $property_insert_query[$p_insert_query_cnt]  = $property_insert_query_org;
    }
    $property_insert_query[$p_insert_query_cnt] .= "('".$property_id_cnt."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$price_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$built_date_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$access_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$land_area_sqm_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$land_area_sqft_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$private_road_sqm_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$private_road_sqft_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$footprint_sqm_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$footprint_sqft_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$balcony_sqm_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$balcony_sqft_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$management_fee_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$maintenance_fee_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$plan_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$building_to_land_ratio_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$floor_area_ratio."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$use_districts_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$current_stat_flg_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$delivery_time_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$yield_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$annual_income."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$monthly_income."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$building_structure_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$rank_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$total_rank_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$basement_rank_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$total_units_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$one_room_flg_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$address_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$land_rights_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$building_area_sqm_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$building_area_sqft_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$building_area_free_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$property_flg_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$management_flg_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "'',";
    $property_insert_query[$p_insert_query_cnt] .= "'".$distinction_id_a."',";
    $property_insert_query[$p_insert_query_cnt] .= "now(),";
    $property_insert_query[$p_insert_query_cnt] .= "now()),";

    // p_accessテーブル用クエリー作成
    for ($access_cnt = 0; $access_cnt < count($access_data_a); $access_cnt++) {
      $p_access_insert_query .= "('".$property_id_cnt."',";
      $p_access_insert_query .= "'".$access_data_a[$access_cnt]['p_railway_id']."',";
      $p_access_insert_query .= "'".$access_data_a[$access_cnt]['walk_minute_a']."'),";
    }

    // p_addressテーブル用クエリー作成
    $p_address_insert_query .= "('".$property_id_cnt."',";
    $p_address_insert_query .= "'".$p_city_id_a."'),";

    // p_imgテーブル用クエリー作成
    $img_data_a[0]['display'] = 1;
    $img_data_a[1]['display'] = 2;
    $img_data_a[2]['display'] = 3;
    $img_data_a[0]['img_url'] = "img/1/1.jpg";
    $img_data_a[1]['img_url'] = "img/1/2.jpg";
    $img_data_a[2]['img_url'] = "img/1/3.jpg";
    for ($img_cnt = 0; $img_cnt < count($img_data_a); $img_cnt++) {
      $p_img_insert_query .= "('".$property_id_cnt."',";
      $p_img_insert_query .= "'".$img_data_a[$img_cnt]['display']."',";
      $p_img_insert_query .= "'".$img_data_a[$img_cnt]['img_url']."'),";
    }

    $distinction_id_a = "";
    $property_flg_a = "";
    $price_a = "";
    $yield_a = "";
    $annual_income = "";
    $monthly_income = "";
    $built_date_a = "";
    $building_structure_a = "";
    $rank_a = "";
    $total_rank_a = "";
    $basement_rank_a = "";
    $total_units_a = "";
    $access_a = "";
    $access_data_a = array();
    $address_a = "";
    $p_city_id_a = "";
    $land_area_sqm_a = "";
    $land_area_sqft_a = "";
    $private_road_sqm_a = "";
    $private_road_sqft_a = "";
    $land_rights_a = "";
    $footprint_sqm_a = "";
    $footprint_sqft_a = "";
    $balcony_sqm_a = "";
    $balcony_sqft_a = "";
    $one_room_flg_a = "";
    $plan_a = "";
    $management_fee_a = "";
    $maintenance_fee_a = "";
    $management_flg_a = "";
    $building_area_sqm_a = "";
    $building_area_sqft_a = "";
    $building_area_free_a = "";
    $building_to_land_ratio_a = "";
    $floor_area_ratio = "";
    $use_districts_a = "";
    $current_stat_flg_a = "";
    $delivery_time_a = "";
  }
  $row_cnt++;
}

$upload_msg .= "[log] 収益物件数：".$property_id_cnt."<br><br>";

// CSVファイルを閉じる
fclose($temp);
$file = null;

// c_price_countテーブル用クエリー作成
$c_price_count_insert_query .= c_price_count_query_make($c_price_num);
// c_city_countテーブル用クエリー作成
$c_city_count_insert_query .= c_city_count_query_make($c_city_num);
// c_railway_countテーブル用クエリー作成
$c_railway_count_insert_query .= c_railway_count_query_make($c_railway_num);
// c_all_countテーブル用クエリー作成
$c_all_count_insert_query .= "('".$property_id_cnt."',";
$c_all_count_insert_query .= "'".$yield_15over_num."',";
$c_all_count_insert_query .= "'".$one_room_num."'),";

// SQLの最後の『,』を削除
for($loop = 0; $loop < count($property_insert_query); $loop++){
  $property_insert_query[$loop] = rtrim($property_insert_query[$loop], ",");
}
$p_img_insert_query = rtrim($p_img_insert_query, ",");
$p_access_insert_query = rtrim($p_access_insert_query, ",");
$p_address_insert_query = rtrim($p_address_insert_query, ",");
$p_img_insert_query = rtrim($p_img_insert_query, ",");
$c_price_count_insert_query = rtrim($c_price_count_insert_query, ",");
$c_city_count_insert_query = rtrim($c_city_count_insert_query, ",");
$c_railway_count_insert_query = rtrim($c_railway_count_insert_query, ",");
$c_all_count_insert_query = rtrim($c_all_count_insert_query, ",");

// クエリーデバック
//for($loop = 0; $loop < count($property_insert_query); $loop++){
  //echo $property_insert_query[$loop]."<br><br>";
//}
//echo $p_access_insert_query."<br><br>";
//echo $p_address_insert_query."<br><br>";
//echo $p_img_insert_query."<br><br>";
//echo $c_price_count_insert_query."<br><br>";
//echo $c_city_count_insert_query."<br><br>";
//echo $c_railway_count_insert_query."<br><br>";
//echo $c_all_count_insert_query."<br><br>";

// DB接続 MySQLiオブジェクト型
$mysqli = new mysqli('localhost', 'root', 'root', 'jpfs_db'); // ローカル環境用
//$mysqli = new mysqli('mysql807.xserver.jp', 'nirnir_fudosan', 'password', 'nirnir_fudosan');   // Xサーバー用
// 本番環境
$mysqli = new mysqli( 'jpfsdb.c6c8nmqgvm7h.ap-southeast-1.rds.amazonaws.com' , 'jpfsuser' , '6504695634' , 'jpfs_db' ); 

// 接続確認
if( $mysqli->connect_errno ) {
  echo "[Error] Database Access Error<br>";
  exit;
}

// 文字化け防止
$mysqli->set_charset('utf8');

// オートコミットを切る
$mysqli->autocommit(FALSE);

// c_price_countテーブル削除
if($mysqli->query("DELETE FROM c_price_count")) $upload_msg .= '<span class="blue">[○Success]  c_price_count old table DELETE</span><br>';
else {
  $upload_msg .= '<span class="red">[●Error]  c_price_count old table DELETE Error</span><br>';
  die("c_price_countの削除に失敗しました ".$mysqli->error);
}
// c_city_countテーブル削除
if($mysqli->query("DELETE FROM c_city_count")) $upload_msg .= '<span class="blue">[○Success]  c_city_count old table DELETE</span><br>';
else {
  $upload_msg .= '<span class="red">[●Error]  c_city_count old table DELETE Error</span><br>';
  die("c_city_countの削除に失敗しました ".$mysqli->error);
}
// c_railway_countテーブル削除
if($mysqli->query("DELETE FROM c_railway_count")) $upload_msg .= '<span class="blue">[○Success]  c_railway_count old table DELETE</span><br>';
else {
  $upload_msg .= '<span class="red">[●Error]  c_railway_count old table DELETE Error</span><br>';
  die("c_railway_countの削除に失敗しました ".$mysqli->error);
}
// c_all_countテーブル削除
if($mysqli->query("DELETE FROM c_all_count")) $upload_msg .= '<span class="blue">[○Success]  c_all_count old table DELETE</span><br>';
else {
  $upload_msg .= '<span class="red">[●Error]  c_all_count old table DELETE Error</span><br>';
  die("c_all_countの削除に失敗しました ".$mysqli->error);
}
// p_accessテーブル削除
if($mysqli->query("DELETE FROM p_access")) $upload_msg .= '<span class="blue">[○Success]  p_access old table DELETE</span><br>';
else {
  $upload_msg .= '<span class="red">[●Error]  p_access old table DELETE Error</span><br>';
  die("p_accessの削除に失敗しました ".$mysqli->error);
}
// p_addressテーブル削除
if($mysqli->query("DELETE FROM p_address")) $upload_msg .= '<span class="blue">[○Success]  p_address old table DELETE</span><br>';
else {
  $upload_msg .= '<span class="red">[●Error]  p_img old table DELETE Error</span><br>';
  die("p_imgの削除に失敗しました ".$mysqli->error);
}
// p_imgテーブル削除
if($mysqli->query("DELETE FROM p_img")) $upload_msg .= '<span class="blue">[○Success]  p_img old table DELETE</span><br>';
else {
  $upload_msg .= '<span class="red">[●Error]  p_img old table DELETE Error</span><br>';
  die("p_imgの削除に失敗しました ".$mysqli->error);
}
// propertyテーブル削除
if($mysqli->query("DELETE FROM property")) $upload_msg .= '<span class="blue">[○Success]  property old table DELETE</span><br>';
else {
  $upload_msg .= '<span class="red">[●Error]  property old table DELETE Error</span><br>';
  die("propertyの削除に失敗しました ".$mysqli->error);
}
$upload_msg .= "<br>";

// propertyテーブルに格納
for($loop = 0; $loop < count($property_insert_query); $loop++){
  if($mysqli->query($property_insert_query[$loop])) $upload_msg .= '<span class="blue">[○Success]  '.$loop.' property new table INSERT</span><br>';
  else {
    $upload_msg .= '<span class="red">[●Error]  '.$loop.' property new table INSERT Error</span><br>';
    die("propertyの登録に失敗しました ".$mysqli->error);
  }
}
// p_accessテーブルに格納
if($mysqli->query($p_access_insert_query)) $upload_msg .= '<span class="blue">[○Success]  p_access new table INSERT</span><br>';
else {
  $upload_msg .= '<span class="red">[●Error]  p_access new table INSERT Error</span><br>';
  die("p_accessの登録に失敗しました ".$mysqli->error);
}
// p_addressテーブルに格納
if($mysqli->query($p_address_insert_query)) $upload_msg .= '<span class="blue">[○Success]  p_address new table INSERT</span><br>';
else {
  $upload_msg .= '<span class="red">[●Error]  p_address new table INSERT Error</span><br>';
  die("p_addressの登録に失敗しました ".$mysqli->error);
}
// p_imgテーブルに格納
if($mysqli->query($p_img_insert_query)) $upload_msg .= '<span class="blue">[○Success]  p_img new table INSERT</span><br>';
else {
  $upload_msg .= '<span class="red">[●Error]  p_img new table INSERT Error</span><br>';
  die("p_imgの登録に失敗しました ".$mysqli->error);
}
// c_price_countテーブルに格納
if($mysqli->query($c_price_count_insert_query)) $upload_msg .= '<span class="blue">[○Success]  c_price_count new table INSERT</span><br>';
else {
  $upload_msg .= '<span class="red">[●Error]  c_price_count new table INSERT Error</span><br>';
  die("c_price_countの登録に失敗しました ".$mysqli->error);
}
// c_city_countテーブルに格納
if($mysqli->query($c_city_count_insert_query)) $upload_msg .= '<span class="blue">[○Success]  c_city_count new table INSERT</span><br>';
else {
  $upload_msg .= '<span class="red">[●Error]  c_city_count new table INSERT Error</span><br>';
  die("c_city_countの登録に失敗しました ".$mysqli->error);
}
// c_railway_countテーブルに格納
if($mysqli->query($c_railway_count_insert_query)) $upload_msg .= '<span class="blue">[○Success]  c_railway_count new table INSERT</span><br>';
else {
  $upload_msg .= '<span class="red">[●Error]  c_railway_count new table INSERT Error</span><br>';
  die("c_railway_countの登録に失敗しました ".$mysqli->error);
}
// c_all_countテーブルに格納
if($mysqli->query($c_all_count_insert_query)) $upload_msg .= '<span class="blue">[○Success]  c_all_count new table INSERT</span><br>';
else {
  $upload_msg .= '<span class="red">[●Error]  c_all_count new table INSERT Error</span><br>';
  die("c_all_countの登録に失敗しました ".$mysqli->error);
}

/* トランザクションをコミット */
$mysqli->commit();

$mysqli->close();

$upload_msg .= '<br><br>';
$smarty->assign('upload_msg', $upload_msg); 

$smarty->display('index.html');
?>