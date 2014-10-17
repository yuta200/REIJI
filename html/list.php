<?php
require_once 'common.php';
require_once("Pager/Pager.php");

//ページ移動用に検索値を保存
if ($_REQUEST['src'] != "") $post = array(src => $_REQUEST['src']);
if ($_REQUEST['key'] != "") $post += array(key => $_REQUEST['key']);
if ($_REQUEST['line'] != "") $post += array(line => $_REQUEST['line']);
if ($_REQUEST['area'] != "") $post += array(area => $_REQUEST['area']);
if ($_REQUEST['pr_l'] != "") $post += array(pr_l => $_REQUEST['pr_l']);
if ($_REQUEST['pr_h'] != "") $post += array(pr_h => $_REQUEST['pr_h']);
if ($_REQUEST['fps_l'] != "") $post += array(fps_l => $_REQUEST['fps_l']);
if ($_REQUEST['fps_h'] != "") $post += array(fps_h => $_REQUEST['fps_h']);
if ($_REQUEST['las_l'] != "") $post += array(las_l => $_REQUEST['las_l']);
if ($_REQUEST['las_h'] != "") $post += array(las_h => $_REQUEST['las_h']);
if ($_REQUEST['sr'] != 0) $post += array(sr => $_REQUEST['sr']);
if ($_REQUEST['sl1'] != 0) $post += array(sl1 => $_REQUEST['sl1']);
if ($_REQUEST['sl2'] != 0) $post += array(sl2 => $_REQUEST['sl2']);
if ($_REQUEST['sl3'] != 0) $post += array(sl3 => $_REQUEST['sl3']);
if ($_REQUEST['sl4'] != 0) $post += array(sl4 => $_REQUEST['sl4']);
if ($_REQUEST['sl5'] != 0) $post += array(sl5 => $_REQUEST['sl5']);
if ($_REQUEST['sl6'] != 0) $post += array(sl6 => $_REQUEST['sl6']);
if ($_REQUEST['sl7'] != 0) $post += array(sl7 => $_REQUEST['sl7']);
if ($_REQUEST['sl8'] != 0) $post += array(sl8 => $_REQUEST['sl8']);
if ($_REQUEST['sl9'] != 0) $post += array(sl9 => $_REQUEST['sl9']);
if ($_REQUEST['sl10'] != 0) $post += array(sl10 => $_REQUEST['sl10']);
if ($_REQUEST['sl11'] != 0) $post += array(sl11 => $_REQUEST['sl11']);
if ($_REQUEST['sl12'] != 0) $post += array(sl12 => $_REQUEST['sl12']);
if ($_REQUEST['yld'] != "") $post += array(yld => $_REQUEST['yld']);
if ($_REQUEST['bd_l'] != "") $post += array(bd_l => $_REQUEST['bd_l']);
if ($_REQUEST['bd_h'] != "") $post += array(bd_h => $_REQUEST['bd_h']);
if ($_REQUEST['tu_l'] != "") $post += array(tu_l => $_REQUEST['tu_l']);
if ($_REQUEST['tu_h'] != "") $post += array(tu_h => $_REQUEST['tu_h']);
if ($_REQUEST['bd'] != "") $post += array(bd => $_REQUEST['bd']);
if ($_REQUEST['bd_l'] != "") $post += array(bd_l => $_REQUEST['bd_l']);
if ($_REQUEST['bd_h'] != "") $post += array(bd_h => $_REQUEST['bd_h']);
if ($_REQUEST['wm'] != "") $post += array(wm => $_REQUEST['wm']);
if ($_REQUEST['lr'] != "") $post += array(lr => $_REQUEST['lr']);
if ($_REQUEST['c1'] != "") $post += array(c1 => $_REQUEST['c1']);
if ($_REQUEST['c2'] != "") $post += array(c2 => $_REQUEST['c2']);
if ($_REQUEST['c3'] != "") $post += array(c3 => $_REQUEST['c3']);
if ($_REQUEST['c4'] != "") $post += array(c4 => $_REQUEST['c4']);
if ($_REQUEST['c5'] != "") $post += array(c5 => $_REQUEST['c5']);
if ($_REQUEST['c6'] != "") $post += array(c6 => $_REQUEST['c6']);
if ($_REQUEST['c7'] != "") $post += array(c7 => $_REQUEST['c7']);
if ($_REQUEST['c8'] != "") $post += array(c8 => $_REQUEST['c8']);
if ($_REQUEST['c9'] != "") $post += array(c9 => $_REQUEST['c9']);
if ($_REQUEST['c10'] != "") $post += array(c10 => $_REQUEST['c10']);
if ($_REQUEST['c11'] != "") $post += array(c11 => $_REQUEST['c11']);
if ($_REQUEST['c12'] != "") $post += array(c12 => $_REQUEST['c12']);
if ($_REQUEST['c13'] != "") $post += array(c13 => $_REQUEST['c13']);
if ($_REQUEST['c14'] != "") $post += array(c14 => $_REQUEST['c14']);
if ($_REQUEST['c15'] != "") $post += array(c15 => $_REQUEST['c15']);
if ($_REQUEST['c16'] != "") $post += array(c16 => $_REQUEST['c16']);
if ($_REQUEST['c17'] != "") $post += array(c17 => $_REQUEST['c17']);
if ($_REQUEST['c18'] != "") $post += array(c18 => $_REQUEST['c18']);
if ($_REQUEST['c19'] != "") $post += array(c19 => $_REQUEST['c19']);
if ($_REQUEST['c20'] != "") $post += array(c20 => $_REQUEST['c20']);
if ($_REQUEST['c21'] != "") $post += array(c21 => $_REQUEST['c21']);
if ($_REQUEST['c22'] != "") $post += array(c22 => $_REQUEST['c22']);
if ($_REQUEST['c23'] != "") $post += array(c23 => $_REQUEST['c23']);
if ($_REQUEST['one'] != "") $post += array(one => $_REQUEST['one']);
if ($_REQUEST['rank'] != "") $post += array(rank => $_REQUEST['rank']);
if ($_REQUEST['pf2'] != "") $post += array(pf2 => $_REQUEST['pf2']);
if ($_REQUEST['pf3'] != "") $post += array(pf3 => $_REQUEST['pf3']);
if ($_REQUEST['pf4'] != "") $post += array(pf4 => $_REQUEST['pf4']);
if ($_REQUEST['pf5'] != "") $post += array(pf5 => $_REQUEST['pf5']);
if ($_REQUEST['pf6'] != "") $post += array(pf6 => $_REQUEST['pf6']);
if ($_REQUEST['pf7'] != "") $post += array(pf7 => $_REQUEST['pf7']);
if ($_REQUEST['pf8'] != "") $post += array(pf8 => $_REQUEST['pf8']);
if ($_REQUEST['pf9'] != "") $post += array(pf9 => $_REQUEST['pf9']);
if ($_REQUEST['pf11'] != "") $post += array(pf11 => $_REQUEST['pf11']);
if ($_REQUEST['bs_w'] != "") $post += array(bs_w => $_REQUEST['bs_w']);
if ($_REQUEST['bs_s'] != "") $post += array(bs_s => $_REQUEST['bs_s']);
if ($_REQUEST['bs_rc'] != "") $post += array(bs_rc => $_REQUEST['bs_rc']);
if ($_REQUEST['bs_src'] != "") $post += array(bs_src => $_REQUEST['bs_src']);
if ($_REQUEST['img'] != "") $post += array(img => $_REQUEST['img']);

//print_r($_REQUEST);
//print_r($post);

//検索後のソート用とバリデーション用に検索値を保存
foreach ($post as $key => $value) {
	$key = h($key);		//セキュリティ用に入力値を変換
	$value = h($value);	//セキュリティ用に入力値を変換
	$hidden[] = "<input type=\"hidden\" name=\"{$key}\" value=\"{$value}\">";	//ソート用パラメータ
	$src_value[$key] = h($value);	//バリデーション用パラメータ
}
$smarty->assign('hidden', $hidden);
$smarty->assign('src_value', $src_value);

//バリデーション
//最低価格>最高価格
if ($_REQUEST['pr_l'] != "" && $_REQUEST['pr_h'] != ""){
	if ($_REQUEST['pr_l'] >= $_REQUEST['pr_h']){
		$error_msg['pr'] = "最高価格は最低価格より高く設定してください。";
	}
}
//『投資用マンション、売り店舗・売り事務所』非選択時に専有面積を指定している。
if ($_REQUEST['fps_l'] != "" || $_REQUEST['fps_h'] != ""){
	if (!isset($_REQUEST['pf2']) && !isset($_REQUEST['pf3'])){
		$error_msg['fps'] = "専有面積は『投資用マンション、売り店舗・売り事務所』選択時のみです。";
	}
}
//土地面積下限>土地面積上限
if ($_REQUEST['las_l'] != "" && $_REQUEST['las_h'] != ""){
	if ($_REQUEST['las_l'] >= $_REQUEST['las_h']){
		$error_msg['las'] = "土地面積上限は土地面積下限より高く設定してください。";
	}
}
//路線検索ボタン押下時、鉄道会社未選択
if ($_REQUEST["src"] == "railway_b"){
	if ($_REQUEST['sr'] == 0) $error_msg['sr'] = "鉄道会社を選択してください。";
}
//路線未選択
if ($_REQUEST['sr'] != 0){
	$select_railway = $_REQUEST['sr'];
	if ($_REQUEST["src"] == "main") $select_line = $_REQUEST['sl'.$select_railway];
	elseif ($_REQUEST["src"] == "railway_b") $select_line = $_REQUEST['sl'];
	if ($select_line == 0 ){
		$error_msg['sr'] = "路線を選択してください。";
	}
}
//築年月
if ($_REQUEST['bd_l'] != "" && $_REQUEST['bd_h'] != ""){
	if ($_REQUEST['bd_l'] >= $_REQUEST['bd_h']){
		$error_msg['bd'] = "築年月上限は築年月下限より高く設定してください。";
	}
}
//総戸数
if ($_REQUEST['tu_l'] != "" && $_REQUEST['tu_h'] != ""){
	if ($_REQUEST['tu_l'] >= $_REQUEST['tu_h']){
		$error_msg['tu'] = "総戸数上限は総戸数下限より高く設定してください。";
	}
}
if (isset($error_msg)){
	$smarty->assign('error_msg', $error_msg);
	$smarty->assign('railway_id', $_SESSION['railway_cnt']);	//路線検索の件数表示
	$smarty->assign('city_id', $_SESSION['city_cnt']);			//都市検索の件数表示
	$smarty->display('srh/index.php');
	exit();
}


if ($_REQUEST['sort'] != "") $post += array(sort => $_REQUEST['sort']);	//ページ処理用にここでソート設定
if ($_REQUEST['sort'] == 1) $order_by[] = " price DESC ";		//価格
elseif ($_REQUEST['sort'] == 2) $order_by[] = " price ASC ";
elseif ($_REQUEST['sort'] == 3) $order_by[] = " yield DESC ";	//利回り
elseif ($_REQUEST['sort'] == 4) $order_by[] = " yield ASC ";
elseif ($_REQUEST['sort'] == 5) $order_by[] = " footprint_sqm DESC ";	//専有面積
elseif ($_REQUEST['sort'] == 6) $order_by[] = " footprint_sqm ASC ";
elseif ($_REQUEST['sort'] == 7) $order_by[] = " total_units DESC ";	//総戸数
elseif ($_REQUEST['sort'] == 8) $order_by[] = " total_units ASC ";
elseif ($_REQUEST['sort'] == 9) $order_by[] = " image_num DESC ";	//画像枚数
elseif ($_REQUEST['sort'] == 10) $order_by[] = " image_num ASC ";
elseif ($_REQUEST['sort'] == 11) $order_by[] = " built_date DESC ";	//築年月
elseif ($_REQUEST['sort'] == 12) $order_by[] = " built_date ASC ";

//キーワード検索ボタン押下時
if ($_REQUEST['src'] == "key"){
	$sql = search_keyword();
}
//路線検索ボタン押下時
elseif ($_REQUEST['src'] == "railway_b"){
	$sql = search_railway();
}
//市ごとの検索
elseif ($_REQUEST["src"] == "city"){
	$sql = search_link_city();
}
//路線ごとの検索
elseif ($_REQUEST["src"] == "railway"){
	$sql = search_link_railway();
}
//メイン検索ボタン押下時
//elseif ($_REQUEST['src'] == "main"){
//	$sql = search_main();
//}
//メイン検索ボタン押下時
else{
	$sql = search_main();
}

//検索結果件数取得
$result = mysqli_query($mysqli,$sql);
if (!$result) {
    die('クエリーが失敗しました。'.mysqli_error());
}
$total_count = mysqli_num_rows($result);
//ページャー設定
$per_page = 20;                   //1ページに表示する件数
$params = array (
	'perPage'    => $per_page,
	//itemData は設定しない
	'totalItems' => $total_count,
	'prevImg'    => 'Prev',
	'nextImg'    => 'Next',
 	'firstPagePre' => "",
 	'firstPageText' => "First",
 	'firstPagePost' => "",
 	'lastPagePre' => "",
 	'lastPageText' => "Last",
 	'lastPagePost' => "",
	'urlVar'    => 'p',
	'curPageLinkClassName'  => 'open_page',  //CSS
	'linkClass'    => 'close_page',	//CSS
	'httpMethod'    => 'GET',
	'formID'    => 'test',
    'importQuery'   => false,
    'extraVars'     => $post,
);
$pager = Pager::factory($params);
$navi = $pager->getLinks();
$smarty->assign('pageNavi', $navi['all']);
$current_page = $pager -> getCurrentPageID();
if ($current_page == 0) $current_page = 1;	//検索結果が０件の場合、1を入れとく
$smarty->assign('currentPageID', $current_page);

//データの取得と設定
$release = get_release_infomation($per_page, $current_page, $sql);
$i = 0;
while ($row = mysqli_fetch_assoc($release)) {
	$property[$i][0] = $row['property_flg'];	//物件種別
	$property[$i][1] = $row['address'];			//住所
	$property[$i][2] = $row['access'];			//交通
	$property[$i][3] = number_format($row['price']);			//価格
	$property[$i][4] = $row['yield'];			//利回り
	$property[$i][5] = $row['built_date'];		//築年月
	$property[$i][6] = $row['building_structure_flg'];	//建物構造
	//用途地域
	if (empty($row['use_districts'])){
		$property[$i][7] = "-";
	}
	else {
		$property[$i][7] = $row['use_districts'];	
	}
	$property[$i][8] = $row['building_to_land_ratio'];	//建ぺい率
	$property[$i][9] = $row['floor_area_ratio'];		//容積率
	$property[$i][10] = $row['rank'];			//階数
	$property[$i][11] = $row['total_units'];	//総戸数
	$property[$i][12] = $row['distinction_id'];	//ID
	//画像枚数
	if (empty($row['image_num'])){
		$property[$i][13] = "0";
	}
	else {
		$property[$i][13] = $row['image_num'];
	}
	if (isset($row['img_url'])){
		$property[$i][14] = $row['img_url'];	//画像場所
	}
	else{
		$property[$i][14] = "../img/site/common/no_img_thumnail.jpg";		//画像なし
	}
	$i++;
}
$smarty->assign('property', $property);
$smarty->assign('total_count', number_format($total_count));

//リスト構築
$i = 0;
$row_count = mysqli_num_rows($release);		//表示物件リスト数
while ($i <= $row_count - 1) {
	//偶数行
	if($i % 2 == 0){
		$class = "area_list_td1";
	}
	//奇数行
	else{
		$class = "area_list_td2";
	}
	$list[] = "<tr>
	<td class='${class}'><span class='size18'>{$property[$i][13]}</span></td>
	<td class='$class area_list_td_img'>
	  <a href='detail.php?id={$property[$i][12]}'><img src='{$property[$i][14]}' width='80' height='60' alt='jpfs'></a>
	</td>
	<td class='${class}'>
	  <a href='detail.php?id={$property[$i][12]}'><span class='size15'>{$property[$i][0]}<br>
	    {$property[$i][1]}<br>
	    {$property[$i][2]}</span></a>
	</td>
	<td class='${class}'>
	  <span class='big red size18'>¥{$property[$i][3]}</span><br>
	    {$property[$i][4]} ％
	</td>
	<td class='${class}'>
	  <span class='big'>{$property[$i][5]}</span><br>
	    {$property[$i][6]}
	</td>
	<td class='${class}'>
	  {$property[$i][7]}<br>
	  {$property[$i][8]} ％ / {$property[$i][9]} ％
	</td>
	<td class='${class}_last'>
	  {$property[$i][10]}階建<br>
	  {$property[$i][11]}戸
	</td>
	</tr>";
	$i++;
}
$smarty->assign('list', $list);
mysqli_close($mysqli);
$smarty->display('list/index.html');


function search_keyword(){
	if ($_REQUEST['key'] != ""){
		// 全角スペースを半角スペースに置換
		$keyword_txt = str_replace( "　" , " " , $_REQUEST['key'] );
		// htmlspecialchars
		$keyword_txt = h($keyword_txt);
		// スペース区切りで文字列を配列に分割
		$keywordArr = explode( " " , $keyword_txt );
		foreach ($keywordArr as $keyword) {
			$cnd_and[] .= "CONCAT(access, ' ', address, ' ', property_flg) LIKE "."'%".$keyword."%'";
		}
		$sql = make_query($join,$cnd_and,$cnd_or,$group_by,$order_by);
	}
	else
	{
		//キーワードが入力されてない場合
		$sql = make_query($join,$cnd_and,$cnd_or,$group_by,$order_by);
	}
	return $sql;
}

function search_main(){
	//----------物件価格----------
	//最低価格＆最高価格
	if ($_REQUEST['pr_l'] != "" && $_REQUEST['pr_h'] != ""){
		$cnd_and[] = 'property.price BETWEEN '.$_REQUEST['pr_l'].' AND '.$_REQUEST['pr_h'];
	}
	//最低価格のみ
	elseif ($_REQUEST['pr_l'] != "" && $_REQUEST['pr_h'] == ""){
		$cnd_and[] = 'property.price >= '.$_REQUEST['pr_l'];
	}
	//最高価格のみ
	elseif ($_REQUEST['pr_h'] != "" && $_REQUEST['pr_l'] == ""){
		$cnd_and[] = 'property.price <= '.$_REQUEST['pr_h'];
	}
	//----------物件価格----------

	//----------物件種別----------
	//投資用マンションフラグ
	if ($_REQUEST['pf2'] == "on"){
		$cnd_or[] = 'property.property_flg = \'investment\'';
	}
	//売り店舗・売り事務所フラグ
	if ($_REQUEST['pf3'] == "on"){
		$cnd_or[] = 'property.property_flg = \'selling\'';
	}
	//最低専有面積＆最高専有面積
	if ($_REQUEST['fps_l'] != "" && $_REQUEST['fps_h'] != ""){
		$cnd_and[] = 'property.footprint_sqft BETWEEN '.$_REQUEST['fps_l'].' AND '.$_REQUEST['fps_h'];
	}
	//最低専有面積のみ
	elseif ($_REQUEST['fps_l'] != "" && $_REQUEST['fps_h'] == ""){
		$cnd_and[] = 'property.footprint_sqft >= '.$_REQUEST['fps_l'];
	}
	//最高専有面積のみ
	elseif ($_REQUEST['fps_h'] != "" && $_REQUEST['fps_l'] == ""){
		$cnd_and[] = 'property.footprint_sqft <= '.$_REQUEST['fps_h'];
	}
	//ワンルームフラグ
	if ($_REQUEST['one'] == "on"){
		$cnd_and[] = 'property.one_room_flg = \'yes\'';
	}
	//2階以上フラグ
	if ($_REQUEST['rank'] == "on"){
		$cnd_and[] = 'property.rank >= 2';
	}
	//一棟売りアパートフラグ
	if ($_REQUEST['pf4'] == "on"){
		$cnd_or[] = 'property.property_flg = \'oneapart\'';
	}
	//賃貸併用住宅フラグ
	if ($_REQUEST['pf7'] == "on"){
		$cnd_or[] = 'property.property_flg = \'join\'';
	}
	//一棟売りマンションフラグ
	if ($_REQUEST['pf5'] == "on"){
		$cnd_or[] = 'property.property_flg = \'onemantion\'';
	}
	//戸建賃貸フラグ
	if ($_REQUEST['pf8'] == "on"){
		$cnd_or[] = 'property.property_flg = \'rent\'';
	}
	//一棟売りビルフラグ
	if ($_REQUEST['pf6'] == "on"){
		$cnd_or[] = 'property.property_flg = \'onebuilding\'';
	}
	//倉庫・工場・その他フラグ
	if ($_REQUEST['pf9'] == "on"){
		$cnd_or[] = 'property.property_flg = \'warehouse\'';
	}
	//最低土地面積＆最高土地面積
	if ($_REQUEST['las_l'] != "" && $_REQUEST['las_h'] != ""){
		$cnd_and[] = 'property.land_area_sqft BETWEEN '.$_REQUEST['las_l'].' AND '.$_REQUEST['las_h'];
	}
	//最低土地面積
	elseif ($_REQUEST['las_l'] != "" && $_REQUEST['las_h'] == ""){
		$cnd_and[] = 'property.land_area_sqft >= '.$_REQUEST['las_l'];
	}
	//最高土地面積
	elseif ($_REQUEST['las_h'] != "" && $_REQUEST['las_l'] == ""){
		$cnd_and[] = 'property.land_area_sqft <= '.$_REQUEST['las_h'];
	}
	//土地フラグ
	if ($_REQUEST['pf11'] == "on"){
		$cnd_or[] = 'property.property_flg = \'land\'';
	}
	//----------物件種別----------

	//----------地域選択----------
	$city_flg = '';		//SQL 

	//千代田区フラグ
	if ($_REQUEST['c1'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 1';
		$city_flg = 'on';
	}
	//品川区フラグ
	if ($_REQUEST['c7'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 7';
		$city_flg = 'on';
	}
	//杉並区フラグ
	if ($_REQUEST['c11'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 11';
		$city_flg = 'on';
	}
	//大東区フラグ
	if ($_REQUEST['c17'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 17';
		$city_flg = 'on';
	}
	//中央区フラグ
	if ($_REQUEST['c2'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 2';
		$city_flg = 'on';
	}
	//太田区フラグ
	if ($_REQUEST['c8'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 8';
		$city_flg = 'on';
	}
	//中野区フラグ
	if ($_REQUEST['c12'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 12';
		$city_flg = 'on';
	}
	//墨田区フラグ
	if ($_REQUEST['c18'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 18';
		$city_flg = 'on';
	}
	//港区フラグ
	if ($_REQUEST['c3'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 3';
		$city_flg = 'on';
	}
	//目黒区フラグ
	if ($_REQUEST['c9'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 9';
		$city_flg = 'on';
	}
	//練馬区フラグ
	if ($_REQUEST['c13'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 13';
		$city_flg = 'on';
	}
	//荒川区フラグ
	if ($_REQUEST['c19'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 19';
		$city_flg = 'on';
	}
	//新宿区フラグ
	if ($_REQUEST['c4'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 4';
		$city_flg = 'on';
	}
	//世田谷区フラグ
	if ($_REQUEST['c10'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 10';
		$city_flg = 'on';
	}
	//豊島区フラグ
	if ($_REQUEST['c14'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 14';
		$city_flg = 'on';
	}
	//江東区フラグ
	if ($_REQUEST['c20'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 20';
		$city_flg = 'on';
	}
	//渋谷区フラグ
	if ($_REQUEST['c5'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 5';
		$city_flg = 'on';
	}
	//板橋区フラグ
	if ($_REQUEST['c15'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 15';
		$city_flg = 'on';
	}
	//足立区フラグ
	if ($_REQUEST['c21'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 21';
		$city_flg = 'on';
	}
	//文京区フラグ
	if ($_REQUEST['c6'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 6';
		$city_flg = 'on';
	}
	//北区フラグ
	if ($_REQUEST['c16'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 16';
		$city_flg = 'on';
	}
	//葛飾区フラグ
	if ($_REQUEST['c22'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 22';
		$city_flg = 'on';
	}
	//江戸川区フラグ
	if ($_REQUEST['c23'] == "on"){
		$cnd_or[] = 'p_address.p_city_id = 23';
		$city_flg = 'on';
	}

	if ($city_flg == 'on'){
		$join[] = 'INNER JOIN p_address ON property.id = p_address.property_id ';
	}
	//----------地域選択----------

	//首都圏路線検索
	$select_railway = $_REQUEST['sr'];
	$select_line = $_REQUEST['sl'.$select_railway];
	if ($select_railway != 0 && $select_line != 0){
		$join[] .= 'INNER JOIN p_access ON property.id = p_access.property_id ';
		$cnd_and[] .= 'p_access.p_railway_id = '.$select_line;
		$railway_flg = 'on';
	}

	//利回り
	if ($_REQUEST['yld'] != 0){
	$cnd_and[] = 'property.yield >= '.$_REQUEST['yld'];
	}

	//----------築年数----------
	//築年月
	if ($_REQUEST['bd'] != ""){
		$cnd_and[] = 'property.built_date >= DATE_SUB(CURDATE(), interval '.$_REQUEST['bd'].' year)';
	}
	//範囲指定無し
	if ($_REQUEST['bd_l'] == "" && $_REQUEST['bd_h'] == ""){
	}
	//最低築年月＆最高築年月
	elseif ($_REQUEST['bd_l'] != "" && $_REQUEST['bd_h'] != ""){
		$cnd_and[] = 'property.built_date BETWEEN DATE_SUB(CURDATE(), interval '.$_REQUEST['bd_h'].' year) 
		AND DATE_SUB(CURDATE(), interval '.$_REQUEST['bd_l'].' year)';
	}
	//最低築年月のみ
	elseif ($_REQUEST['bd_l'] != "" && $_REQUEST['bd_h'] == ""){
		$cnd_and[] = 'property.built_date <= DATE_SUB(CURDATE(), interval '.$_REQUEST['bd_l'].' year)';
	}
	//最高築年月のみ
	elseif ($_REQUEST['bd_l'] == "" && $_REQUEST['bd_h'] != ""){
		$cnd_and[] = 'property.built_date >= DATE_SUB(CURDATE(), interval '.$_REQUEST['bd_h'].' year)';
	}
	//----------築年数----------

	//駅から徒歩時間
	if ($_REQUEST['wm'] != 0){
		//路線検索とJOINが重複するため
		if ($railway_flg != 'on'){
			$join[] = 'INNER JOIN p_access ON property.id = p_access.property_id ';
		}
		$cnd_and[] = 'p_access.walk_minute <= '.$_REQUEST['wm'];
	}

	//----------建物構造----------
	//木造フラグ
	if ($_REQUEST['bs_w'] == "on"){
		$cnd_or[] = 'property.building_structure_flg = \'wood\'';
	}
	//鉄骨造（S造）フラグ
	if ($_REQUEST['bs_s'] == "on"){
		$cnd_or[] = 'property.building_structure_flg = \'s\'';
	}
	//鉄筋コンクリート造（RC造）フラグ
	if ($_REQUEST['bs_rc'] == "on"){
		$cnd_or[] = 'property.building_structure_flg = \'rc\'';
	}
	//鉄骨鉄筋コンクリート造（SRC造）フラグ
	if ($_REQUEST['bs_src'] == "on"){
		$cnd_or[] = 'property.building_structure_flg = \'src\'';
	}
	//----------建物構造----------

	//最低総戸数＆最高総戸数
	if ($_REQUEST['tu_l'] != "" && $_REQUEST['tu_h'] != ""){
		$cnd_and[] = 'property.total_units BETWEEN '.$_REQUEST['tu_l'].' AND '.$_REQUEST['tu_h'];
	}
	//最低総戸数のみ
	elseif ($_REQUEST['tu_l'] != "" && $_REQUEST['tu_h'] == ""){
		$cnd_and[] = 'property.total_units >= '.$_REQUEST['tu_l'];
	}
	//最高総戸数のみ
	elseif ($_REQUEST['tu_h'] != "" && $_REQUEST['tu_l'] == ""){
		$cnd_and[] = 'property.total_units <= '.$_REQUEST['tu_h'];
	}
	//土地権利
	if ($_REQUEST['lr'] != ""){
		$cnd_and[] = 'property.land_rights_flg = "'.$_REQUEST['lr'].'"';
	}
	//画像ありフラグ
	if ($_REQUEST['img'] == "on"){
		$join[] = 'INNER JOIN p_img on property.id = p_img.property_id ';
		//$group_by[] = 'property.id ';
	}
	$sql = make_query($join,$cnd_and,$cnd_or,$group_by,$order_by);
	return $sql;
}

function search_railway(){
	//首都圏路線検索
	$select_railway = $_REQUEST['sr'];
	//$select_line = $_REQUEST['sl'.$select_railway];
	$select_line = $_REQUEST['sl'];
	if ($select_railway != 0 && $select_line != 0){
		$join[] .= 'INNER JOIN p_access ON property.id = p_access.property_id ';
		$cnd_and[] .= 'p_access.p_railway_id = '.$select_line;
		$railway_flg = 'on';
	}
	$sql = make_query($join,$cnd_and,$cnd_or,$group_by,$order_by);
	return $sql;
}

function search_link_city(){
	if($_REQUEST["area"]=="23ku") $id = 0;
	elseif($_REQUEST["area"]=="Center23ku") $id = array(1,2,3,4,5,6);
	elseif($_REQUEST["area"]=="South23ku") $id = array(7,8,9,10);
	elseif($_REQUEST["area"]=="West23ku") $id = array(10,11,12,13,14,15,16);
	elseif($_REQUEST["area"]=="East23ku") $id = array(17,18,19,20,21,22,23);
	elseif($_REQUEST["area"]=="Chiyoda") $id = 1;
	elseif($_REQUEST["area"]=="Chuo") $id = 2;
	elseif($_REQUEST["area"]=="Minato") $id = 3;
	elseif($_REQUEST["area"]=="Shinjuku") $id = 4;
	elseif($_REQUEST["area"]=="Shibuya") $id = 5;
	elseif($_REQUEST["area"]=="Bunkyo") $id = 6;
	elseif($_REQUEST["area"]=="Shinagawa") $id = 7;
	elseif($_REQUEST["area"]=="Ota") $id = 8;
	elseif($_REQUEST["area"]=="Meguro") $id = 9;
	elseif($_REQUEST["area"]=="Setagaya") $id = 10;
	elseif($_REQUEST["area"]=="Suginami") $id = 11;
	elseif($_REQUEST["area"]=="Nakano") $id = 12;
	elseif($_REQUEST["area"]=="Nerima") $id = 13;
	elseif($_REQUEST["area"]=="Toshima") $id = 14;
	elseif($_REQUEST["area"]=="Itabashi") $id = 15;
	elseif($_REQUEST["area"]=="Kita") $id = 16;
	elseif($_REQUEST["area"]=="Daito") $id = 17;
	elseif($_REQUEST["area"]=="Sumida") $id = 18;
	elseif($_REQUEST["area"]=="Arakawa") $id = 19;
	elseif($_REQUEST["area"]=="Koto") $id = 20;
	elseif($_REQUEST["area"]=="Adachi") $id = 21;
	elseif($_REQUEST["area"]=="Katsushika") $id = 22;
	elseif($_REQUEST["area"]=="Edogawa") $id = 23;

	if (is_array($id)) {
		foreach ($id as $tmp_id) {
			$cnd_or[] = 'p_address.p_city_id = '.$tmp_id;
			$i++;
		}
		$join[] = 'INNER JOIN p_address ON property.id = p_address.property_id ';
	}
	elseif($id != 0){
		$cnd_or[] = 'p_address.p_city_id = '.$id;
		$join[] = 'INNER JOIN p_address ON property.id = p_address.property_id ';
	}
	$sql = make_query($join,$cnd_and,$cnd_or,$group_by,$order_by);
	return $sql;
}

function search_link_railway(){
	if($_REQUEST["line"]=="Yamanote") $id = 1;
	elseif($_REQUEST["line"]=="Keihin-Tōhoku") $id = 2;
	elseif($_REQUEST["line"]=="Chuō") $id = 3;
	elseif($_REQUEST["line"]=="Sōbu") $id = 4;
	elseif($_REQUEST["line"]=="Saikyō") $id = 5;
	elseif($_REQUEST["line"]=="Jōban") $id = 6;
	elseif($_REQUEST["line"]=="Tōkaidō") $id = 7;
	elseif($_REQUEST["line"]=="Yokosuka") $id = 8;
	elseif($_REQUEST["line"]=="Keiyō") $id = 9;
	elseif($_REQUEST["line"]=="Utsunomiya") $id = 10;
	elseif($_REQUEST["line"]=="Tōkaidō") $id = 11;
	elseif($_REQUEST["line"]=="Tōhoku") $id = 12;
	elseif($_REQUEST["line"]=="ChuōRapid") $id = 13;
	elseif($_REQUEST["line"]=="Shonan-Shinjuku") $id = 14;
	elseif($_REQUEST["line"]=="Ginza") $id = 15;
	elseif($_REQUEST["line"]=="Marunouchi") $id = 16;
	elseif($_REQUEST["line"]=="Hibiya") $id = 17;
	elseif($_REQUEST["line"]=="Tozai") $id = 18;
	elseif($_REQUEST["line"]=="Chiyoda") $id = 19;
	elseif($_REQUEST["line"]=="Yūrakuchō") $id = 20;
	elseif($_REQUEST["line"]=="Hanzōmon") $id = 21;
	elseif($_REQUEST["line"]=="Namboku") $id = 22;
	elseif($_REQUEST["line"]=="Fukutoshin") $id = 23;
	elseif($_REQUEST["line"]=="Asakusa") $id = 24;
	elseif($_REQUEST["line"]=="Mita") $id = 25;
	elseif($_REQUEST["line"]=="ToeiShinjuku") $id = 26;
	elseif($_REQUEST["line"]=="Ōedo") $id = 27;
	elseif($_REQUEST["line"]=="TodenArakawa") $id = 28;
	elseif($_REQUEST["line"]=="Nippori-Toneri") $id = 29;
	elseif($_REQUEST["line"]=="IkebukuroToshima") $id = 30;
	elseif($_REQUEST["line"]=="Yūrakuchō") $id = 31;
	elseif($_REQUEST["line"]=="SeibuShinjuku") $id = 32;
	elseif($_REQUEST["line"]=="Keiō") $id = 33;
	elseif($_REQUEST["line"]=="Inogashira") $id = 34;
	elseif($_REQUEST["line"]=="New") $id = 35;
	elseif($_REQUEST["line"]=="Tōyoko") $id = 36;
	elseif($_REQUEST["line"]=="Tamagawa") $id = 37;
	elseif($_REQUEST["line"]=="Ōimachi") $id = 38;
	elseif($_REQUEST["line"]=="Denentoshi") $id = 39;
	elseif($_REQUEST["line"]=="Ikegami") $id = 40;
	elseif($_REQUEST["line"]=="Setagaya") $id = 41;
	elseif($_REQUEST["line"]=="Meguro") $id = 42;
	elseif($_REQUEST["line"]=="Tōjō") $id = 43;
	elseif($_REQUEST["line"]=="IsesakiDaishi") $id = 44;
	elseif($_REQUEST["line"]=="Kameido") $id = 45;
	elseif($_REQUEST["line"]=="Odakyū") $id = 46;
	elseif($_REQUEST["line"]=="KeikyūMain") $id = 47;
	elseif($_REQUEST["line"]=="Airport") $id = 48;
	elseif($_REQUEST["line"]=="KeiseiMain") $id = 49;
	elseif($_REQUEST["line"]=="Oshiage") $id = 50;
	elseif($_REQUEST["line"]=="Kanamachi") $id = 51;
	elseif($_REQUEST["line"]=="NaritaSkyAccess") $id = 52;
	elseif($_REQUEST["line"]=="Rinkai") $id = 53;
	elseif($_REQUEST["line"]=="TōkyōMonorail") $id = 54;
	elseif($_REQUEST["line"]=="Yurikamome") $id = 55;
	elseif($_REQUEST["line"]=="TsukubaExpress") $id = 56;
	elseif($_REQUEST["line"]=="SaitamaRapid") $id = 57;
	elseif($_REQUEST["line"]=="HokusōHokusō") $id = 58;

	$join[] .= 'INNER JOIN p_access ON property.id = p_access.property_id ';
	$cnd_and[] .= 'p_access.p_railway_id = '.$id;
	$sql = make_query($join,$cnd_and,$cnd_or,$group_by,$order_by);
	return $sql;
}

function make_query($join,$cnd_and,$cnd_or,$group_by,$order_by,$order_by){
	//----------クエリ構築----------
	//画像ありフラグOFF
	if ($_REQUEST['img'] != "on"){
		$join[] = 'LEFT JOIN p_img on property.id = p_img.property_id ';
		$group_by[] = 'property.id ';
	}
	//画像ありフラグON
	else{
		$group_by[] = 'property.id ';
	}

	$sql = 'SELECT *, COUNT(display) AS image_num FROM property ';

	//JOINするとき
	if ($join != ''){
		foreach ($join as $tmp_join) {
			$sql .= $tmp_join;
		}
	}
	if ($cnd_and != '' || $cnd_or != ''){
		$sql .= 'WHERE ';
	}
	//AND条件があるとき
	$count = count($cnd_and);
	$loop = 0;
	if ($cnd_and != ''){
		foreach ($cnd_and as $and){
			$loop++;
			$sql .= $and;
			if($count != $loop){
				$sql .= " AND ";
			}
		}
	}
	//OR条件があるとき
	$count = count($cnd_or);
	$loop = 0;
	if ($cnd_or != ''){
		if ($cnd_and != ''){
			$sql .= " AND ";
		}
		$sql .= "(";
		foreach ($cnd_or as $or){
			$loop++;
			$sql .= $or;
			if($count != $loop){
				$sql .= " OR ";
			}
		}
		$sql .= ")";
	}
	//GROUP BYするとき
	$count = count($group_by);
	$loop = 0;
	if ($group_by != ''){
		$sql .= " GROUP BY ";
		foreach ($group_by as $tmp_group_by) {
			$loop++;
			$sql .= $tmp_group_by;
			if($count != $loop){
				$sql .= ", ";
			}
		}
	}
	//ORDER BYするとき
	global $order_by;
	$count = count($order_by);
	$loop = 0;
	if ($order_by != ''){
		$sql .= " ORDER BY ";
		foreach ($order_by as $tmp_order_by) {
			$loop++;
			$sql .= $tmp_order_by;
			if($count != $loop){
				$sql .= ", ";
			}
		}
	}
	//----------クエリ構築----------
	return $sql;
}

function get_release_infomation($limit, $page, $sql) {

	$offset = (((int)$page - 1) * (int)$limit);

	//SQL
	$sql .= ' LIMIT '.$limit.' OFFSET '.$offset;
	//print $sql.'<br />';

	//SQL を実行
	global $mysqli;
	if ($mysqli->connect_errno){
		echo "Failed to connect to MySQL: " . $mysqli->connect_error;
		exit;
	}
	$result = mysqli_query($mysqli,$sql);
	if (!$result) {
    	die('クエリーが失敗しました。'.mysqli_error());
	}

	//表示件数
	//検索結果が０件なら開始の数字に０を
	if (mysqli_num_rows($result) == 0) $start_num = 0;
	else $start_num = $offset + 1;
	$end_num = $offset + mysqli_num_rows($result);
	global $smarty;
	$smarty->assign('start_num', $start_num);
	$smarty->assign('end_num', $end_num);

	return $result;
}

?>