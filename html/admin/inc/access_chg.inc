<?php

/* 交通変換 */
function access_chg($access_b) {
  global $access_data_a;     // 路線IDと徒歩時間を格納した二次元配列
  $access_data_a = array();
  global $c_railway_num;

  $access_b = str_replace("JR山手線", "<br>JR Yamanote Line", $access_b);
  $access_b = str_replace("JR京浜東北線・根岸線", "<br>JR Keihin-Tōhoku Line", $access_b);
  $access_b = str_replace("JR中央線本線", "<br>JR Chuō Line(Rapid)", $access_b);
  $access_b = str_replace("JR中央線", "<br>JR Chuō Line", $access_b);
  $access_b = str_replace("JR総武線", "<br>JR Sōbu Line", $access_b);
  $access_b = str_replace("JR埼京線・川越線", "<br>JR Saikyō Line", $access_b);
  $access_b = str_replace("JR常磐線", "<br>JR Jōban Line", $access_b);
  $access_b = str_replace("JR東海道線", "<br>JR Tōkaidō Line", $access_b);
  $access_b = str_replace("JR横須賀線", "<br>JR Yokosuka Line", $access_b);
  $access_b = str_replace("JR京葉線", "<br>JR Keiyō Line", $access_b);
  $access_b = str_replace("JR武蔵野線", "<br>JR Musashino Line", $access_b);
  $access_b = str_replace("JR宇都宮線（東北線）", "<br>JR Utsunomiya Line(Tōhoku Line)", $access_b);
  $access_b = str_replace("JR東海道・山陽新幹線", "<br>JR Tōkaidō Shinkansen", $access_b);
  $access_b = str_replace("JR東北新幹線", "<br>JR Tōhoku Sinkansen", $access_b);
  $access_b = str_replace("JR湘南新宿ライン", "<br>JR Shonan-Shinjuku Line", $access_b);
  $access_b = str_replace("銀座線", "<br>Tōkyō Metro Ginza Line", $access_b);
  $access_b = str_replace("丸ノ内線", "<br>Tōkyō Metro Marunouchi Line", $access_b);
  $access_b = str_replace("日比谷線", "<br>Tōkyō Metro Hibiya Line", $access_b);
  $access_b = str_replace("東西線", "<br>Tōkyō Metro Tōzai Line", $access_b);
  $access_b = str_replace("千代田線", "<br>Tōkyō Metro Chiyoda Line", $access_b);
  $access_b = str_replace("西武有楽町線", "<br>Seibu Yūrakuchō Line", $access_b);
  $access_b = str_replace("有楽町線", "<br>Tōkyō Metro Yūrakuchō Line", $access_b);
  $access_b = str_replace("半蔵門線", "<br>Tōkyō Metro Hanzōmon Line", $access_b);
  $access_b = str_replace("南北線", "<br>Tōkyō Metro Namboku Line", $access_b);
  $access_b = str_replace("副都心線", "<br>Tōkyō Metro Fukutoshin Line", $access_b);
  $access_b = str_replace("都営浅草線", "<br>Toei Asakusa Line", $access_b);
  $access_b = str_replace("都営三田線", "<br>Toei Mita Line", $access_b);
  $access_b = str_replace("都営新宿線 ", "<br>Toei Shinjuku Line", $access_b);
  $access_b = str_replace("都営大江戸線", "<br>Toei Ōedo Line", $access_b);
  $access_b = str_replace("都電荒川線", "<br>Toden Arakawa Line", $access_b);
  $access_b = str_replace("日暮里・舎人ライナー", "<br>Nippori-Toneri Liner", $access_b);
  $access_b = str_replace("西武池袋・豊島線", "<br>Seibu Ikebukuro Line, Toshima Line", $access_b);
  $access_b = str_replace("西武新宿線", "<br>Seibu Shinjuku Line", $access_b);
  $access_b = str_replace("京王線", "<br>Keiō Line", $access_b);
  $access_b = str_replace("京王井の頭線", "<br>Keiō Inogashira Line", $access_b);
  $access_b = str_replace("京王新線", "<br>Keiō New Line", $access_b);
  $access_b = str_replace("東急東横線", "<br>Tōkyū Tōyoko Line", $access_b);
  $access_b = str_replace("東急多摩川線", "<br>Tōkyū Tamagawa Line", $access_b);
  $access_b = str_replace("東急大井町線", "<br>Tōkyū Ōimachi Line", $access_b);
  $access_b = str_replace("東急田園都市線", "<br>Tōkyū Denentoshi Line", $access_b);
  $access_b = str_replace("東急池上線", "<br>Tōkyū Ikegami Line", $access_b);
  $access_b = str_replace("東急世田谷線", "<br>Tōkyū Setagaya Line", $access_b);
  $access_b = str_replace("東急目黒線", "<br>Tōkyū Meguro Line", $access_b);
  $access_b = str_replace("東武東上線", "<br>Tōbu Tōjō Line", $access_b);
  $access_b = str_replace("東武伊勢崎・大師線", "<br>Tōbu Isesaki Line・Daishi Line", $access_b);
  $access_b = str_replace("東武亀戸線", "<br>Tōbu Kameido Line", $access_b);
  $access_b = str_replace("小田急線", "<br>Odakyū Line", $access_b);
  $access_b = str_replace("京浜急行線", "<br>Keikyū Main Line", $access_b);
  $access_b = str_replace("京急空港線", "<br>Keikyū Airport Line", $access_b);
  $access_b = str_replace("京成本線", "<br>Keisei main Line", $access_b);
  $access_b = str_replace("京成押上線", "<br>Keisei Oshiage Line", $access_b);
  $access_b = str_replace("京成金町線", "<br>Keisei Kanamachi Line", $access_b);
  $access_b = str_replace("成田スカイアクセス", "<br>Keisei Narita Sky Access Line", $access_b);
  $access_b = str_replace("りんかい線", "<br>Rinkai Line", $access_b);
  $access_b = str_replace("東京モノレール", "<br>Tōkyō Monorail", $access_b);
  $access_b = str_replace("ゆりかもめ", "<br>Yurikamome", $access_b);
  $access_b = str_replace("つくばエクスプレス", "<br>Tsukuba Express", $access_b);
  $access_b = str_replace("埼玉高速線", "<br>Saitama Rapid Railway Line", $access_b);
  $access_b = str_replace("北総線", "<br>Hokusō Railway Hokusō Line", $access_b);
  
  $br_cnt = substr_count($access_b, "<br>") + 1;
  $tmp = explode("<br>", $access_b, $br_cnt);
  $access_b = "";
  for ($cnt = 1, $cnt2 = 0; $cnt < count($tmp); $cnt++) {
    // 例外 武蔵野線
    if(strpos($tmp[$cnt], "JR Musashino Line") !== false) {
      $tmp[$cnt] = str_replace("JR Musashino Line", "<br>JR Musashino Line", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "JR Yamanote Line") !== false) {
      $tmp[$cnt] = str_replace("JR Yamanote Line", "<br>JR Yamanote Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新大久保駅", "Shin-Ōkubo Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("高田馬場駅", "Takadanobaba Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西日暮里駅", "Nishi-Nippori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大崎駅", "Ōsaki Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("五反田駅", "Gotanda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("５反田駅", "Gotanda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("5反田駅", "Gotanda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("目黒駅", "Meguro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("恵比寿駅", "Ebisu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("渋谷駅", "Shibuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("原宿駅", "Harajuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("代々木駅", "Yoyogi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿駅", "Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("目白駅", "Mejiro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("池袋駅", "Ikebukuro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大塚駅", "Ōtsuka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("巣鴨駅", "Sugamo Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("駒込駅", "Komagome Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("田端駅", "Tabata Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("日暮里駅", "Nippori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("鶯谷駅", "Uguisudani Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上野駅", "Ueno Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("御徒町駅", "Okachimachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("秋葉原駅", "Akihabara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("神田駅", "Kanda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東京駅", "Tōkyō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("有楽町駅", "Yūrakuchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新橋駅", "Shimbashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("浜松町駅", "Hamamatsuchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("田町駅", "Tamachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("品川駅", "Shinagawa Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "JR Keihin-Tōhoku Line") !== false) {
      $tmp[$cnt] = str_replace("JR Keihin-Tōhoku Line", "<br>JR Keihin-Tōhoku Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("赤羽駅", "Akabane Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東十条駅", "Higashi-Jūjō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("王子駅", "Ōji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上中里駅", "Kami-Nakazato Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("田端駅", "Tabata Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西日暮里駅", "Nishi-Nippori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("日暮里駅", "Nippori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("鶯谷駅", "Uguisudani Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上野駅", "Ueno Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("御徒町駅", "Okachimachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("秋葉原駅", "Akihabara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("神田駅", "Kanda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東京駅", "Tōkyō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("有楽町駅", "Yūrakuchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新橋駅", "Shimbashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("浜松町駅", "Hamamatsuchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("田町駅", "Tamachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("品川駅", "Shinagawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大井町駅", "Ōimachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大森駅", "Ōmori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("蒲田駅", "Kamata Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "JR Chuō Line(Rapid)") !== false) {
      $tmp[$cnt] = str_replace("JR Chuō Line(Rapid)", "<br>JR Chuō Line(Rapid)", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東京駅", "Tōkyō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("神田駅", "Kanda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("御茶ノ水駅", "Ochanomizu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("水道橋駅", "Suidōbashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("飯田橋駅", "Iidabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("市ヶ谷駅", "Ichigaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("四谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("四ツ谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("４ツ谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("4ツ谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("信濃町駅", "Shinanochō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("千駄ヶ谷駅", "Sendagaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("代々木駅", "Yoyogi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿駅", "Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大久保駅", "Ōkubo Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東中野駅", "Higashi-Nakano Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("中野駅", "Nakano Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("高円寺駅", "Kōenji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("阿佐ヶ谷駅", "Asagaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西荻窪駅", "Nishi-Ogikubo Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荻窪駅", "Ogikubo Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "JR Chuō Line") !== false) {
      $tmp[$cnt] = str_replace("JR Chuō Line", "<br>JR Chuō Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東京駅", "Tōkyō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("神田駅", "Kanda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("御茶ノ水駅", "Ochanomizu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("水道橋駅", "Suidōbashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("飯田橋駅", "Iidabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("市ヶ谷駅", "Ichigaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("四谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("四ツ谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("４ツ谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("4ツ谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("信濃町駅", "Shinanochō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("千駄ヶ谷駅", "Sendagaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("代々木駅", "Yoyogi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿駅", "Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大久保駅", "Ōkubo Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東中野駅", "Higashi-Nakano Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("中野駅", "Nakano Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("高円寺駅", "Kōenji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("阿佐ヶ谷駅", "Asagaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西荻窪駅", "Nishi-Ogikubo Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荻窪駅", "Ogikubo Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "JR Sōbu Line") !== false) {
      $tmp[$cnt] = str_replace("JR Sōbu Line", "<br>JR Sōbu Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東京駅", "Tōkyō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新日本橋駅", "Shin-Nihombashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("馬喰町駅", "Bakurochō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("錦糸町駅", "Kinshichō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新小岩駅", "Shin-Koiwa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("小岩駅", "Koiwa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("平井駅", "Hirai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("亀戸駅", "Kameido Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("錦糸町駅", "Kinshichō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("両国駅", "Ryōgoku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("浅草橋駅", "Asakusabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("秋葉原駅", "Akihabara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("御茶ノ水駅", "Ochanomizu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("水道橋駅", "Suidōbashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("飯田橋駅", "Iidabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("市ヶ谷駅", "Ichigaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("四谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("四ツ谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("４ツ谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("4ツ谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("信濃町駅", "Shinanochō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("千駄ヶ谷駅", "Sendagaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("代々木駅", "Yoyogi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿駅", "Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大久保駅", "Ōkubo Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東中野駅", "Higashi-Nakano Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("中野駅", "Nakano Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("高円寺駅", "Kōenji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("阿佐ケ谷駅", "Asagaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西荻窪駅", "Nishi-Ogikubo Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荻窪駅", "Ogikubo Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("吉祥寺駅", "Kichijyōji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("三鷹駅", "Mitaka Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "JR Saikyō Line") !== false) {
      $tmp[$cnt] = str_replace("JR Saikyō Line", "<br>JR Saikyō Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大崎駅", "Ōsaki Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("恵比寿駅", "Ebisu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("渋谷駅", "Shibuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿駅", "Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("池袋駅", "Ikebukuro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("板橋駅", "Itabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("十条駅", "jūjō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("赤羽駅", "Akabane Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("北赤羽駅", "Kita-Akabane Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("浮間舟渡駅", "Ukimafunado Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "JR Jōban Line") !== false) {
      $tmp[$cnt] = str_replace("JR Jōban Line", "<br>JR Jōban Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上野駅", "Ueno Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("日暮里駅", "Nippori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("三河島駅", "Mikawashima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("３河島駅", "Mikawashima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("3河島駅", "Mikawashima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("南千住駅", "Minami-Senju Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("北千住駅", "Kita-Senju Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("綾瀬駅", "Ayase Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("亀有駅", "Kameari Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("金町駅", "Kanamachi Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "JR Tōkaidō Line") !== false) {
      $tmp[$cnt] = str_replace("JR Tōkaidō Line", "<br>JR Tōkaidō Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東京駅", "Tōkyō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新橋駅", "Shimbashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("品川駅", "Shinagawa Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "JR Yokosuka Line") !== false) {
      $tmp[$cnt] = str_replace("JR Yokosuka Line", "<br>JR Yokosuka Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東京駅", "Tōkyō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新橋駅", "Shimbashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("品川駅", "Shinagawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西大井駅", "Nishi-Ōi Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "JR Keiyō Line") !== false) {
      $tmp[$cnt] = str_replace("JR Keiyō Line", "<br>JR Keiyō Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東京駅", "Tōkyō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("八丁堀駅", "Hatchōbori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("８丁堀駅", "Hatchōbori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("8丁堀駅", "Hatchōbori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("越中島駅", "Etchūjima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("潮見駅", "Shiomi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新木場駅", "Shin-Kiba Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("葛西臨海公園駅", "Kasairinkaikōen Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "JR Utsunomiya Line(Tōhoku Line)") !== false) {
      $tmp[$cnt] = str_replace("JR Utsunomiya Line(Tōhoku Line)", "<br>JR Utsunomiya Line(Tōhoku Line)", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上野駅", "Ueno Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("尾久駅", "Oku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("赤羽駅", "Akabane Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "JR Tōkaidō Shinkansen") !== false) {
      $tmp[$cnt] = str_replace("JR Tōkaidō Shinkansen", "<br>JR Tōkaidō Shinkansen", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東京駅", "Tōkyō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("品川駅", "Shinagawa Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "JR Tōhoku Sinkansen") !== false) {
      $tmp[$cnt] = str_replace("JR Tōhoku Sinkansen", "<br>JR Tōhoku Sinkansen", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東京駅", "Tōkyō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上野駅", "Ueno Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "JR Shonan-Shinjuku Line") !== false) {
      $tmp[$cnt] = str_replace("JR Shonan-Shinjuku Line", "<br>JR Shonan-Shinjuku Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西大井駅", "Nishi-Ōi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大崎駅", "Ōsaki Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("恵比寿駅", "Ebisu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("渋谷駅", "Shibuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿駅", "Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("池袋駅", "Ikebukuro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("赤羽駅", "Akabane Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyō Metro Ginza Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyō Metro Ginza Line", "<br>Tōkyō Metro Ginza Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("浅草駅", "Asakusa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("田原町駅", "Tawaramachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("稲荷町駅", "Inarichō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上野駅", "Ueno Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上野広小路駅", "Ueno-Hirokōji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("末広町駅", "Suehirochō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("神田駅", "Kanda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("三越前駅", "Mitsukoshimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("３越前駅", "Mitsukoshimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("3越前駅", "Mitsukoshimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("三越駅", "Mitsukoshimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("日本橋駅", "Nihombashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("京橋駅", "Kyōbashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("銀座駅", "Ginza Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新橋駅", "Shimbashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("虎ノ門駅", "Toranomon Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("溜池山王駅", "Tameike-Sannō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("赤坂見附駅", "Akasaka-Mitsuke Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("青山一丁目駅", "Aoyama-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("青山１丁目駅", "Aoyama-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("青山1丁目駅", "Aoyama-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("外苑前駅", "Gaiemmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("表参道駅", "Omotesandō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("渋谷駅", "Shibuya Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyō Metro Marunouchi Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyō Metro Marunouchi Line", "<br>Tōkyō Metro Marunouchi Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("池袋駅", "Ikebukuro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新大塚駅", "Shin-Ōtsuka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("茗荷谷駅", "Myōgadani Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("後楽園駅", "Kōrakuen Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("本郷三丁目駅", "Hongō-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("本郷３丁目駅", "Hongō-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("本郷3丁目駅", "Hongō-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("御茶ノ水駅", "Ochanomizu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("淡路町駅", "Awajichō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大手町駅", "Ōtemachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東京駅", "Tōkyō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("銀座駅", "Ginza Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("霞ヶ関駅", "Kasumigaseki Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("国会議事堂前駅", "Kokkai-Gijidōmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("国会議事堂駅", "Kokkai-Gijidōmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("赤坂見附駅", "Akasaka-Mitsuke Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("四谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("四ツ谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("４ツ谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("4ツ谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("四谷三丁目駅", "Yotsuya-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("四ツ三丁目駅", "Yotsuya-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("４谷３丁目駅", "Yotsuya-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("4谷3丁目駅", "Yotsuya-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿御苑前駅", "Shinjuku-Gyoemmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿御苑駅", "Shinjuku-Gyoemmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿三丁目駅", "Shinjuku-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿３丁目駅", "Shinjuku-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿3丁目駅", "Shinjuku-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西新宿駅", "Nishi-Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿駅", "Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("中野坂上駅", "Nakano-Sakaue Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新中野駅", "Shin-Nakano Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東高円寺駅", "Higashi-Kōenji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新高円寺駅", "Shin-Kōenji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("南阿佐ヶ谷駅", "Minami-Asagaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("阿佐ヶ谷駅", "Asagaya Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyō Metro Hibiya Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyō Metro Hibiya Line", "<br>Tōkyō Metro Hibiya Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("北千住駅", "Kita-Senju Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("南千住駅", "Minami-Senju Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("三ノ輪駅", "Minowa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("３ノ輪駅", "Minowa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("3ノ輪駅", "Minowa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("入谷駅", "Iriya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上野駅", "Ueno Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("仲御徒町駅", "Naka-Okachimachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("秋葉原駅", "Akihabara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("小伝馬町駅", "Kodemmachō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("人形町駅", "Ningyōchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("茅場町駅", "Kayabachō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("八丁堀駅", "Hatchōbori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("８丁堀駅", "Hatchōbori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("8丁堀駅", "Hatchōbori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("築地駅", "Tsukiji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東銀座駅", "Higashi-Ginza Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("銀座駅", "Ginza Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("日比谷駅", "Hibiya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("霞ヶ関駅", "Kasumigaseki Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("神谷町駅", "Kamiyachō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("六本木駅", "Roppongi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("６本木駅", "Roppongi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("6本木駅", "Roppongi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("広尾駅", "Hirō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("恵比寿駅", "Ebisu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("中目黒駅", "Naka-Meguro Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyō Metro Tōzai Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyō Metro Tōzai Line", "<br>Tōkyō Metro Tōzai Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("中野駅", "Nakano Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("落合駅", "Ochiai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("高田馬場駅", "Takadanobaba Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("早稲田駅", "Waseda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("神楽坂駅", "Kagurazaka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("飯田橋駅", "Iidabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("九段下駅", "Kudanshita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("９段下駅", "Kudanshita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("9段下駅", "Kudanshita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("竹橋駅", "Takebashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大手町駅", "Ōtemachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("日本橋駅", "Nihombashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("茅場町駅", "Kayabachō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("門前仲町駅", "Monzen-Nakachō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("木場駅", "Kiba Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東陽町駅", "Tōyōchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("南砂町駅", "Minami-Sunamachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西葛西駅", "Nishi-Kasai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("葛西駅", "Kasai Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyō Metro Chiyoda Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyō Metro Chiyoda Line", "<br>Tōkyō Metro Chiyoda Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("代々木上原駅", "Yoyogi-Uehara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("代々木公園駅", "Yoyogi-Kōen Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("明治神宮駅", "Meiji-Jingū Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("表参道駅", "Omotesandō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("乃木坂駅", "Nogizaka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("赤坂駅", "Akasaka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("国会議事堂前駅", "Kokkai-Gijidōmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("国会議事堂駅", "Kokkai-Gijidōmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("霞ヶ関駅", "Kasumigaseki Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("日比谷駅", "Hibiya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("二重橋前駅", "Nijūbashimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("２重橋前駅", "Nijūbashimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("2重橋前駅", "Nijūbashimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("二重橋駅", "Nijūbashimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大手町駅", "Ōtemachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新御茶ノ水駅", "Shin-Ochanomizu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("湯島駅", "Yushima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("根津駅", "Nezu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("千駄木駅", "Sendagi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西日暮里駅", "Nishi-Nippori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("町屋駅", "Machiya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("北千住駅", "Kita-Senju Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("綾瀬駅", "Ayase Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyō Metro Yūrakuchō Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyō Metro Yūrakuchō Line", "<br>Tōkyō Metro Yūrakuchō Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("地下鉄成増駅", "Chikatetsu-Narimasu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("地下鉄赤塚駅", "Chikatetsu-Akatsuka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("成増駅", "Narimasu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("赤塚駅", "Akatsuka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("平和台駅", "Heiwadai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("氷川台駅", "Hikawadai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("小竹向原駅", "Kotake-Mukaihara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("千川駅", "Sengawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("要町駅", "Kanamechō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東池袋駅", "Higashi-Ikebukuro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("池袋駅", "Ikebukuro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("護国寺駅", "Gokokuji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("江戸川橋駅", "Edogawabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("飯田橋駅", "Iidabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("市ヶ谷駅", "Ichigaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("麹町駅", "Kōjimachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("永田町駅", "Nagatachō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("桜田門駅", "Sakuradamon Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("有楽町駅", "Yūrakuchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("銀座一丁目駅", "Ginza-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("銀座１丁目駅", "Ginza-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("銀座1丁目駅", "Ginza-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新富町駅", "Shintomichō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("月島駅", "Tsukishima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("豊洲駅", "Toyosu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("辰巳駅", "Tatsumi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新木場駅", "Shin-Kiba Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyō Metro Hanzōmon Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyō Metro Hanzōmon Line", "<br>Tōkyō Metro Hanzōmon Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("押上[スカイツリー前]駅", "Oshiage[SKYTREE] Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("押上駅[スカイツリー前]", "Oshiage[SKYTREE] Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("押上駅", "Oshiage Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("錦糸町駅", "Kinshichō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("住吉駅", "Sumiyoshi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("清澄白河駅", "Kiyosumi-Shirakawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("水天宮前駅", "Suitengūmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("水天宮駅", "Suitengūmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("三越前駅", "Mitsukoshimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("３越前駅", "Mitsukoshimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("3越前駅", "Mitsukoshimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大手町駅", "Ōtemachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("神保町駅", "Jimbōchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("九段下駅", "Kudanshita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("９段下駅", "Kudanshita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("9段下駅", "Kudanshita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("半蔵門駅", "Hanzōmon Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("永田町駅", "Nagatachō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("青山一丁目駅", "Aoyama-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("青山１丁目駅", "Aoyama-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("青山1丁目駅", "Aoyama-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("表参道駅", "Omotesandō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("渋谷駅", "Shibuya Station", $tmp[$cnt]);
      // 例外
      $tmp[$cnt] = str_replace("水天宮駅", "Suitengūmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("水天宮町駅", "Suitengūmae Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyō Metro Namboku Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyō Metro Namboku Line", "<br>Tōkyō Metro Namboku Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("目黒駅", "Meguro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("白金台駅", "Shirokanedai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("白金高輪駅", "Shirokane-Takanawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("麻布十番駅", "Azabu-Jūban Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("六本木一丁目駅", "Roppongi-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("六本木１丁目駅", "Roppongi-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("六本木1丁目駅", "Roppongi-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("６本木１丁目駅", "Roppongi-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("6本木1丁目駅", "Roppongi-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("溜池山王駅", "Tameike-Sannō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("永田町駅", "Nagatachō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("四ツ谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("４ツ谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("4ツ谷駅", "Yotsuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("市ヶ谷駅", "Ichigaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("飯田橋駅", "Iidabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("後楽園駅", "Kōrakuen Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東大前駅", "Tōdaimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東大駅", "Tōdaimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("本駒込駅", "Hon-Komagome Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("駒込駅", "Komagome Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西ヶ原駅", "Nishigahara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("王子駅", "Ōji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("王子神谷駅", "Ōji-Kamiya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("志茂駅", "Shimo Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("赤羽岩淵駅", "Akabane-Iwabuchi Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyō Metro Fukutoshin Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyō Metro Fukutoshin Line", "<br>Tōkyō Metro Fukutoshin Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("小竹向原駅", "Kotake-Mukaihara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("千川駅", "Senkawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("要町駅", "Kanamechō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("池袋駅", "Ikebukuro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("雑司が谷駅", "Zōshigaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西早稲田駅", "Nishi-waseda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東新宿駅", "Higashi-Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿三丁目駅", "Shinjuku-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿３丁目駅", "Shinjuku-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿3丁目駅", "Shinjuku-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("北参道駅", "Kita-Sandō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("明治神宮前駅", "Meiji-Jingūmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("明治神宮駅", "Meiji-Jingūmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("渋谷駅", "Shibuya Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Toei Asakusa Line") !== false) {
      $tmp[$cnt] = str_replace("Toei Asakusa Line", "<br>Toei Asakusa Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西馬込駅", "Nishi-Magome Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("馬込駅", "Magome Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("中延駅", "Nakanobu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("戸越駅", "Togoshi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("五反田駅", "Gotanda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("５反田駅", "Gotanda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("5反田駅", "Gotanda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("高輪台駅", "Takanawadai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("泉岳寺駅", "Sengakuji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("三田駅", "Mita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("３田駅", "Mita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("3田駅", "Mita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大門駅", "Daimon Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新橋駅", "Shimbashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東銀座駅", "Higashi-Ginza Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("宝町駅", "Takarachō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東日本橋駅", "Higashi-Nihombashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("日本橋駅", "Nihombashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("人形町駅", "Ningyōchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("浅草橋駅", "Asakusabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("蔵前駅", "Kuramae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("浅草駅", "Asakusa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("押上[スカイツリー前]駅", "Oshiage[SKYTREE] Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("押上駅[スカイツリー前]", "Oshiage[SKYTREE] Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("押上駅", "Oshiage Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Toei Mita Line") !== false) {
      $tmp[$cnt] = str_replace("Toei Mita Line", "<br>Toei Mita Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("目黒駅", "Meguro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("白金台駅", "Shirokanedai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("白金高輪駅", "Shirokane-Takanawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("三田駅", "Mita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("３田駅", "Mita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("3田駅", "Mita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("芝公園駅", "Shibakōen Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("御成門駅", "Onarimon Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("内幸町駅", "Uchisaiwaichō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("日比谷駅", "Hibiya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大手町駅", "Ōtemachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("神保町駅", "Jimbōchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("水道橋駅", "Suidōbashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("春日駅", "Kasuga Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("白山駅", "Hakusan Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("千石駅", "Sengoku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西巣鴨駅", "Nishi-Sugamo Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("巣鴨駅", "Sugamo Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新板橋駅", "Shin-Itabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("板橋区役所前駅", "Itabashikuyakushomae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("板橋区役所駅", "Itabashikuyakushomae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("板橋本町駅", "Itabashihonchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("本蓮沼駅", "Motohasunuma Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("志村坂上駅", "Shimura-Sakaue Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("志村三丁目駅", "Shimura-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("志村３丁目駅", "Shimura-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("志村3丁目駅", "Shimura-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("蓮根駅", "Hasune Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西台駅", "Nishidai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新高島平駅", "Shin-Takashimadaira Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西高島平駅", "Nishi-Takashimadaira Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("高島平駅", "Takashimadaira Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Toei Shinjuku Line") !== false) {
      $tmp[$cnt] = str_replace("Toei Shinjuku Line", "<br>Toei Shinjuku Line ", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿駅", "Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿三丁目駅", "Shinjuku-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿３丁目駅", "Shinjuku-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿3丁目駅", "Shinjuku-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("曙橋駅", "Akebonobashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("市ヶ谷駅", "Ichigaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("九段下駅", "Kudanshita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("９段下駅", "Kudanshita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("9段下駅", "Kudanshita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("神保町駅", "Jimbōchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("小川町駅", "Ogawamachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("岩本町駅", "Iwamotochō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("岩本駅駅", "Iwamotochō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("馬喰横山駅", "Bakuro-Yokoyama Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("浜町駅", "Hamachō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("森下駅", "Morishita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("菊川駅", "Kikukawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("住吉駅", "Sumiyoshi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西大島駅", "Nishi-Ōjima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東大島駅", "Higashi-Ōjima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大島駅", "Ōjima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("船堀駅", "Funabori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("一之江駅", "Ichinoe Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("１之江駅", "Ichinoe Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("1之江駅", "Ichinoe Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("瑞江駅", "Mizue Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("篠崎駅", "Shinozaki Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Toei Ōedo Line") !== false) {
      $tmp[$cnt] = str_replace("Toei Ōedo Line", "<br>Toei Ōedo Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("都庁前駅", "Tochōmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("都庁駅", "Tochōmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿西口駅", "Shinjuku-Nishiguchi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東新宿駅", "Higashi-Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("若松河田駅", "Wakamatsu-Kawada Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("牛込柳町駅", "Ushigome-Yanagichō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("牛込神楽坂駅", "Ushigome-Kagurazaka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("飯田橋駅", "Iidabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("春日駅", "Kasuga Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("本郷三丁目駅", "Hongō-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("本郷３丁目駅", "Hongō-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("本郷3丁目駅", "Hongō-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上野御徒町駅", "Ueno-Okachimachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新御徒町駅", "Shin-Okachimachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("蔵前駅", "Kuramae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("両国駅", "Ryōgoku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("森下駅", "Morishita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("清澄白河駅", "Kiyosumi-Shirakawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("門前仲町駅", "Monzen-Nakachō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("月島駅", "Tsukishima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("勝どき駅", "Kachidoki Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("築地市場駅", "Tsukijishijō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("汐留駅", "Shiodome Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大門駅", "Daimon Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("赤羽橋駅", "Akabanebashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("麻布十番駅", "Azabu-Jūban Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("六本木駅", "Roppongi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("６本木駅", "Roppongi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("6本木駅", "Roppongi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("青山一丁目駅", "Aoyama-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("青山６丁目駅", "Aoyama-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("青山6丁目駅", "Aoyama-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("国立競技場駅", "Kokuritsu-Kyōgijō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("代々木駅", "Yoyogi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿駅", "Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西新宿五丁目駅", "Nishi-Shinjuku-Gochōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西新宿５丁目駅", "Nishi-Shinjuku-Gochōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西新宿5丁目駅", "Nishi-Shinjuku-Gochōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("中野坂上駅", "Nakano-Sakaue Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東中野駅", "Higashi-Nakano Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("中井駅", "Nakai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("落合南長崎駅", "Ochiai-Minami-Nagasaki Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新江古田駅", "Shin-Egota Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("練馬駅", "Nerima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("豊島園駅", "Toshimaen Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("練馬春日町駅", "Nerima-Kasugachō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("光が丘駅", "Hikarigaoka Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Toden Arakawa Line") !== false) {
      $tmp[$cnt] = str_replace("Toden Arakawa Line", "<br>Toden Arakawa Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("三ノ輪橋駅", "Minowabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("３ノ輪橋駅", "Minowabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("3ノ輪橋駅", "Minowabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荒川一中前駅", "Arakawa-Itchūmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荒川１中前駅", "Arakawa-Itchūmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荒川1中前駅", "Arakawa-Itchūmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荒川区役所前駅", "Arakawa-Kuyakushomae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荒川二丁目駅", "Arakawa-Nichōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荒川２丁目駅", "Arakawa-Nichōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荒川2丁目駅", "Arakawa-Nichōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荒川七丁目駅", "Arakawa-Nanachōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荒川７丁目駅", "Arakawa-Nanachōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荒川7丁目駅", "Arakawa-Nanachōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("町屋駅前駅", "Machiya-Ekimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("町屋二丁目駅", "Machiya-Nichōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("町屋２丁目駅", "Machiya-Nichōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("町屋2丁目駅", "Machiya-Nichōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東尾久三丁目駅", "Higashi-Ogu-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東尾久３丁目駅", "Higashi-Ogu-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東尾久3丁目駅", "Higashi-Ogu-Sanchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("熊野前駅", "Kumanomae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("宮ノ前駅", "Miyanomae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("小台駅", "Odai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荒川遊園地前駅", "Arakawa-Yūenchimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荒川車庫前駅", "Arakawa-Shakomae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("梶原駅", "Kajiwara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("栄町駅", "Sakaechō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("王子駅前駅", "Ōji-Ekimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("飛鳥山駅", "Asukayama Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("滝野川一丁目駅", "Takinogawa-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("滝野川１丁目駅", "Takinogawa-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("滝野川1丁目駅", "Takinogawa-Itchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西ヶ原四丁目駅", "Nishigahara-Yonchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西ヶ原４丁目駅", "Nishigahara-Yonchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西ヶ原4丁目駅", "Nishigahara-Yonchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新庚申塚駅", "Shin-Kōshinzuka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("庚申塚駅", "Kōshinzuka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("巣鴨新田駅", "Sugamoshinden Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大塚駅前駅", "Ōtsuka-Ekimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("向原駅", "Mukōhara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東池袋四丁目駅", "Higashi-Ikebukuro-Yonchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東池袋４丁目駅", "Higashi-Ikebukuro-Yonchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東池袋4丁目駅", "Higashi-Ikebukuro-Yonchōme Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("都電雑司が谷駅", "Toden-Zōshigaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("鬼子母神前駅", "Kishibojimmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("学習院下駅", "Gakushūinshita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("面影橋駅", "Omokagebashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("早稲田駅", "Waseda Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Nippori-Toneri Liner") !== false) {
      $tmp[$cnt] = str_replace("Nippori-Toneri Liner", "<br>Nippori-Toneri Liner", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西日暮里駅", "Nishi-Nippori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("日暮里駅", "Nippori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("赤土小学校前駅", "Akado-Shōgakkōmae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("熊野前駅", "Kumanomae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("足立小台駅", "Adachi-Odai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("扇大橋駅", "Ōgi-Ōhashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("高野駅", "Kōya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("江北駅", "Kōhoku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西新井大師西駅", "Nishiaraidaishi-Nishi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("谷在家駅", "Yazaike Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("舎人公園駅", "Toneri-Kōen Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("舎人駅", "Toneri Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("見沼代親水公園駅", "Minumadai-Shinsuikōen Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Seibu Ikebukuro Line, Toshima Line") !== false) {
      $tmp[$cnt] = str_replace("Seibu Ikebukuro Line, Toshima Line", "<br>Seibu Ikebukuro Line, Toshima Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("池袋駅", "Ikebukuro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("椎名町駅", "Shiinamachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東長崎駅", "Higashi-Nagasaki Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("江古田駅", "Egota Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("桜台駅", "Sakuradai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("中村橋駅", "Nakamurabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("富士見台駅", "Fujimidai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("石神井公園駅", "Shakujii-Kōen Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大泉学園駅", "Ōizumi-Gakuen Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("練馬駅", "Nerima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("豊島園駅", "Toshimaen Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Seibu Yūrakuchō Line") !== false) {
      $tmp[$cnt] = str_replace("Seibu Yūrakuchō Line", "<br>Seibu Yūrakuchō Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("練馬駅", "Nerima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新桜台駅", "Shin-Sakuradai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("小竹向原駅", "Kotake-Mukaihara Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Seibu Shinjuku Line") !== false) {
      $tmp[$cnt] = str_replace("Seibu Shinjuku Line", "<br>Seibu Shinjuku Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西武新宿駅", "Seibu-Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("高田馬場駅", "Takadanobaba Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("下落合駅", "Shimo-Ochiai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("中井駅", "Nakai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新井薬師前駅", "Araiyakushi-mae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新井薬師駅", "Araiyakushi-mae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("沼袋駅", "Numabukuro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("野方駅", "Nogata Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("都立家政駅", "Toritsu-Kasei Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("鷺ノ宮駅", "Saginomiya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("下井草駅", "Shimo-Igusa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("井荻駅", "Iogi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上井草駅", "Kami-Igusa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上石神井駅", "Kami-Shakujii Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("武蔵関駅", "Musashi-seki Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Keiō Line") !== false) {
      $tmp[$cnt] = str_replace("Keiō Line", "<br>Keiō Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿駅", "Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("笹塚駅", "Sasazuka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("代田橋駅", "Daitabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("明大前駅", "Meidaimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("下高井戸駅", "Shimo-Takaido Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("桜上水駅", "Sakurajōsui Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上北沢駅", "Kami-Kitazawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("八幡山駅", "Hachimanyama Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("８幡山駅", "Hachimanyama Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("8幡山駅", "Hachimanyama Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("芦花公園駅", "Roka-Kōen Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("千歳烏山駅", "Chitose-Karasuyama Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Keiō Inogashira Line") !== false) {
      $tmp[$cnt] = str_replace("Keiō Inogashira Line", "<br>Keiō Inogashira Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("渋谷駅", "Shibuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("神泉駅", "Shinsen Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("駒場東大前駅", "Komaba-Tōdaimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("池ノ上駅", "Ikenoue Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("下北沢駅", "Shimo-Kitazawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新代田駅", "Shindaita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東松原駅", "Higashi-Matsubara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("明大前駅", "Meidaimae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("永福町駅", "Eifukuchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西永福駅", "Nishi-Eifuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("浜田山駅", "Hamadayama Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("高井戸駅", "Takaido Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("富士見ヶ丘駅", "Fujimigaoka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("久我山駅", "Kugayama Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Keiō New Line") !== false) {
      $tmp[$cnt] = str_replace("Keiō New Line", "<br>Keiō New Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿駅", "Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("初台駅", "Hatsudai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("幡ヶ谷駅", "Hatagaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("笹塚駅", "Sasazuka Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyū Tōyoko Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyū Tōyoko Line", "<br>Tōkyū Tōyoko Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("渋谷駅", "Shibuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("代官山駅", "Daikan-Yama Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("中目黒駅", "Naka-Meguro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("祐天寺駅", "Yūtenji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("学芸大学駅", "Gakugei-Daigaku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("都立大学駅", "Toritsu-Daigaku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("自由が丘駅", "Jiyūgaoka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("田園調布駅", "Den-En-Chōfu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("多摩川駅", "Tamagawa Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyū Tamagawa Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyū Tamagawa Line", "<br>Tōkyū Tamagawa Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("多摩川駅", "Tamagawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("沼部駅", "Numabe Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("鵜の木駅", "Unoki Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("下丸子駅", "Shimomaruko Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("武蔵新田駅", "Musashi-Nitta Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("矢口渡駅", "Yaguchi-No-Watashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("蒲田駅", "Kamata Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyū Ōimachi Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyū Ōimachi Line", "<br>Tōkyū Ōimachi Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大井町駅", "Ōimachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("下神明駅", "Shimo-Shimmei Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("戸越公園駅", "Togoshi-Kōen Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("中延駅", "Nakanobu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荏原町駅", "Ebara-Machi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("旗の台駅", "Hatanodai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("北千束駅", "Kita-Senzoku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大岡山駅", "Ōokayama Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("緑が丘駅", "Midorigaoka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("自由が丘駅", "Jiyūgaoka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("九品仏駅", "Kuhombutsu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("９品仏駅", "Kuhombutsu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("9品仏駅", "Kuhombutsu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("尾山台駅", "Oyamadai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("等々力駅", "Todoroki Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上野毛駅", "Kaminoe Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("二子玉川駅", "Futako-Tamagawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("２子玉川駅", "Futako-Tamagawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("2子玉川駅", "Futako-Tamagawa Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyū Denentoshi Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyū Denentoshi Line", "<br>Tōkyū Denentoshi Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("渋谷駅", "<br>Shibuya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("池尻大橋駅", "<br>Ikejiri-Ōhashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("三軒茶屋駅", "<br>Sangen-Jaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("３軒茶屋駅", "<br>Sangen-Jaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("3軒茶屋駅", "<br>Sangen-Jaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("駒沢大学駅", "<br>Komazawa-Daigaku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("駒澤大学駅", "<br>Komazawa-Daigaku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("桜新町駅", "<br>Sakura-Shimmachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("用賀駅", "<br>Yōga Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("二子玉川駅", "<br>Futako-Tamagawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("２子玉川駅", "<br>Futako-Tamagawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("2子玉川駅", "<br>Futako-Tamagawa Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyū Ikegami Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyū Ikegami Line", "<br>Tōkyū Ikegami Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("五反田駅", "Gotanda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("５反田駅", "Gotanda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("5反田駅", "Gotanda Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大崎広小路駅", "Ōsakihirokōji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("戸越銀座駅", "Togoshi-Ginza Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("荏原中延駅", "Ebara-Nakanobu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("旗の台駅", "Hatanodai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("長原駅", "Nagahara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("洗足池駅", "Senzoku-Ike Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("石川台駅", "Ishikawa-Dai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("雪が谷大塚駅", "Yukigaya-Ōtsuka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("御嶽山駅", "Ontakesan Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("久が原駅", "Kugahara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("千鳥町駅", "Chidorichō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("池上駅", "Ikegami Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("蓮沼駅", "Hasunuma Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("蒲田駅", "Kamata Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyū Setagaya Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyū Setagaya Line", "<br>Tōkyū Setagaya Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("三軒茶屋駅", "Sangen-Jaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("３軒茶屋駅", "Sangen-Jaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("3軒茶屋駅", "Sangen-Jaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西太子堂駅", "Nishi-Taishidō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("若林駅", "Wakabayashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("松蔭神社前駅", "Shōin-Jinja-Mae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("世田谷駅", "Setagaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上町駅", "Kamimachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("宮の坂駅", "Miyanosaka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("山下駅", "Yamashita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("松原駅", "Matsubara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("下高井戸駅", "Shimo-Takaido Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyū Meguro Line") !== false) {
      $tmp[$cnt] = str_replace("Tōkyū Meguro Line", "<br>Tōkyū Meguro Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("目黒駅", "Meguro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("不動前駅", "Fudō-Mae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("武蔵小山駅", "Musashi-Koyama Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西小山駅", "Nishi-Koyama Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("洗足駅", "Senzoku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大岡山駅", "Ōokayama Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("奥沢駅", "Okusawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("田園調布駅", "Den-En-Chōfu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("多摩川駅", "Tamagawa Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōbu Tōjō Line") !== false) {
      $tmp[$cnt] = str_replace("Tōbu Tōjō Line", "<br>Tōbu Tōjō Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("北池袋駅", "Kita-Ikebukuro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("池袋駅", "Ikebukuro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("下板橋駅", "Shimo-Itabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大山駅", "Ōyama Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("中板橋駅", "Naka-Itabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("ときわ台駅", "Tokiwadai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("上板橋駅", "Kami-Itabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東武練馬駅", "Tōbu-Nerima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("下赤塚駅", "Shimo-Akatsuka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("成増駅", "Narimasu Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōbu Isesaki Line・Daishi Line") !== false) {
      $tmp[$cnt] = str_replace("Tōbu Isesaki Line・Daishi Line", "<br>Tōbu Isesaki Line・Daishi Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("浅草駅", "Asakusa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("とうきょうスカイツリー駅", "TOKYO SKYTREE Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("曳舟駅", "Hikifune Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東向島駅", "Higashi-Mukōjima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("鐘ヶ淵駅", "Kanegafuchi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("堀切駅", "Horikiri Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("牛田駅", "Ushida Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("北千住駅", "Kita-Senju Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("小菅駅", "Kosuge Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("五反野駅", "Gotanno Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("５反野駅", "Gotanno Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("5反野駅", "Gotanno Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("梅島駅", "Umejima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("竹ノ塚駅", "Takenotsuka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("西新井駅", "Nishiarai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大師前駅", "Daishimae Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōbu Kameido Line") !== false) {
      $tmp[$cnt] = str_replace("Tōbu Kameido Line", "<br>Tōbu Kameido Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("曳舟駅", "Hikifune Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("小村井駅", "Omurai Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東あずま駅", "Higashi-Azuma Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("亀戸水神駅", "Kameidosuijin Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("亀戸駅", "Kameido Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Odakyū Line") !== false) {
      $tmp[$cnt] = str_replace("Odakyū Line", "<br>Odakyū Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("南新宿駅", "Minami-Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新宿駅", "Shinjuku Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("参宮橋駅", "Sangūbashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("代々木八幡駅", "Yoyogi-Hachiman Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("代々木８幡駅", "Yoyogi-Hachiman Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("代々木8幡駅", "Yoyogi-Hachiman Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("代々木上原駅", "Yoyogi-Uehara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東北沢駅", "Higashi-Kitazawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("下北沢駅", "Shimo-Kitazawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("世田谷代田駅", "Setagaya-Daita Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("梅ヶ丘駅", "Umegaoka Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("豪徳寺駅", "Gōtokuji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("経堂駅", "Kyōdō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("千歳船橋駅", "Chitose-Funabashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("祖師ヶ谷大蔵駅", "Soshigaya-Ōkura Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("成城学園前駅", "Seijōgakuen-Mae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("喜多見駅", "Kitami Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Keikyū Main Line") !== false) {
      $tmp[$cnt] = str_replace("Keikyū Main Line", "<br>Keikyū Main Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("泉岳寺駅", "Sengakuji Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("北品川駅", "Kitashinagawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("品川駅", "Shinagawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新馬場駅", "Shimbamba Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("青物横丁駅", "Aomono-Yokochō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("鮫洲駅", "Samezu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("立会川駅", "Tachiaigawa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大森海岸駅", "Ōmorikaigan Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("平和島駅", "Heiwajima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大森町駅", "Ōmorimachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("梅屋敷駅", "Umeyashiki Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("京急蒲田駅", "Keikyū Kamata Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("雑色駅", "Zōshiki Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("六郷土手駅", "Rokugōdote Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("６郷土手駅", "Rokugōdote Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("6郷土手駅", "Rokugōdote Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Keikyū Airport Line") !== false) {
      $tmp[$cnt] = str_replace("Keikyū Airport Line", "<br>Keikyū Airport Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("京急蒲田駅", "Keikyū Kamata Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("糀谷駅", "Kōjiya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大鳥居駅", "Ōtorii Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("穴守稲荷駅", "Anamoriinari Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("天空橋駅", "Tenkūbashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("羽田空港国際線ターミナル駅", "Haneda Airport International Terminal Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("羽田空港国内線ターミナル駅", "Haneda Airport Domestic Terminal Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Keisei main Line") !== false) {
      $tmp[$cnt] = str_replace("Keisei main Line", "<br>Keisei main Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("京成上野駅", "Keisei-Ueno Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("日暮里駅", "Nippori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新三河島駅", "Shim-Mikawashima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新３河島駅", "Shim-Mikawashima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新3河島駅", "Shim-Mikawashima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("町屋駅", "Machiya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("千住大橋駅", "Senjuōhashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("京成関屋駅", "Keisei-Sekiya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("堀切菖蒲園駅", "Horikirishōbuen Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("お花茶屋駅", "Ohanajaya Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("青砥駅", "Aoto Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("京成高砂駅", "Keisei-Takasago Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("京成小岩駅", "Keisei-Koiwa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("江戸川駅", "Edogawa Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Keisei Oshiage Line") !== false) {
      $tmp[$cnt] = str_replace("Keisei Oshiage Line", "<br>Keisei Oshiage Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("押上[スカイツリー前]駅", "Oshiage[SKYTREE] Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("押上駅[スカイツリー前]", "Oshiage[SKYTREE] Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("押上駅", "Oshiage Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("京成曳舟駅", "Keisei-Hikifune Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("八広駅", "Yahiro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("８広駅", "Yahiro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("8広駅", "Yahiro Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("四ツ木駅", "Yotsugi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("４ツ木駅", "Yotsugi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("4ツ木駅", "Yotsugi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("京成立石駅", "Keisei-Tateishi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("青砥駅", "Aoto Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Keisei Kanamachi Line") !== false) {
      $tmp[$cnt] = str_replace("Keisei Kanamachi Line", "<br>Keisei Kanamachi Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("京成高砂駅", "Keisei-Takasago Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("柴又駅", "Shibamata Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("京成金町駅", "Keisei-Kanamachi Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Keisei Narita Sky Access Line") !== false) {
      $tmp[$cnt] = str_replace("Keisei Narita Sky Access Line", "<br>Keisei Narita Sky Access Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("京成高砂駅", "Keisei-Takasago Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新柴又駅", "Shin-shibamata Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("高野駅", "Takano Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Rinkai Line") !== false) {
      $tmp[$cnt] = str_replace("Rinkai Line", "<br>Rinkai Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新木場駅", "Shin-Kiba Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東雲駅", "Shinonome Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("国際展示場駅", "Kokusai-Tenjijō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("東京テレポート駅", "Tōkyō Teleport Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("天王洲アイル駅", "Tennōzu Isle Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("品川シーサイド駅", "Shinagawa Seaside Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大井町駅", "Ōimachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大崎駅", "Ōsaki Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tōkyō Monorail") !== false) {
      $tmp[$cnt] = str_replace("Tōkyō Monorail", "<br>Tōkyō Monorail", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("浜松町駅", "Hamamatsuchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("天王洲アイル駅", "Tennōzu Isle Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("大井競馬場前駅", "Ōikeibajō-Mae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("流通センター駅", "RYŪTSŪ CENTER Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("昭和島駅", "Shōwajima Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("整備場駅", "Seibijō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("天空橋駅", "Tenkūbashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("羽田空港国際線ビル駅", "Haneda Airport International Terminal Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新整備場駅", "Shinseibijō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("羽田空港第一ビル駅", "Haneda Airport Terminal 1 Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("羽田空港第１ビル駅", "Haneda Airport Terminal 1 Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("羽田空港第1ビル駅", "Haneda Airport Terminal 1 Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("羽田空港第二ビル駅", "Haneda Airport Terminal 2 Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("羽田空港第２ビル駅", "Haneda Airport Terminal 2 Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("羽田空港第2ビル駅", "Haneda Airport Terminal 2 Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Yurikamome") !== false) {
      $tmp[$cnt] = str_replace("Yurikamome", "<br>Yurikamome", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新橋駅", "Shimbashi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("汐留駅", "Shiodome Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("竹芝駅", "Takeshiba Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("日の出駅", "Hinode Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("芝浦ふ頭駅", "Shibaura-Futō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("お台場海浜公園駅", "Odaiba-Kaihinkōen Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("台場駅", "Daiba Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("船の科学館駅", "Fune-No-Kagakukan Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("テレコムセンター駅", "Telecom Center Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("青海駅", "Aomi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("国際展示場正門駅", "Aomi Kokusai-Tenjijō-Seimon Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("有明駅", "Aomi Ariake Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("有明テニスの森駅", "Aomi Ariake-Tennis-No-Mori Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("市場前駅", "Aomi Shijō-Mae Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新豊洲駅", "Aomi Shin-Toyosu Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("豊洲駅", "Aomi Toyosu Station", $tmp[$cnt]);
    }else if(strpos($tmp[$cnt], "Tsukuba Express") !== false) {
      $tmp[$cnt] = str_replace("Tsukuba Express", "<br>Tsukuba Express", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("秋葉原駅", "Akihabara Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新御徒町駅", "Shin-Okachimachi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("浅草駅", "Asakusa Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("南千住駅", "Minami-Senju Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("北千住駅", "Kita-Senju Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("青井駅", "Aoi Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("六町駅", "Rokuchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("６町駅", "Rokuchō Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("6町駅", "Rokuchō Station", $tmp[$cnt]);
    }else if(strpos($access_b, "Saitama Rapid Railway Line") !== false) {
      $tmp[$cnt] = str_replace("Saitama Rapid Railway Line", "<br>Saitama Rapid Railway Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("赤羽岩淵駅", "Akabane-Iwabuchi Station", $tmp[$cnt]);
    }else if(strpos($access_b, "Hokusō Railway Hokusō Line") !== false) {
      $tmp[$cnt] = str_replace("Hokusō Railway Hokusō Line", "<br>Hokusō Railway Hokusō Line", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("京成高砂駅", "Keisei-Takasago Station", $tmp[$cnt]);
      $tmp[$cnt] = str_replace("新柴又駅", "Shin-Shibamata Station", $tmp[$cnt]);
    }

    // 削除項目の削除
    if(strpos($tmp[$cnt], "（") !== false) {
      $array = preg_split("//u", $tmp[$cnt], -1, PREG_SPLIT_NO_EMPTY); // 文字列を配列に
      $del_flg = 0;
      $tmp[$cnt] = "";

      for ($cnt = 0 ; $cnt < count($array); $cnt++) {
        if($array[$cnt] == "（") {
          $del_flg = 1;
        }
        if($del_flg == 0) {
          $tmp[$cnt] .= $array[$cnt];
        }
        if($array[$cnt] == "）"){
          $del_flg = 0;
        }
      }
    }

    $tmp[$cnt] = preg_replace("/バス(.*?)分/","$1 min. bus",$tmp[$cnt]);
    $tmp[$cnt] = preg_replace("/徒歩(.*?)分/","$1 min. walk",$tmp[$cnt]);
    $tmp[$cnt] = preg_replace("/bus (....) min/","bus - $1 min",$tmp[$cnt]);
    $tmp[$cnt] = preg_replace("/bus (...) min/","bus - $1 min",$tmp[$cnt]);
    $tmp[$cnt] = preg_replace("/bus (..) min/","bus - $1 min",$tmp[$cnt]);
    $tmp[$cnt] = preg_replace("/bus (.) min/","bus - $1 min",$tmp[$cnt]);
    $tmp[$cnt] = preg_replace("/walk (....) min/","walk - $1 min",$tmp[$cnt]);
    $tmp[$cnt] = preg_replace("/walk (...) min/","walk - $1 min",$tmp[$cnt]);
    $tmp[$cnt] = preg_replace("/walk (..) min/","walk - $1 min",$tmp[$cnt]);
    $tmp[$cnt] = preg_replace("/walk (.) min/","walk - $1 min",$tmp[$cnt]);
    $tmp[$cnt] = preg_replace("/駅/","",$tmp[$cnt]);

    // 変換ミスのものは除外
    $kari = preg_replace("/[ĀāĒēĪīŌōŪū]/","",$tmp[$cnt]);

    if (strlen($kari) === mb_strlen($kari)) {
      // 交通カラム格納データ作成
      $access_b .= $tmp[$cnt];
      // c_railwayテーブル格納データ作成
      if(strpos($tmp[$cnt], "JR Yamanote Line") !== false){
        $c_railway_num[1]++;
        $p_railway_id = 1;
      }else if(strpos($tmp[$cnt], "JR Keihin-Tōhoku Line") !== false){
        $c_railway_num[2]++;
        $p_railway_id = 2;
      }else if(strpos($tmp[$cnt], "JR Chuō Line(Rapid)") !== false){
        $c_railway_num[3]++;
        $p_railway_id = 3;
      }else if(strpos($tmp[$cnt], "JR Chuō Line") !== false){
        $c_railway_num[13]++;
        $p_railway_id = 13;
      }else if(strpos($tmp[$cnt], "JR Sōbu Line") !== false){
        $c_railway_num[4]++;
        $p_railway_id = 4;
      }else if(strpos($tmp[$cnt], "JR Saikyō Line") !== false){
        $c_railway_num[5]++;
        $p_railway_id = 5;
      }else if(strpos($tmp[$cnt], "JR Jōban Line") !== false){
        $c_railway_num[6]++;
        $p_railway_id = 6;
      }else if(strpos($tmp[$cnt], "JR Tōkaidō Line") !== false){
        $c_railway_num[7]++;
        $p_railway_id = 7;
      }else if(strpos($tmp[$cnt], "JR Yokosuka Line") !== false){
        $c_railway_num[8]++;
        $p_railway_id = 8;
      }else if (strpos($tmp[$cnt], "JR Keiyō Line") !== false){
        $c_railway_num[9]++;
        $p_railway_id = 9;
      }else if (strpos($tmp[$cnt], "JR Utsunomiya Line(Tōhoku Line)") !== false){
        $c_railway_num[10]++;
        $p_railway_id = 10;
      }else if (strpos($tmp[$cnt], "JR Tōkaidō Shinkansen") !== false){
        $c_railway_num[11]++;
        $p_railway_id = 11;
      }else if (strpos($tmp[$cnt], "JR Tōhoku Sinkansen") !== false){
        $c_railway_num[12]++;
        $p_railway_id = 12;
      }else if (strpos($tmp[$cnt], "JR Shonan-Shinjuku Line") !== false){
        $c_railway_num[14]++;
        $p_railway_id = 14;
      }else if (strpos($tmp[$cnt], "Tōkyō Metro Ginza Line") !== false){
        $c_railway_num[15]++;
        $p_railway_id = 15;
      }else if (strpos($tmp[$cnt], "Tōkyō Metro Marunouchi Line") !== false){
        $c_railway_num[16]++;
        $p_railway_id = 16;
      }else if (strpos($tmp[$cnt], "Tōkyō Metro Hibiya Line") !== false){
        $c_railway_num[17]++;
        $p_railway_id = 17;
      }else if (strpos($tmp[$cnt], "Tōkyō Metro Tōzai Line") !== false){
        $c_railway_num[18]++;
        $p_railway_id = 18;
      }else if (strpos($tmp[$cnt], "Tōkyō Metro Chiyoda Line") !== false){
        $c_railway_num[19]++;
        $p_railway_id = 19;
      }else if (strpos($tmp[$cnt], "Tōkyō Metro Yūrakuchō Line") !== false){
        $c_railway_num[20]++;
        $p_railway_id = 20;
      }else if (strpos($tmp[$cnt], "Tōkyō Metro Hanzōmon Line") !== false){
        $c_railway_num[21]++;
        $p_railway_id = 21;
      }else if (strpos($tmp[$cnt], "Tōkyō Metro Namboku Line") !== false){
        $c_railway_num[22]++;
        $p_railway_id = 22;
      }else if (strpos($tmp[$cnt], "Tōkyō Metro Fukutoshin Line") !== false){
        $c_railway_num[23]++;
        $p_railway_id = 23;
      }else if (strpos($tmp[$cnt], "Toei Asakusa Line") !== false){
        $c_railway_num[24]++;
        $p_railway_id = 24;
      }else if (strpos($tmp[$cnt], "Toei Mita Line") !== false){
        $c_railway_num[25]++;
        $p_railway_id = 25;
      }else if (strpos($tmp[$cnt], "Toei Shinjuku Line") !== false){
        $c_railway_num[26]++;
        $p_railway_id = 26;
      }else if (strpos($tmp[$cnt], "Toei Ōedo Line") !== false){
        $c_railway_num[27]++;
        $p_railway_id = 27;
      }else if (strpos($tmp[$cnt], "Toden Arakawa Line") !== false){
        $c_railway_num[28]++;
        $p_railway_id = 28;
      }else if (strpos($tmp[$cnt], "Nippori-Toneri Liner") !== false){
        $c_railway_num[29]++;
        $p_railway_id = 29;
      }else if (strpos($tmp[$cnt], "Seibu Ikebukuro Line, Toshima Line") !== false){
        $c_railway_num[30]++;
        $p_railway_id = 30;
      }else if (strpos($tmp[$cnt], "Seibu Yūrakuchō Line") !== false){
        $c_railway_num[31]++;
        $p_railway_id = 31;
      }else if (strpos($tmp[$cnt], "Seibu Shinjuku Line") !== false){
        $c_railway_num[32]++;
        $p_railway_id = 32;
      }else if (strpos($tmp[$cnt], "Keiō Line") !== false){
        $c_railway_num[33]++;
        $p_railway_id = 33;
      }else if (strpos($tmp[$cnt], "Keiō Inogashira Line") !== false){
        $c_railway_num[34]++;
        $p_railway_id = 34;
      }else if (strpos($tmp[$cnt], "Keiō New Line") !== false){
        $c_railway_num[35]++;
        $p_railway_id = 35;
      }else if (strpos($tmp[$cnt], "Tōkyū Tōyoko Line") !== false){
        $c_railway_num[36]++;
        $p_railway_id = 36;
      }else if (strpos($tmp[$cnt], "Tōkyū Tamagawa Line") !== false){
        $c_railway_num[37]++;
        $p_railway_id = 37;
      }else if (strpos($tmp[$cnt], "Tōkyū Ōimachi Line") !== false){
        $c_railway_num[38]++;
        $p_railway_id = 38;
      }else if (strpos($tmp[$cnt], "Tōkyū Denentoshi Line") !== false){
        $c_railway_num[39]++;
        $p_railway_id = 39;
      }else if (strpos($tmp[$cnt], "Tōkyū Ikegami Line") !== false){
        $c_railway_num[40]++;
        $p_railway_id = 40;
      }else if (strpos($tmp[$cnt], "Tōkyū Setagaya Line") !== false){
        $c_railway_num[41]++;
        $p_railway_id = 41;
      }else if (strpos($tmp[$cnt], "Tōkyū Meguro Line") !== false){
        $c_railway_num[42]++;
        $p_railway_id = 42;
      }else if (strpos($tmp[$cnt], "Tōbu Tōjō Line") !== false){
        $c_railway_num[43]++;
        $p_railway_id = 43;
      }else if (strpos($tmp[$cnt], "Tōbu Isesaki Line・Daishi Line") !== false){
        $c_railway_num[44]++;
        $p_railway_id = 44;
      }else if (strpos($tmp[$cnt], "Tōbu Kameido Line") !== false){
        $c_railway_num[45]++;
        $p_railway_id = 45;
      }else if (strpos($tmp[$cnt], "Odakyū Line") !== false){
        $c_railway_num[46]++;
        $p_railway_id = 46;
      }else if (strpos($tmp[$cnt], "Keikyū Main Line") !== false){
        $c_railway_num[47]++;
        $p_railway_id = 47;
      }else if (strpos($tmp[$cnt], "Keikyū Airport Line") !== false){
        $c_railway_num[48]++;
        $p_railway_id = 48;
      }else if (strpos($tmp[$cnt], "Keisei main Line") !== false){
        $c_railway_num[49]++;
        $p_railway_id = 49;
      }else if (strpos($tmp[$cnt], "Keisei Oshiage Line") !== false){
        $c_railway_num[50]++;
        $p_railway_id = 50;
      }else if (strpos($tmp[$cnt], "Keisei Kanamachi Line") !== false){
        $c_railway_num[51]++;
        $p_railway_id = 51;
      }else if (strpos($tmp[$cnt], "Keisei Narita Sky Access Line") !== false){
        $c_railway_num[52]++;
        $p_railway_id = 52;
      }else if (strpos($tmp[$cnt], "Rinkai Line") !== false){
        $c_railway_num[53]++;
        $p_railway_id = 53;
      }else if (strpos($tmp[$cnt], "Tōkyō Monorail") !== false){
        $c_railway_num[54]++;
        $p_railway_id = 54;
      }else if (strpos($tmp[$cnt], "Yurikamome") !== false){
        $c_railway_num[55]++;
        $p_railway_id = 55;
      }else if (strpos($tmp[$cnt], "Tsukuba Express") !== false){
        $c_railway_num[56]++;
        $p_railway_id = 56;
      }else if (strpos($access_b, "Saitama Rapid Railway Line") !== false){
        $c_railway_num[57]++;
        $p_railway_id = 57;
      }else if (strpos($access_b, "Hokusō Railway Hokusō Line") !== false){
        $c_railway_num[58]++;
        $p_railway_id = 58;
      }

      // p_accessデータ作成
      if(strpos($tmp[$cnt], "walk") !== false && strpos($tmp[$cnt], "bus") == false) {
        $tmp2 = explode(" min. walk", $tmp[$cnt], 2);
        $tmp2 = explode("Station ", $tmp2[0], 2);
        $access_data_a[$cnt2]['walk_minute_a'] = trim($tmp2[1]);
        $access_data_a[$cnt2]['p_railway_id'] = $p_railway_id;
        $cnt2++;
      }
    }
  }
  $access_b = ltrim($access_b, "<br>");              // 最初の改行を除去
  $access_b = rtrim($access_b);                      // 最後の空白を除去

  return $access_b;
}
?>