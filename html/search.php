<?php
require_once 'common.php';

//路線別物件数カウント
$sql = "SELECT p_railway_id, COUNT(p_railway_id) AS cnt_railway_id FROM p_access GROUP BY p_railway_id";
$result = mysqli_query($mysqli,$sql);
if (!$result) {
    die('クエリーが失敗しました。'.mysqli_error());
}
$i = 0;
//取得できた分をセット
while($row = mysqli_fetch_assoc($result)){
	if ($i == 0) $railway_id = array($row['p_railway_id'] => $row['cnt_railway_id']);
	else $railway_id += array($row['p_railway_id'] => $row['cnt_railway_id']);
	$i++;
}
//取得できなかった分（ゼロ件）にゼロをセット
for ($count = 0; $count < 59; $count++){
	if (isset($railway_id[$count])){
	}
	else{
		$railway_id += array($count => 0);
	}
}
$smarty->assign('railway_id', $railway_id);
$_SESSION['railway_cnt'] = $railway_id;		//Advanced searchでのバリデーションにかかった後用


//区別物件数カウント
$sql = "SELECT p_city_id, COUNT(p_city_id) AS cnt_city_id FROM p_address GROUP BY p_city_id";
$result = mysqli_query($mysqli,$sql);
if (!$result) {
    die('クエリーが失敗しました。'.mysqli_error());
}
$i = 0;
while($row = mysqli_fetch_assoc($result)){
	if ($i == 0) $city_id = array($row['p_city_id'] => $row['cnt_city_id']);
	else $city_id += array($row['p_city_id'] => $row['cnt_city_id']);
	$i++;
}
//取得できなかった分（ゼロ件）にゼロをセット
for ($count = 0; $count < 24; $count++){
	if (isset($city_id[$count])){
	}
	else{
		$city_id += array($count => 0);
	}
}
$smarty->assign('city_id', $city_id);
$_SESSION['city_cnt'] = $city_id;	//Advanced searchでのバリデーションにかかった後用

mysqli_close($mysqli);
$smarty->display('srh/index.php');

?>