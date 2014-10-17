<?php

require_once 'common.php';

// MySQLに対する処理
//総物件カウントテーブル
$sql = "SELECT * FROM property WHERE distinction_id = '".$_REQUEST['id']."'";
$result = mysqli_query($mysqli,$sql);
if (!$result) {
    die('クエリーが失敗しました。'.mysqli_error());
}

$property = mysqli_fetch_assoc($result);
$myArray = array('id' => $property['id'], 	//id
	'yield' => $property['yield'], 	//利回り
	'price' => number_format($property['price']), 	//価格
	'annual_income' => number_format($property['annual_income']), 	//年収
	'monthly_income' => number_format($property['monthly_income']), 	//月収
	'management_fee' => number_format($property['management_fee']), 	//管理費
	'maintenance_fee' => number_format($property['maintenance_fee']), 	//修繕費
	'footprint_sqft' => number_format($property['footprint_sqft']), 	//専有面積(sqft)
	'footprint_sqm' => number_format($property['footprint_sqm']), 	//専有面積(sqm)
	'balcony_sqft' => number_format($property['balcony_sqft']), 	//バルコニー
	'built_date' => $property['built_date'], 	//築年月
	'building_structure_flg' => $property['building_structure_flg'], 	//建物構造
	'access' => $property['access'], 	//交通
	'rank' => $property['rank'], 	//階数
	'total_units' => $property['total_units'], 	//総戸数
	'address' => $property['address'], 	//住所
	'plan' => $property['plan'], 	//間取り
	'current_state_flg' => $property['current_state_flg'],	//現状
	'management_flg' => $property['management_flg'],	//管理方式
  'delivery_time_flg' => $property['delivery_time_flg']); //引渡し時期
	
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
$query = "SELECT * FROM property WHERE NOT distinction_id = '".$_REQUEST['id']."' ORDER BY abs(price-$property[price]),abs(yield-$property[yield])";
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

//MySQL切断
$close_flag = mysqli_close($link);

$smarty->display('list/detail.html');

?>