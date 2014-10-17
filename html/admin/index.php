<?php

//require_once '../../Smarty/Smarty.class.php';
require_once 'Smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir = '../templates/admin/';
$smarty->compile_dir  = '../templates_c/';

if (isset($_POST["srh_flg"])) $srh_flg = $_POST['srh_flg'];
else $srh_flg = 3;
if (isset($_POST["srh_property_id"])){
  $srh_property_id = $_POST['srh_property_id'];
  $srh_property_id = preg_replace('/^[ 　]+/u', '', $srh_property_id); // 先頭の半角全角スペース除去
  $srh_property_id = preg_replace('/[ 　]+$/u', '', $srh_property_id); // 末尾の半角全角スペース除去
  $srh_property_id = mb_convert_kana($srh_property_id, "a", "UTF-8");  // 全角英数字を半角にする
}
if (isset($_POST["srh_distinction_id"])){
  $srh_distinction_id = $_POST['srh_distinction_id'];
  $srh_distinction_id = preg_replace('/^[ 　]+/u', '', $srh_distinction_id); // 先頭の半角全角スペース除去
  $srh_distinction_id = preg_replace('/[ 　]+$/u', '', $srh_distinction_id); // 末尾の半角全角スペース除去
  $srh_distinction_id = mb_convert_kana($srh_distinction_id, "a", "UTF-8");  // 全角英数字を半角にする
}


// 物件種別ID検索
if($srh_flg == 1){
  if (empty($srh_property_id)) {
    $err_msg_property_id = "※なにも入力されていません";
    $smarty->assign('srh_property_id', $srh_property_id); 
    $smarty->assign('err_msg_property_id', $err_msg_property_id); 
    $smarty->display('index.html');
  }else if (is_numeric($srh_property_id) == false) {
    $err_msg_property_id = "※数字を入力してください";
    $smarty->assign('srh_property_id', $srh_property_id); 
    $smarty->assign('err_msg_property_id', $err_msg_property_id); 
    $smarty->display('index.html');
  }else{
    // 検索結果ページへ
    
    // 接続
    //$mysqli = new mysqli('localhost', 'root', 'root', 'jpfs_db'); // ローカル環境用
    //$mysqli = new mysqli('mysql807.xserver.jp', 'nirnir_fudosan', 'password', 'nirnir_fudosan');   // Xサーバー用
    // 本番環境
    $mysqli = new mysqli( 'jpfsdb.c6c8nmqgvm7h.ap-southeast-1.rds.amazonaws.com' , 'jpfsuser' , '6504695634' , 'jpfs_db' ); 
    if( $mysqli->connect_errno ){
      die('接続失敗です。'.mysqli_connect_error() );
    }
    
    // 文字化け防止
    $mysqli->set_charset("utf8");
    
    // 実行
    $sql = "SELECT * FROM property WHERE id = $_POST[srh_property_id]";
    if($result = mysqli_query($mysqli,$sql)) {
      if($property = mysqli_fetch_assoc($result)) {
        $myArray = array('id' => $property['id'],   //id
      'yield' => $property['yield'],  //利回り
        'price' => number_format($property['price']),   //価格
      'annual_income' => number_format($property['annual_income']),   //年収
      'monthly_income' => number_format($property['monthly_income']),   //月収
      'management_fee' => number_format($property['management_fee']),   //管理費
      'maintenance_fee' => number_format($property['maintenance_fee']),   //修繕費
      'footprint_sqft' => number_format($property['footprint_sqft']),   //専有面積(sqft)
      'footprint_sqm' => number_format($property['footprint_sqm']),   //専有面積(sqm)
      'balcony_sqft' => number_format($property['balcony_sqft']),   //バルコニー
      'built_date' => $property['built_date'],  //築年月
      'building_structure_flg' => $property['building_structure_flg'],  //建物構造
      'access' => $property['access'],  //交通
      'rank' => $property['rank'],  //階数
      'total_units' => $property['total_units'],  //総戸数
      'address' => $property['address'],  //住所
      'plan' => $property['plan'],  //間取り
      'current_state_flg' => $property['current_state_flg'],  //現状
      'management_flg' => $property['management_flg']); //管理方式
  
        $smarty->assign('property', $myArray);

        $smarty->assign('psf',round($property['price'] / $property['footprint_sqft'],2) );  // psf = price / footprint_sqft
        $smarty->assign('built_year', date('Y') - substr($property['built_date'] , 0 , 4) ); // built_year = 現在の年数ー築年

    // ドル換算
    $data = file_get_contents('http://rate-exchange.appspot.com/currency?from=jpy&to=sgd');
    $json = json_decode($data, true);
        
    $smarty->assign('price_sgd', round($property['price'] * $json['rate'],2) );
    $smarty->assign('annual_income_sgd', round($property['annual_income'] * $json['rate'],2) ); 
    $smarty->assign('monthly_income_sgd', round($property['monthly_income'] * $json['rate'],2) ); 
    $smarty->assign('management_fee_sgd', round($property['management_fee'] * $json['rate'],2) ); 
    $smarty->assign('maintenance_fee_sgd', round($property['maintenance_fee'] * $json['rate'],2) ); 
    $smarty->assign('psf_sgd',round(($property['price'] / $property['footprint_sqft']) * $json['rate'],2) );

    // 画像取得
    $query = "SELECT * FROM p_img WHERE property_id = '".$property['id']."'";
      if($result = $mysqli->query($query) ) {
        while($rows = $result->fetch_assoc()){    //1行ずつ連想配列で取得
          $smarty->append('img',$rows[img_url]);  // img{[0]=>img/1/1.jpg , [1]=>img/1/2.jpg , [2]=>img/1/3.jpg}
        }
      }else {
        echo "error";
      }

    // 似た物件取得
    $query = "SELECT * FROM property WHERE NOT id = $_POST[srh_property_id] ORDER BY abs(price-$property[price]),abs(yield-$property[yield])";
      if($result1 = $mysqli->query($query) ) {
        for($i = 0; $i < 6; $i ++){ 
          $row = $result1->fetch_assoc();
          $query = "SELECT * FROM p_img WHERE property_id = '".$row['id']."'";
          if($result2 = $mysqli->query($query) ) {
            while($rows = $result2->fetch_assoc() ){    
              $smarty->append("img$i",$rows[img_url]);
            }
          }
          $smarty->append('distinction_id' , $row['distinction_id']);
          $smarty->append('property_flg' , $row['property_flg']);
          $smarty->append('address', $row['address']); 
          $smarty->append('access', $row['access']); 
          $smarty->append('price', number_format($row['price'])); 
          $smarty->append('yield', $row['yield']); 
          $smarty->append('built_date', $row['built_date']);       
          $smarty->append('building_structure_flg', $row['building_structure_flg']); 
          $smarty->append('use_districts', $row['use_districts']); 
          $smarty->append('building_to_land_ratio', $row['building_to_land_ratio']); 
          $smarty->append('floor_area_ratio', $row['floor_area_ratio']); 
          $smarty->append('rank', $row['rank']); 
          $smarty->append('total_units', $row['total_units']); 
        }    
      }

    // 表示 
    $smarty->template_dir = '../templates/';
    $smarty->display('list/detail.html');

      }else {
        $err_msg_property_id = "※該当する物件種別がありません,";
        $smarty->assign('srh_property_id', $srh_property_id); 
        $smarty->assign('err_msg_property_id', $err_msg_property_id); 
        $smarty->display('index.html');
      }
    }else {
      $err_msg_property_id = "※該当する物件種別がありません";
      $smarty->assign('srh_property_id', $srh_property_id); 
      $smarty->assign('err_msg_property_id', $err_msg_property_id); 
      $smarty->display('index.html');
    }
    // 接続閉じる
    $mysqli->close();
  }
// K種別検索
}else if($srh_flg == 2){
  if (empty($srh_distinction_id)) {
    $err_msg_distinction_id = "※なにも入力されていません";
    $smarty->assign('srh_distinction_id', $srh_distinction_id); 
    $smarty->assign('err_msg_distinction_id', $err_msg_distinction_id); 
    $smarty->display('index.html');
  }else if (!ctype_alnum($srh_distinction_id)) {
    $err_msg_distinction_id = "※英数字を入力してください";
    $smarty->assign('srh_distinction_id', $srh_distinction_id); 
    $smarty->assign('err_msg_distinction_id', $err_msg_distinction_id); 
    $smarty->display('index.html');
  }else{
    // 検索結果ページへ
    
    // 接続
    $mysqli = new mysqli('localhost', 'root', 'SDEMxdVs7sVAVzPE', 'jpfs_db'); // ローカル環境用
    //$mysqli = new mysqli('mysql807.xserver.jp', 'nirnir_fudosan', 'password', 'nirnir_fudosan');   // Xサーバー用
    // 本番環境
    $mysqli = new mysqli( 'jpfsdb.c6c8nmqgvm7h.ap-southeast-1.rds.amazonaws.com' , 'jpfsuser' , '6504695634' , 'jpfs_db' ); 
    if( $mysqli->connect_errno ){
      die('接続失敗です。'.mysqli_connect_error() );
    }
    
    // 文字化け防止
    $mysqli->set_charset("utf8");
    
    // 実行
    $sql = "SELECT * FROM property WHERE distinction_id = '$_POST[srh_distinction_id]'";
    if($result = mysqli_query($mysqli,$sql)) {
      if($property = mysqli_fetch_assoc($result)) {
        $myArray = array('id' => $property['id'],   //id
      'yield' => $property['yield'],  //利回り
        'price' => number_format($property['price']),   //価格
      'annual_income' => number_format($property['annual_income']),   //年収
      'monthly_income' => number_format($property['monthly_income']),   //月収
      'management_fee' => number_format($property['management_fee']),   //管理費
      'maintenance_fee' => number_format($property['maintenance_fee']),   //修繕費
      'footprint_sqft' => number_format($property['footprint_sqft']),   //専有面積(sqft)
      'footprint_sqm' => number_format($property['footprint_sqm']),   //専有面積(sqm)
      'balcony_sqft' => number_format($property['balcony_sqft']),   //バルコニー
      'built_date' => $property['built_date'],  //築年月
      'building_structure_flg' => $property['building_structure_flg'],  //建物構造
      'access' => $property['access'],  //交通
      'rank' => $property['rank'],  //階数
      'total_units' => $property['total_units'],  //総戸数
      'address' => $property['address'],  //住所
      'plan' => $property['plan'],  //間取り
      'current_state_flg' => $property['current_state_flg'],  //現状
      'management_flg' => $property['management_flg']); //管理方式
  
        $smarty->assign('property', $myArray);

        $smarty->assign('psf',round($property['price'] / $property['footprint_sqft'],2) );  // psf = price / footprint_sqft
        $smarty->assign('built_year', date('Y') - substr($property['built_date'] , 0 , 4) ); // built_year = 現在の年数ー築年

    // ドル換算
    $data = file_get_contents('http://rate-exchange.appspot.com/currency?from=jpy&to=sgd');
    $json = json_decode($data, true);
        
    $smarty->assign('price_sgd', round($property['price'] * $json['rate'],2) );
    $smarty->assign('annual_income_sgd', round($property['annual_income'] * $json['rate'],2) ); 
    $smarty->assign('monthly_income_sgd', round($property['monthly_income'] * $json['rate'],2) ); 
    $smarty->assign('management_fee_sgd', round($property['management_fee'] * $json['rate'],2) ); 
    $smarty->assign('maintenance_fee_sgd', round($property['maintenance_fee'] * $json['rate'],2) ); 
    $smarty->assign('psf_sgd',round(($property['price'] / $property['footprint_sqft']) * $json['rate'],2) );

    // 画像取得
    $query = "SELECT * FROM p_img WHERE property_id = '".$property['id']."'";
      if($result = $mysqli->query($query) ) {
        while($rows = $result->fetch_assoc()){    //1行ずつ連想配列で取得
          $smarty->append('img',$rows[img_url]);  // img{[0]=>img/1/1.jpg , [1]=>img/1/2.jpg , [2]=>img/1/3.jpg}
        }
      }else {
        echo "error";
      }

    // 似た物件取得
    $query = "SELECT * FROM property WHERE NOT distinction_id = '$_POST[srh_distinction_id]' ORDER BY abs(price-$property[price]),abs(yield-$property[yield])";
      if($result1 = $mysqli->query($query) ) {
        for($i = 0; $i < 6; $i ++){ 
          $row = $result1->fetch_assoc();
          $query = "SELECT * FROM p_img WHERE property_id = '".$row['id']."'";
          if($result2 = $mysqli->query($query) ) {
            while($rows = $result2->fetch_assoc() ){    
              $smarty->append("img$i",$rows[img_url]);
            }
          }
          $smarty->append('distinction_id' , $row['distinction_id']);
          $smarty->append('property_flg' , $row['property_flg']);
          $smarty->append('address', $row['address']); 
          $smarty->append('access', $row['access']); 
          $smarty->append('price', number_format($row['price'])); 
          $smarty->append('yield', $row['yield']); 
          $smarty->append('built_date', $row['built_date']);       
          $smarty->append('building_structure_flg', $row['building_structure_flg']); 
          $smarty->append('use_districts', $row['use_districts']); 
          $smarty->append('building_to_land_ratio', $row['building_to_land_ratio']); 
          $smarty->append('floor_area_ratio', $row['floor_area_ratio']); 
          $smarty->append('rank', $row['rank']); 
          $smarty->append('total_units', $row['total_units']); 
        }    
      }
        // 表示 
        $smarty->template_dir = '../templates/';
        $smarty->display('list/detail.html');
        //$smarty->display('../list/detail.html');

      }else {
        $err_msg_distinction_id = "※該当するK種別IDがありません";
        $smarty->assign('srh_distinction_id', $srh_distinction_id); 
        $smarty->assign('err_msg_distinction_id', $err_msg_distinction_id); 
        $smarty->display('index.html');
        
      }
    }else {
      $err_msg_distinction_id = "※該当するK種別IDがありません";
      $smarty->assign('srh_distinction_id', $srh_distinction_id); 
      $smarty->assign('err_msg_distinction_id', $err_msg_distinction_id); 
      $smarty->display('index.html');
      
    }
    // 接続閉じる
    $mysqli->close();
  } 
}else if($srh_flg == 4){
  $smarty->assign("maintenance_mode",exec("php /home/ec2-user/maintenance_start.php $_POST[year]-$_POST[month]-$_POST[day]-$_POST[hour]-$_POST[minute]") );
  $smarty->assign("current_maintenance",exec("php /home/ec2-user/maintenance_start.php -c") );
  $smarty->display('index.html');

}else{
  $smarty->assign("current_maintenance",exec("php /home/ec2-user/maintenance_start.php -c") );
  $smarty->assign('srh_property_id', ""); 
  $smarty->assign('srh_distinction_id', "");
  $smarty->display('index.html');
}
?>