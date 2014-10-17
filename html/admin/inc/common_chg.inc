<?php
/*---- 物件種別変換 ----*/
function property_flg_chg($property_flg_b) {
  $property_flg_b = str_replace(" ", "", $property_flg_b);

  if(preg_match("/^ONE$/", $property_flg_b)) {
    $property_flg_a = "investment";
  }else if(preg_match("/^TPO$/", $property_flg_b)){
    $property_flg_a = "selling";
  }else if(preg_match("/^APT$/", $property_flg_b)){
    $property_flg_a = "oneapart";
  }else if(preg_match("/^MAN$/", $property_flg_b)){
    $property_flg_a = "onemantion";
  }else if(preg_match("/^BUL$/", $property_flg_b)){
    $property_flg_a = "onebuilding";
  }else if(preg_match("/^ETC$/", $property_flg_b)){
    $property_flg_a = "join";
  }else if(preg_match("/^KOD$/", $property_flg_b)){
    $property_flg_a = "rent";
  }else if(preg_match("/^SKO$/", $property_flg_b)){
    $property_flg_a = "warehouse";
  }else if(preg_match("/^HTL$/", $property_flg_b)){
    $property_flg_a = "hotel";
  }else if(preg_match("/^LND$/", $property_flg_b)){
    $property_flg_a = "land";
  }else{
    $property_flg_a = "blank";
  }

  return $property_flg_a;
}

/*---- 価格変換 ----*/
function price_chg($price_b, $property_flg_a) {
  /* カウントデータ初期化 */
  global $c_price_num;

  if(strpos($price_b, ".") !== false) {
    $price_b = str_replace(" ", "", $price_b);
    $sen = explode(".", $price_b, 2);
    $sen = explode("万", $sen[1], 2);
    $num = 0;
    $num = strlen($sen[0]);
    if($num == 1) $price_b = str_replace("万円", "000", $price_b);
    else if($num == 2) $price_b = str_replace("万円", "00", $price_b);
    else if($num == 3) $price_b = str_replace("万円", "0", $price_b);
    else if($num == 4) $price_b = str_replace("万円", "", $price_b);
    $price_b = str_replace(".", "", $price_b);
    $price_b = str_replace(",", "", $price_b);
  }else{
    $price_b = str_replace(" ", "", $price_b);
    $price_b = str_replace(",", "", $price_b);
    $price_b = str_replace("万円", "0000", $price_b);
  }
  if(strpos($price_b, "億") !== false){
    $oku = explode("億", $price_b, 2);
    $num = 0;
    $num = strlen($oku[1]);
    if($num == 5) $price_b = str_replace("億", "000", $price_b);
    else if($num == 6) $price_b = str_replace("億", "00", $price_b);
    else if($num == 7) $price_b = str_replace("億", "0", $price_b);
    else if($num == 8) $price_b = str_replace("億", "", $price_b);
  }

  /* カウントデータ投入 */
  if(preg_match("/^investment$/", $property_flg_a) && $price_b < 7000000){
    $c_price_num['investment']++;
    $c_price_num['investment_700u']++;
  }else if(preg_match("/^investment$/", $property_flg_a) && $price_b >= 7000000 && $price_b < 10000000){
    $c_price_num['investment']++;
    $c_price_num['investment_700o']++;
  }else if(preg_match("/^investment$/", $property_flg_a) && $price_b >= 10000000){
    $c_price_num['investment']++;
    $c_price_num['investment_1000o']++;
  }else if(preg_match("/^selling$/", $property_flg_a)){
    $c_price_num['selling']++;
  }else if(preg_match("/^oneapart$/", $property_flg_a) && $price_b < 30000000){
    $c_price_num['oneapart']++;
    $c_price_num['oneapart_3000u']++;
  }else if(preg_match("/^oneapart$/", $property_flg_a) && $price_b >= 30000000 && $price_b < 50000000){
    $c_price_num['oneapart']++;
    $c_price_num['oneapart_3000o']++;
  }else if(preg_match("/^oneapart$/", $property_flg_a) && $price_b >= 50000000 && $price_b < 80000000){
    $c_price_num['oneapart']++;
    $c_price_num['oneapart_5000o']++;
  }else if(preg_match("/^oneapart$/", $property_flg_a) && $price_b >= 80000000 && $price_b < 80000000){
    $c_price_num['oneapart']++;
    $c_price_num['oneapart_8000o']++;
  }else if(preg_match("/^oneapart$/", $property_flg_a) && $price_b >= 100000000){
    $c_price_num['oneapart']++;
    $c_price_num['oneapart_10000o']++;
  }else if(preg_match("/^onemantion$/", $property_flg_a) && $price_b < 100000000){
    $c_price_num['onemantion']++;
    $c_price_num['onemantion_10000u']++;
  }else if(preg_match("/^onemantion$/", $property_flg_a) && $price_b >= 100000000 && $price_b < 200000000){
    $c_price_num['onemantion']++;
    $c_price_num['onemantion_10000o']++;
  }else if(preg_match("/^onemantion$/", $property_flg_a) && $price_b >= 200000000){
    $c_price_num['onemantion']++;
    $c_price_num['onemantion_20000o']++;
  }else if(preg_match("/^onebuilding$/", $property_flg_a) && $price_b < 100000000){
    $c_price_num['onebuilding']++;
    $c_price_num['onebuilding_10000u']++;
  }else if(preg_match("/^onebuilding$/", $property_flg_a) && $price_b >= 100000000 && $price_b < 300000000){
    $c_price_num['onebuilding']++;
    $c_price_num['onebuilding_10000o']++;
  }else if(preg_match("/^onebuilding$/", $property_flg_a) && $price_b >= 300000000){
    $c_price_num['onebuilding']++;
    $c_price_num['onebuilding_30000o']++;
  }else if(preg_match("/^join$/", $property_flg_a)){
    $c_price_num['join']++;
  }else if(preg_match("/^rent$/", $property_flg_a)){
    $c_price_num['rent']++;
  }else if(preg_match("/^warehouse$/", $property_flg_a)){
    $c_price_num['warehouse']++;
  }else if(preg_match("/^hotel$/", $property_flg_a)){
    $c_price_num['hotel']++;
  }else if(preg_match("/^land$/", $property_flg_a)){
    $c_price_num['land']++;
  }

  return $price_b;
}

/*---- 利回り変換 ----*/
function yield_chg($yield_b) {
  $yield_b = str_replace("%", "", $yield_b);
  $yield_b = str_replace(" ", "", $yield_b);

  return $yield_b;
}

/*---- 年収/月収変換 ----*/
function income_chg($income_b) {
  global $annual_income;
  global $monthly_income;

  $income_b = explode("/", $income_b, 2);
  $annual_income = $income_b[0];
  $monthly_income = $income_b[1];

  /* 年収変換 */
  if(strpos($annual_income, ".") !== false) {
    $annual_income = str_replace(" ", "", $annual_income);
    $sen = explode(".", $annual_income, 2);
    $sen = explode("万", $sen[1], 2);
    $num = 0;
    $num = strlen($sen[0]);
    if($num == 1) $annual_income = str_replace("万円", "000", $annual_income);
    else if($num == 2) $annual_income = str_replace("万円", "00", $annual_income);
    else if($num == 3) $annual_income = str_replace("万円", "0", $annual_income);
    else if($num == 4) $annual_income = str_replace("万円", "", $annual_income);
    $annual_income = str_replace(".", "", $annual_income);
    $annual_income = str_replace(",", "", $annual_income);
  }else{
    $annual_income = str_replace(" ", "", $annual_income);
    $annual_income = str_replace(",", "", $annual_income);
    $annual_income = str_replace("万円", "0000", $annual_income);
  }
  if(strpos($annual_income, "億") !== false){
    $oku = explode("億", $annual_income, 2);
    $num = 0;
    $num = strlen($oku[1]);
    if($num == 5) $annual_income = str_replace("億", "000", $annual_income);
    else if($num == 6) $annual_income = str_replace("億", "00", $annual_income);
    else if($num == 7) $annual_income = str_replace("億", "0", $annual_income);
    else if($num == 8) $annual_income = str_replace("億", "", $annual_income);
  }

  if(strpos($monthly_income, ".") !== false) {
    $monthly_income = str_replace(" ", "", $monthly_income);
    $sen = explode(".", $monthly_income, 2);
    $sen = explode("万", $sen[1], 2);
    $num = 0;
    $num = strlen($sen[0]);
    if($num == 1) $monthly_income = str_replace("万円", "000", $monthly_income);
    else if($num == 2) $monthly_income = str_replace("万円", "00", $monthly_income);
    else if($num == 3) $monthly_income = str_replace("万円", "0", $monthly_income);
    else if($num == 4) $monthly_income = str_replace("万円", "", $monthly_income);
    $monthly_income = str_replace(".", "", $monthly_income);
    $monthly_income = str_replace(",", "", $monthly_income);
    $monthly_income = str_replace("万円", "000", $monthly_income);
  }else{
    $monthly_income = str_replace(" ", "", $monthly_income);
    $monthly_income = str_replace(",", "", $monthly_income);
    $monthly_income = str_replace("万円", "0000", $monthly_income);
  }
  if(strpos($monthly_income, "億") !== false){
    $oku = explode("億", $monthly_income, 2);
    $num = 0;
    $num = strlen($oku[1]);
    if($num == 5) $monthly_income = str_replace("億", "000", $monthly_income);
    else if($num == 6) $monthly_income = str_replace("億", "00", $monthly_income);
    else if($num == 7) $monthly_income = str_replace("億", "0", $monthly_income);
    else if($num == 8) $monthly_income = str_replace("億", "", $monthly_income);
  }
}

/*---- 築年数変換----*/
function built_date_chg($built_date_b) {
  $built_date_b  = str_replace("年", "-", $built_date_b);
  $built_date_b  = str_replace("月", "", $built_date_b);
  $built_date_b  = str_replace(" ", "", $built_date_b);
  $built_date_b .= "-1";

  return $built_date_b;
}

/*---- 建物構造変換 ----*/
function building_structure_chg($building_structure_b, $structure_flg) {
  // 建物構造取得
  $structure_flg = str_replace(" ", "", $structure_flg);
  if($structure_flg == "木造") $building_structure_a = "wood";
  else if($structure_flg == "S造") $building_structure_a = "s";
  else if($structure_flg == "RC造") $building_structure_a = "rc";
  else if($structure_flg == "SRC造") $building_structure_a = "src";
  else if($structure_flg == "その他"){
    if(strpos($building_structure_b, "その他") !== false){
      $building_structure_a = "rc";
    }else if(strpos($building_structure_b, "木造") !== false
         && strpos($building_structure_b, "鉄骨") == false
         && strpos($building_structure_b, "鉄筋") == false
         && strpos($building_structure_b, "S") == false
         && strpos($building_structure_b, "RC") == false
         && strpos($building_structure_b, "SRC") == false){
      $building_structure_a = "wood";      
    }
    else{
      $building_structure_a = "rc";
    }
  }
  return $building_structure_a;
}

/*---- 階数、総階数、地下階数、戸数変換 ----*/
function rank_units_chg($building_structure_b, $rank_b, $total_units_b) {
  global $rank_a;
  global $total_rank_a;
  global $total_units_a;
  global $basement_rank_a;

  // 階数、総階数取得
  if(strpos($rank_b, "/") !== false) {
    $tmp = explode("/", $rank_b, 2);
    
    if(strpos($tmp[0], "B") !== false) {
      $tmp[0] = str_replace("B", "", $tmp[0]);
      $rank_a = str_replace(" ", "", $tmp[0]);
      $rank_a = -$rank_a;
    }else{
      $rank_a = str_replace(" ", "", $tmp[0]);
    }
    $tmp = explode("階建", $tmp[1], 2);
    $total_rank_a = str_replace(" ", "", $tmp[0]);
  }else if(strpos($rank_b, "階建") !== false) {
    $tmp = explode("階建", $rank_b, 2);
    $total_rank_a = str_replace(" ", "", $tmp[0]);
  }

  // 総戸数取得
  if($total_units_b) {
    $total_units_b = str_replace("戸", "", $total_units_b);
    $total_units_a = str_replace(" ", "", $total_units_b);
  }

  // 地下階数取得
  if(strpos($building_structure_b, "（地下") !== false) {
    $tmp = explode("（地下", $building_structure_b, 2);
    $tmp = explode("階）", $tmp[1], 2);
    $basement_rank_a = str_replace(" ", "", $tmp[0]);
    $basement_rank_a = -$basement_rank_a;
  }
}

/*---- 土地面積(私道もあれば含める)変換 ----*/
function land_area_chg($land_area_b) {
  global $land_area_sqm_a;
  global $land_area_sqft_a;
  global $private_road_sqm_a;
  global $private_road_sqft_a;

  // 土地面積取得
  $tmp = explode("m2", $land_area_b, 2);
  $land_area_sqm_a    = $tmp[0];
  $land_area_sqft_a = $tmp[0] / 0.0929;
  $land_area_sqft_a = round($land_area_sqft_a,0);  // 小数点切り捨て
  $land_area_sqm_a = str_replace(" ", "", $land_area_sqm_a);
  $land_area_sqft_a = str_replace(" ", "", $land_area_sqft_a);

  // 私道があった場合取得
  if(strpos($land_area_b, "私道：") !== false) {
    if(strpos($land_area_b, "：0.0m2あり") !== false) {
      return;
    }else{
      $tmp = explode("私道：", $land_area_b, 2);
      $tmp = explode("m2あり", $tmp[1], 2);
      $private_road_sqm_a = $tmp[0];
      $private_road_sqft_a = $tmp[0] / 0.0929;
      $private_road_sqft_a = round($private_road_sqft_a,0);  // 小数点切り捨て
      $private_road_sqm_a = str_replace(" ", "", $private_road_sqm_a);
      $private_road_sqft_a = str_replace(" ", "", $private_road_sqft_a);
    }
  }
}

/*---- 土地権利変換 ----*/
function land_rights_chg($land_rights_b) {
  if(strpos($land_rights_b, "所有権") !== false) {
    $land_rights_b = "aaa";
  }else{
    $land_rights_b = "bbb";
  }

  return $land_rights_b;
}

/*---- 専有面積(バルコニーもあれば含める)変換 ----*/
function footprint_square_chg($footprint_b) {
  global $footprint_sqm_a;
  global $footprint_sqft_a;
  global $balcony_sqm_a;
  global $balcony_sqft_a;

  // 専有面積取得
  $tmp = explode("m2", $footprint_b, 2);
  $footprint_sqm_a    = $tmp[0];
  $footprint_sqft_a = $tmp[0] / 0.0929;
  $footprint_sqft_a = round($footprint_sqft_a,0);  // 小数点切り捨て
  $footprint_sqm_a = str_replace(" ", "", $footprint_sqm_a);
  $footprint_sqft_a = str_replace(" ", "", $footprint_sqft_a);

  // バルコニーがあった場合取得
  if(strpos($footprint_b, "バルコニー") !== false) {
    $tmp = explode("バルコニー ", $footprint_b, 2);
    $tmp = explode("m2）", $tmp[1], 2);
    if(strpos($footprint_b, "なし") !== false || strpos($footprint_b, "0.00") !== false){
      return;
    }else{
      $balcony_sqm_a = $tmp[0];
      $balcony_sqft_a = $tmp[0] / 0.0929;
      $balcony_sqft_a = round($balcony_sqft_a,0);  // 小数点切り捨て
    }
    $balcony_sqm_a = str_replace(" ", "", $balcony_sqm_a);
    $balcony_sqft_a = str_replace(" ", "", $balcony_sqft_a);
  }
}

/*---- 間取り変換 ----*/
function plan_chg($plan_b) {
  global $one_room_flg_a;

  // 1ルームフラグ取得
  if(preg_match("/^1R$/", $plan_b)) $one_room_flg_a = "yes";
  else if(strpos($plan_b, "R東") !== false && strpos($plan_b, "×") == false) $one_room_flg_a = "yes";
  else if(strpos($plan_b, "R西") !== false && strpos($plan_b, "×") == false) $one_room_flg_a = "yes";
  else if(strpos($plan_b, "R南") !== false && strpos($plan_b, "×") == false) $one_room_flg_a = "yes";
  else if(strpos($plan_b, "R北") !== false && strpos($plan_b, "×") == false) $one_room_flg_a = "yes";
  else $one_room_flg_a = "no";


  return $plan_b;
}

/*---- 管理費・修繕積立変換 ----*/
function management_fee_chg($management_fee_b) {
  global $management_fee_a;
  global $maintenance_fee_a;

  $tmp = explode("/", $management_fee_b, 2);
  $mane_tmp  = explode("円", $tmp[0], 2);
  $management_fee_a = $mane_tmp[0];
  $main_tmp  = explode("円", $tmp[1], 2);
  $maintenance_fee_a = $main_tmp[0];
  $management_fee_a = str_replace(",", "", $management_fee_a);
  $maintenance_fee_a = str_replace(",", "", $maintenance_fee_a);
  $management_fee_a = str_replace(" ", "", $management_fee_a);
  $maintenance_fee_a = str_replace(" ", "", $maintenance_fee_a);
}

/*---- 管理方式変換 ----*/
function management_flg_chg($management_flg_b) {
  $management_flg_b = str_replace(" ", "", $management_flg_b);
  if(preg_match("/^全部委託$/", $management_flg_b)) $management_flg_b = "all";
  else if(preg_match("/^一部委託$/", $management_flg_b)) $management_flg_b = "part";
  else if(preg_match("/^自主管理$/", $management_flg_b)) $management_flg_b = "indep";

  return $management_flg_b;
}

/*---- 建物面積(自由記入項目もあれば含める)変換 ----*/
function building_area_chg($building_area_b) {
  global $building_area_sqm_a;
  global $building_area_sqft_a;
  global $building_area_free_a;

 // 建物面積取得
  $tmp = explode("m2", $building_area_b, 2);
  $building_area_sqm_a  = $tmp[0];
  $building_area_sqft_a = $tmp[0] / 0.0929;
  $building_area_sqft_a = round($building_area_sqft_a,0);  // 小数点切り捨て
  $building_area_sqm_a = str_replace(" ", "", $building_area_sqm_a);
  $building_area_sqft_a = str_replace(" ", "", $building_area_sqft_a);

  // 自由記入項目があった場合取得
  if(strpos($building_area_b, "階") !== false) {
    $tmp = explode("】", $building_area_b, 2);
    if(strpos($tmp[1], "建物") !== false || strpos($tmp[1], "面積") !== false || strpos($tmp[1], "共") !== false){
      return;
    }
    $building_area_free_a = mb_convert_kana($tmp[1], "a", "UTF-8");
    $building_area_free_a = str_replace(":", " ", $building_area_free_a);
    $building_area_free_a = str_replace("：", " ", $building_area_free_a);
    $building_area_free_a = str_replace("各", "All ", $building_area_free_a);
    $building_area_free_a = str_replace("階", "F ", $building_area_free_a);
    $building_area_free_a = str_replace("m2", "sqm ", $building_area_free_a);
    $building_area_free_a = str_replace("㎡", "sqm ", $building_area_free_a);
    $building_area_free_a = str_replace("ヘイベイ", "sqm ", $building_area_free_a);
    $building_area_free_a = str_replace("～", "~", $building_area_free_a);
    $building_area_free_a = str_replace("地下", "B", $building_area_free_a);
    $building_area_free_a = str_replace("・", ",", $building_area_free_a);
    $building_area_free_a = str_replace("／", " / ", $building_area_free_a);
    $building_area_free_a = str_replace("その他", "other ", $building_area_free_a);
    # 日本語削除
    $building_area_free_a = preg_replace("/[^\x01-\x7E]/", "", $building_area_free_a);
  }else if(strpos($building_area_b, "F") !== false) {
    $tmp = explode("】", $building_area_b, 2);
    if(strpos($tmp[1], "建物") !== false || strpos($tmp[1], "面積") !== false || strpos($tmp[1], "共") !== false){
      return;
    }
    $building_area_free_a = mb_convert_kana($tmp[1], "a", "UTF-8");
    $building_area_free_a = str_replace(":", " ", $building_area_free_a);
    $building_area_free_a = str_replace("：", " ", $building_area_free_a);
    $building_area_free_a = str_replace("各", "All ", $building_area_free_a);
    $building_area_free_a = str_replace("F", "F", $building_area_free_a);
    $building_area_free_a = str_replace("Ｆ", "F", $building_area_free_a);
    $building_area_free_a = str_replace("〜", "~", $building_area_free_a);
    $building_area_free_a = str_replace("地下", "B", $building_area_free_a);
    $building_area_free_a = str_replace("・", ",", $building_area_free_a);
    $building_area_free_a = str_replace("その他", "other ", $building_area_free_a);
    if(strpos($building_area_b, "/") == false) {
      $building_area_free_a = str_replace("m2", "sqm / ", $building_area_free_a);
      $building_area_free_a = str_replace("㎡", "sqm / ", $building_area_free_a);
      $building_area_free_a = rtrim($building_area_free_a, " / "); // 最後の" / "を除去
    }else{
      $building_area_free_a = str_replace("m2", "sqm ", $building_area_free_a);
      $building_area_free_a = str_replace("㎡", "sqm ", $building_area_free_a);
    }
    # 日本語削除
    $building_area_free_a = preg_replace("/[^\x01-\x7E]/", "", $building_area_free_a);
  }
}

/*---- 建ペイ率・容積率変換 ----*/
function ratio_chg($ratio_b) {
  global $building_to_land_ratio_a;
  global $floor_area_ratio;

  // 建ペイ率取得
  $tmp = explode("/", $ratio_b, 2);
  $building_to_land_ratio_a = str_replace(" ", "", $tmp[0]);
  $building_to_land_ratio_a = str_replace("％", "", $building_to_land_ratio_a);
  // 容積率取得
  $tmp = explode("％", $tmp[1], 2);
  $floor_area_ratio = str_replace(" ", "", $tmp[0]);
}

/*----用途地域変換 ----*/
function use_districts_chg($use_districts_b) {
  if(strpos($use_districts_b, "第一種住居") !== false) $use_districts_b = str_replace("第一種住居", "ccc", $use_districts_b);
  if(strpos($use_districts_b, "第一種低住専") !== false) $use_districts_b = str_replace("第一種低住専", "ddd", $use_districts_b);
  if(strpos($use_districts_b, "第一種中高住専") !== false) $use_districts_b = str_replace("第一種中高住専", "eee", $use_districts_b);
  if(strpos($use_districts_b, "第二種住居") !== false) $use_districts_b = str_replace("第二種住居", "fff", $use_districts_b);
  if(strpos($use_districts_b, "第二種低住専") !== false) $use_districts_b = str_replace("第二種低住専", "ggg", $use_districts_b);
  if(strpos($use_districts_b, "第二種中高住専") !== false) $use_districts_b = str_replace("第二種中高住専", "hhh", $use_districts_b);
  if(strpos($use_districts_b, "工業専用") !== false) $use_districts_b = str_replace("工業専用", "lll", $use_districts_b);
  if(strpos($use_districts_b, "準住居") !== false) $use_districts_b = str_replace("準住居", "iii", $use_districts_b);
  if(strpos($use_districts_b, "準工業") !== false) $use_districts_b = str_replace("準工業", "jjj", $use_districts_b);
  if(strpos($use_districts_b, "近隣商業") !== false) $use_districts_b = str_replace("近隣商業", "zzz", $use_districts_b);
  if(strpos($use_districts_b, "工業") !== false) $use_districts_b = str_replace("工業", "kkk", $use_districts_b);
  if(strpos($use_districts_b, "宅地") !== false) $use_districts_b = str_replace("宅地", "aaa", $use_districts_b);
  if(strpos($use_districts_b, "商業") !== false) $use_districts_b = str_replace("商業", "bbb", $use_districts_b);
  if(strpos($use_districts_b, "指定なし") !== false) $use_districts_b = str_replace("指定なし", "blank", $use_districts_b);

  return $use_districts_b;
}

/*---- 現況変換 ----*/
function current_stat_flg_chg($current_stat_flg_b) {
  $current_stat_flg_b = str_replace(" ", "", $current_stat_flg_b);
  if(preg_match("/^賃貸中（満室）$/", $current_stat_flg_b)) $current_stat_flg_b = "full";
  else if(preg_match("/^賃貸中$/", $current_stat_flg_b)) $current_stat_flg_b = "rent";
  else if(preg_match("/^賃貸中（一部）$/", $current_stat_flg_b)) $current_stat_flg_b = "rent";
  else if(preg_match("/^空室$/", $current_stat_flg_b)) $current_stat_flg_b = "vacancy";
  else if(preg_match("/^未完成$/", $current_stat_flg_b)) $current_stat_flg_b = "undone";
  else if(preg_match("/^更地$/", $current_stat_flg_b)) $current_stat_flg_b = "vacant";
  else if(preg_match("/^古家あり$/", $current_stat_flg_b)) $current_stat_flg_b = "old";
  else if(preg_match("/^駐車場$/", $current_stat_flg_b)) $current_stat_flg_b = "parking";
  else $current_stat_flg_b = "other";

  return $current_stat_flg_b;
}

/*---- 引渡時期変換 ----*/
function delivery_time_chg($delivery_time_b) {
  $delivery_time_b = str_replace(" ", "", $delivery_time_b);
  if(preg_match("/^即時$/", $delivery_time_b)) $delivery_time_b = "promptly";
  else if(preg_match("/^相談$/", $delivery_time_b)) $delivery_time_b = "consultation";
  else if(preg_match("/^完成後引渡し$/", $delivery_time_b)) $delivery_time_b = "after";
  else $delivery_time_b = "consultation";

  return $delivery_time_b;
}
?>