<?php
require_once 'common.php';
// MySQLに対する処理
//総物件カウントテーブル
$sql = "SELECT * FROM c_all_count";
$result = mysqli_query($mysqli,$sql);
if (!$result) {
    die('クエリーが失敗しました。'.mysqli_error());
}
$c_all_count = mysqli_fetch_assoc($result);
$myArray = array('all_property_num' => $c_all_count['all_property_num'], 	//総物件数
	'yield_15over_num' => $c_all_count['yield_15over_num'], 	//利回り15％以上
	'one_room_num' => $c_all_count['one_room_num']);			//ワンルーム
$smarty->assign('c_all_count', $myArray);

//物件価格別カウントテーブル
$sql = 'SELECT * FROM c_price_count ORDER BY property_flg, price_flg';
$result = mysqli_query($mysqli,$sql);
if (!$result) {
    die('クエリーが失敗しました。'.mysqli_error());
}
while ($row = mysqli_fetch_assoc($result)) {
	if ($row['property_flg'] == 'investment'){
		if ($row['price_flg'] == 'title') $investment['t'] = number_format($row['price_count']);
		elseif ($row['price_flg'] == '700u') $investment['700u'] = number_format($row['price_count']);
		elseif ($row['price_flg'] == '700o') $investment['700o'] = number_format($row['price_count']);
		elseif ($row['price_flg'] == '1000o') $investment['1000o'] = number_format($row['price_count']);
	}
	elseif ($row['property_flg'] == 'selling'){
		if ($row['price_flg'] == 'title') $selling['t'] = number_format($row['price_count']);
	}
	elseif ($row['property_flg'] == 'oneapart'){
		if ($row['price_flg'] == 'title') $oneapart['t'] = number_format($row['price_count']);
		elseif ($row['price_flg'] == '3000u') $oneapart['3000u'] = number_format($row['price_count']);
		elseif ($row['price_flg'] == '3000o') $oneapart['3000o'] = number_format($row['price_count']);
		elseif ($row['price_flg'] == '5000o') $oneapart['5000o'] = number_format($row['price_count']);
		elseif ($row['price_flg'] == '8000o') $oneapart['8000o'] = number_format($row['price_count']);
		elseif ($row['price_flg'] == '10000o') $oneapart['10000o'] = number_format($row['price_count']);
	}
	elseif ($row['property_flg'] == 'onemantion'){
		if ($row['price_flg'] == 'title') $onemantion['t'] = number_format($row['price_count']);
		elseif ($row['price_flg'] == '10000u') $onemantion['10000u'] = number_format($row['price_count']);
		elseif ($row['price_flg'] == '10000o') $onemantion['10000o'] = number_format($row['price_count']);
		elseif ($row['price_flg'] == '20000o') $onemantion['20000o'] = number_format($row['price_count']);
	}
	elseif ($row['property_flg'] == 'onebuilding'){
		if ($row['price_flg'] == 'title') $onebuilding['t'] = number_format($row['price_count']);
		elseif ($row['price_flg'] == '10000u') $onebuilding['10000u'] = number_format($row['price_count']);
		elseif ($row['price_flg'] == '10000o') $onebuilding['10000o'] = number_format($row['price_count']);
		elseif ($row['price_flg'] == '30000o') $onebuilding['30000o'] = number_format($row['price_count']);
	}
	elseif ($row['property_flg'] == 'join'){
		if ($row['price_flg'] == 'title') $join['t'] = number_format($row['price_count']);
	}
	elseif ($row['property_flg'] == 'rent'){
		if ($row['price_flg'] == 'title') $rent['t'] = number_format($row['price_count']);
	}
	elseif ($row['property_flg'] == 'warehouse'){
		if ($row['price_flg'] == 'title') $warehouse['t'] = number_format($row['price_count']);
	}
	elseif ($row['property_flg'] == 'hotel'){
		if ($row['price_flg'] == 'title') $hotel['t'] = number_format($row['price_count']);
	}
	elseif ($row['property_flg'] == 'land'){
		if ($row['price_flg'] == 'title') $land['t'] = number_format($row['price_count']);
	}
}

$smarty->assign('investment', $investment);
$smarty->assign('selling', $selling);
$smarty->assign('oneapart', $oneapart);
$smarty->assign('onemantion', $onemantion);
$smarty->assign('onebuilding', $onebuilding);
$smarty->assign('join', $join);
$smarty->assign('rent', $rent);
$smarty->assign('warehouse', $warehouse);
$smarty->assign('hotel', $hotel);
$smarty->assign('land', $land);

//一覧
$sql = 'SELECT price, yield, access, address, distinction_id FROM property LIMIT 5';
$result = mysqli_query($mysqli,$sql);
if (!$result) {
    die('クエリーが失敗しました。'.mysqli_error());
}
while ($row = mysqli_fetch_assoc($result)) {
	$new_property[0][] = $row['price'];
	$new_property[1][] = $row['yield'];
	$new_property[2][] = $row['access'];
	$new_property[3][] = $row['address'];
	$new_property[4][] = $row['distinction_id'];
}
$smarty->assign('new_property', $new_property);

//MySQL切断
//$close_flag = mysqli_close($link);

$smarty->display('index.html');

?>