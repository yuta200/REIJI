<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title>JPFS | Japan property for sale</title>
<meta name="keywords" content="real estate">
<meta name="description" content="real estate">
<link rel="shortcut icon" href="../img/site/common/favicon.ico">
<link rel="stylesheet" media="all" href="../css/reset.css">
<link rel="stylesheet" media="all" href="../css/common.css">
<link rel="stylesheet" media="all" href="../css/srh.css">
<!--[if lt IE 9]>
  <script src="../js/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
  <script src="../js/jquery-2.0.3.min.js"></script>
<![endif]-->
<script src="../js/modernizr.custom.min.js"></script>
<script src="../js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="../js/jquery.common.js"></script>
<script src="../js/jquery.srh.js"></script>

<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
<![endif]-->
</head>

<body>
<!-- ●header START● -->
<div>
  <!-- ●logo+search START● -->
  <div id="area_face">
    <!-- logo -->
    <div id="area_logo">
      <a href="/">
        <img src="/img/site/common/logo_jpfs.jpg" alt="jpfs">
      </a>
    </div>

    <!-- search form -->
    <div class="srh_form">
      <!-- pro -->
      <div class="okiniiri">
        <a href="/">Shinjyuku</a>
        <a href="/">Ueno</a>
        <a href="/">Akasaka</a>
        <a href="../srh/">...Advanced search</a>
      </div>
      <div class="form_group">
        <input type="text" class="form_control srh_field" value="" placeholder="Enter a land name" id="src_name" />
        <p class="btn_srh"><a href="#">Search</a></p>
      </div>
      <div class="clearfloat"></div>
      <label class="ico_loupe" for="srh_name"></label>
    </div>

    <div class="contact_face">
      <p class="tel">03-6279-3024</p>
      <p class="btn_header_contact"><a href="../contact/">mailでのお問い合わせ</a></p>
    </div>
    <label class="ico_tel"></label>
    <label class="ico_mail"></label>
    <div class="clearfloat"></div>
  </div>
  <!-- ●logo+search END● -->

  <!-- ●global navi START● -->
  <div id="area_global_navi">
    <ul>
      <li class="layout_global_navi_li1"><a href="#">blog</a></li>
      <li class="layout_global_navi_li2"><a href="../column/">column</a></li>
      <li class="layout_global_navi_li3"><a href="#">news</a></li>
      <li class="layout_global_navi_li4"><a href="#">info</a></li>
      <li class="layout_global_navi_li5"><a href="../contact/">contact</a></li>
    </ul>
    <div class="clearfloat"></div>
  </div>
  <!-- ●global navi END● -->

  <!-- ●breadcrumbs START -->
  <div id="area_pan">
    <div class="layout_pan">
      <a href="/">TOP</a> > advanced searh
    </div>
  </div>
  <!-- ●breadcrumbs END -->
</div>
<!-- ●header END● -->

<!-- ●main contents START● -->
<div id="area_main">
  <ul id="tab">
    <li class="selected"><a href="#tab1">Advanced search</a></li>
    <li><a href="#tab2">路線で検索</a></li>
    <li><a href="#tab3">都市で検索</a></li>
  </ul>
  <div id="detail">
    <div id="tab1" class="tabbox">
      <div class="area_advanced_srh">
        <form name="form1" action="list.php" method="post">
        <table>
          <tr>
            <td class="area_advanced_srh_list1">キーワード</td>
            <td class="area_advanced_srh_list2">
              <input type="text" name="key" size="50" maxlength="50" class="area_advanced_srh_list_text">
              <p class="btn_advanced_srh1"><a href="#">Search</a></p>
              <input type="submit" value="key" name="src"/><!-- 送信ボタン -->
              <br class="clearfloat">
              <span class="green">※住所、駅名、物件種別が対象となります</span>
            </td>
          </tr>
          <tr>
            <td class="area_advanced_srh_list1">Price</td>
            <td class="area_advanced_srh_list2">
              <!-- シンガポールドルはAPIを使って算出 -->
              <select name="pr_l" class="price_select">
                <option value="">Min</option>
                <option value="4000000">¥ 4,000,000 (S$ ○○○○○○○○)</option>
                <option value="5000000">¥ 5,000,000 (S$ ○○○○○○○○)</option>
                <option value="6000000">¥ 6,000,000 (S$ ○○○○○○○○)</option>
                <option value="7000000">¥ 7,000,000 (S$ ○○○○○○○○)</option>
                <option value="8000000">¥ 8,000,000 (S$ ○○○○○○○○)</option>
                <option value="9000000">¥ 9,000,000 (S$ ○○○○○○○○)</option>
                <option value="15000000">¥ 15,000,000 (S$ ○○○○○○○○)</option>
                <option value="20000000">¥ 20,000,000 (S$ ○○○○○○○○)</option>
                <option value="25000000">¥ 25,000,000 (S$ ○○○○○○○○)</option>
                <option value="30000000">¥ 30,000,000 (S$ ○○○○○○○○)</option>
                <option value="35000000">¥ 35,000,000 (S$ ○○○○○○○○)</option>
                <option value="40000000">¥ 40,000,000 (S$ ○○○○○○○○)</option>
                <option value="45000000">¥ 45,000,000 (S$ ○○○○○○○○)</option>
                <option value="50000000">¥ 50,000,000 (S$ ○○○○○○○○)</option>
                <option value="55000000">¥ 55,000,000 (S$ ○○○○○○○○)</option>
                <option value="60000000">¥ 60,000,000 (S$ ○○○○○○○○)</option>
                <option value="65000000">¥ 65,000,000 (S$ ○○○○○○○○)</option>
                <option value="70000000">¥ 70,000,000 (S$ ○○○○○○○○)</option>
                <option value="75000000">¥ 75,000,000 (S$ ○○○○○○○○)</option>
                <option value="80000000">¥ 80,000,000 (S$ ○○○○○○○○)</option>
                <option value="85000000">¥ 85,000,000 (S$ ○○○○○○○○)</option>
                <option value="90000000">¥ 90,000,000 (S$ ○○○○○○○○)</option>
                <option value="95000000">¥ 95,000,000 (S$ ○○○○○○○○)</option>
                <option value="100000000">¥ 100,000,000 (S$ ○○○○○○○○)</option>
                <option value="120000000">¥ 120,000,000 (S$ ○○○○○○○○)</option>
                <option value="140000000">¥ 140,000,000 (S$ ○○○○○○○○)</option>
                <option value="160000000">¥ 160,000,000 (S$ ○○○○○○○○)</option>
                <option value="180000000">¥ 180,000,000 (S$ ○○○○○○○○)</option>
                <option value="200000000">¥ 200,000,000 (S$ ○○○○○○○○)</option>
                <option value="220000000">¥ 220,000,000 (S$ ○○○○○○○○)</option>
                <option value="240000000">¥ 240,000,000 (S$ ○○○○○○○○)</option>
                <option value="260000000">¥ 260,000,000 (S$ ○○○○○○○○)</option>
                <option value="280000000">¥ 280,000,000 (S$ ○○○○○○○○)</option>
                <option value="300000000">¥ 300,000,000 (S$ ○○○○○○○○)</option>
                <option value="350000000">¥ 350,000,000 (S$ ○○○○○○○○)</option>
                <option value="400000000">¥ 400,000,000 (S$ ○○○○○○○○)</option>
                <option value="450000000">¥ 450,000,000 (S$ ○○○○○○○○)</option>
                <option value="500000000">¥ 500,000,000 (S$ ○○○○○○○○)</option>
                <option value="700000000">¥ 700,000,000 (S$ ○○○○○○○○)</option>
                <option value="1000000000">¥ 1,000,000,000 (S$ ○○○○○○○○)</option>
              </select> to 

              <select name="pr_h" class="price_select">
                <option value="">Max</option>
                <option value="4000000">¥ 4,000,000 (S$ ○○○○○○○○)</option>
                <option value="5000000">¥ 5,000,000 (S$ ○○○○○○○○)</option>
                <option value="6000000">¥ 6,000,000 (S$ ○○○○○○○○)</option>
                <option value="7000000">¥ 7,000,000 (S$ ○○○○○○○○)</option>
                <option value="8000000">¥ 8,000,000 (S$ ○○○○○○○○)</option>
                <option value="9000000">¥ 9,000,000 (S$ ○○○○○○○○)</option>
                <option value="15000000">¥ 15,000,000 (S$ ○○○○○○○○)</option>
                <option value="20000000">¥ 20,000,000 (S$ ○○○○○○○○)</option>
                <option value="25000000">¥ 25,000,000 (S$ ○○○○○○○○)</option>
                <option value="30000000">¥ 30,000,000 (S$ ○○○○○○○○)</option>
                <option value="35000000">¥ 35,000,000 (S$ ○○○○○○○○)</option>
                <option value="40000000">¥ 40,000,000 (S$ ○○○○○○○○)</option>
                <option value="45000000">¥ 45,000,000 (S$ ○○○○○○○○)</option>
                <option value="50000000">¥ 50,000,000 (S$ ○○○○○○○○)</option>
                <option value="55000000">¥ 55,000,000 (S$ ○○○○○○○○)</option>
                <option value="60000000">¥ 60,000,000 (S$ ○○○○○○○○)</option>
                <option value="65000000">¥ 65,000,000 (S$ ○○○○○○○○)</option>
                <option value="70000000">¥ 70,000,000 (S$ ○○○○○○○○)</option>
                <option value="75000000">¥ 75,000,000 (S$ ○○○○○○○○)</option>
                <option value="80000000">¥ 80,000,000 (S$ ○○○○○○○○)</option>
                <option value="85000000">¥ 85,000,000 (S$ ○○○○○○○○)</option>
                <option value="90000000">¥ 90,000,000 (S$ ○○○○○○○○)</option>
                <option value="95000000">¥ 95,000,000 (S$ ○○○○○○○○)</option>
                <option value="100000000">¥ 100,000,000 (S$ ○○○○○○○○)</option>
                <option value="120000000">¥ 120,000,000 (S$ ○○○○○○○○)</option>
                <option value="140000000">¥ 140,000,000 (S$ ○○○○○○○○)</option>
                <option value="160000000">¥ 160,000,000 (S$ ○○○○○○○○)</option>
                <option value="180000000">¥ 180,000,000 (S$ ○○○○○○○○)</option>
                <option value="200000000">¥ 200,000,000 (S$ ○○○○○○○○)</option>
                <option value="220000000">¥ 220,000,000 (S$ ○○○○○○○○)</option>
                <option value="240000000">¥ 240,000,000 (S$ ○○○○○○○○)</option>
                <option value="260000000">¥ 260,000,000 (S$ ○○○○○○○○)</option>
                <option value="280000000">¥ 280,000,000 (S$ ○○○○○○○○)</option>
                <option value="300000000">¥ 300,000,000 (S$ ○○○○○○○○)</option>
                <option value="350000000">¥ 350,000,000 (S$ ○○○○○○○○)</option>
                <option value="400000000">¥ 400,000,000 (S$ ○○○○○○○○)</option>
                <option value="450000000">¥ 450,000,000 (S$ ○○○○○○○○)</option>
                <option value="500000000">¥ 500,000,000 (S$ ○○○○○○○○)</option>
                <option value="700000000">¥ 700,000,000 (S$ ○○○○○○○○)</option>
                <option value="1000000000">¥ 1,000,000,000 (S$ ○○○○○○○○)</option>
              </select>
            </td>
          </tr>
          <tr>
            <td class="area_advanced_srh_list1">物件種別</td>
            <td class="area_advanced_srh_list2">
              <label class="checkbox_label"><input type="checkbox" name="pf2" class="checkbox_input">投資用マンション</label>
              <label class="checkbox_label"><input type="checkbox" name="pf3" class="checkbox_input">売り店舗・売り事務所</label><br><br>
              <span class="green">※下記は『投資用マンション、売り店舗・売り事務所』選択時のみ</span><br>
              専有面積：
              <select name="fps_l" class="area_advanced_srh_list_select">
              <option value="">Min</option>
              <option value="100" >100 sqft (9.29 sqm)</option>
              <option value="150" >150 sqft (13.94 sqm)</option>
              <option value="200" >200 sqft (18.58 sqm)</option>
              <option value="250" >250 sqft (23.23 sqm)</option>
              <option value="300" >300 sqft (27.87 sqm)</option>
              <option value="350" >350 sqft (32.52 sqm)</option>
              <option value="400" >400 sqft (37.16 sqm)</option>
              <option value="450" >450 sqft (41.81 sqm)</option>
              <option value="500" >500 sqft (46.45 sqm)</option>
              <option value="550" >550 sqft (51.10 sqm)</option>
              <option value="600" >600 sqft (55.74 sqm)</option>
              <option value="650" >650 sqft (60.39 sqm)</option>
              <option value="700" >700 sqft (65.03 sqm)</option>
              <option value="750" >750 sqft (69.68 sqm)</option>
              <option value="800" >800 sqft (74.32 sqm)</option>
              <option value="850" >850 sqft (78.97 sqm)</option>
              <option value="900" >900 sqft (83.61 sqm)</option>
              <option value="950" >950 sqft (88.26 sqm)</option>
              <option value="1000" >1000 sqft (92.90 sqm)</option>
              <option value="1050" >1050 sqft (97.55 sqm)</option>
              <option value="1100" >1100 sqft (102.19 sqm)</option>
              <option value="1150" >1150 sqft (106.84 sqm)</option>
              <option value="1200" >1200 sqft (111.48 sqm)</option>
              <option value="1250" >1250 sqft (116.13 sqm)</option>
              <option value="1300" >1300 sqft (120.77 sqm)</option>
              <option value="1350" >1350 sqft (125.42 sqm)</option>
              <option value="1400" >1400 sqft (130.06 sqm)</option>
              <option value="1450" >1450 sqft (134.71 sqm)</option>
              <option value="1500" >1500 sqft (139.35 sqm)</option>
              <option value="1550" >1550 sqft (144.00 sqm)</option>
              <option value="1600" >1600 sqft (148.64 sqm)</option>
              <option value="1650" >1650 sqft (153.29 sqm)</option>
              <option value="1700" >1700 sqft (157.93 sqm)</option>
              <option value="1750" >1750 sqft (162.58 sqm)</option>
              <option value="1800" >1800 sqft (167.22 sqm)</option>
              <option value="1850" >1850 sqft (171.87 sqm)</option>
              <option value="1900" >1900 sqft (176.51 sqm)</option>
              <option value="1950" >1950 sqft (181.16 sqm)</option>
              <option value="2000" >2000 sqft (185.80 sqm)</option>
              <option value="2050" >2050 sqft (190.45 sqm)</option>
              <option value="2100" >2100 sqft (195.09 sqm)</option>
              <option value="2150" >2150 sqft (199.74 sqm)</option>
              <option value="2200" >2200 sqft (204.38 sqm)</option>
              <option value="2250" >2250 sqft (209.03 sqm)</option>
              <option value="2300" >2300 sqft (213.67 sqm)</option>
              <option value="2350" >2350 sqft (218.32 sqm)</option>
              <option value="2400" >2400 sqft (222.96 sqm)</option>
              <option value="2450" >2450 sqft (227.61 sqm)</option>
              <option value="2500" >2500 sqft (232.25 sqm)</option>
              <option value="2550" >2550 sqft (236.90 sqm)</option>
              <option value="2600" >2600 sqft (241.54 sqm)</option>
              <option value="2650" >2650 sqft (246.19 sqm)</option>
              <option value="2700" >2700 sqft (250.83 sqm)</option>
              <option value="2750" >2750 sqft (255.48 sqm)</option>
              <option value="2800" >2800 sqft (260.12 sqm)</option>
              <option value="2850" >2850 sqft (264.77 sqm)</option>
              <option value="2900" >2900 sqft (269.41 sqm)</option>
              <option value="2950" >2950 sqft (274.06 sqm)</option>
              <option value="3000" >3000 sqft (278.70 sqm)</option>
              <option value="3050" >3050 sqft (283.35 sqm)</option>
              <option value="3100" >3100 sqft (287.99 sqm)</option>
              <option value="3150" >3150 sqft (292.64 sqm)</option>
              <option value="3200" >3200 sqft (297.28 sqm)</option>
              <option value="3250" >3250 sqft (301.93 sqm)</option>
              <option value="3300" >3300 sqft (306.57 sqm)</option>
              <option value="3350" >3350 sqft (311.22 sqm)</option>
              <option value="3400" >3400 sqft (315.86 sqm)</option>
              <option value="3450" >3450 sqft (320.51 sqm)</option>
              <option value="3500" >3500 sqft (325.15 sqm)</option>
              <option value="3550" >3550 sqft (329.80 sqm)</option>
              <option value="3600" >3600 sqft (334.44 sqm)</option>
              <option value="3650" >3650 sqft (339.09 sqm)</option>
              <option value="3700" >3700 sqft (343.73 sqm)</option>
              <option value="3750" >3750 sqft (348.38 sqm)</option>
              <option value="3800" >3800 sqft (353.02 sqm)</option>
              <option value="3850" >3850 sqft (357.67 sqm)</option>
              <option value="3900" >3900 sqft (362.31 sqm)</option>
              <option value="3950" >3950 sqft (366.96 sqm)</option>
              <option value="4000" >4000 sqft (371.60 sqm)</option>
              <option value="4050" >4050 sqft (376.25 sqm)</option>
              <option value="4100" >4100 sqft (380.89 sqm)</option>
              <option value="4150" >4150 sqft (385.54 sqm)</option>
              <option value="4200" >4200 sqft (390.18 sqm)</option>
              <option value="4250" >4250 sqft (394.83 sqm)</option>
              <option value="4300" >4300 sqft (399.47 sqm)</option>
              <option value="4350" >4350 sqft (404.12 sqm)</option>
              <option value="4400" >4400 sqft (408.76 sqm)</option>
              <option value="4450" >4450 sqft (413.41 sqm)</option>
              <option value="4500" >4500 sqft (418.05 sqm)</option>
              <option value="4550" >4550 sqft (422.70 sqm)</option>
              <option value="4600" >4600 sqft (427.34 sqm)</option>
              <option value="4650" >4650 sqft (431.99 sqm)</option>
              <option value="4700" >4700 sqft (436.63 sqm)</option>
              <option value="4750" >4750 sqft (441.28 sqm)</option>
              <option value="4800" >4800 sqft (445.92 sqm)</option>
              <option value="4850" >4850 sqft (450.57 sqm)</option>
              <option value="4900" >4900 sqft (455.21 sqm)</option>
              <option value="4950" >4950 sqft (459.86 sqm)</option>
              <option value="5000" >5000 sqft (464.50 sqm)</option>
              <option value="5050" >5050 sqft (469.15 sqm)</option>
              <option value="5100" >5100 sqft (473.79 sqm)</option>
              <option value="5150" >5150 sqft (478.44 sqm)</option>
              <option value="5200" >5200 sqft (483.08 sqm)</option>
              <option value="5250" >5250 sqft (487.73 sqm)</option>
              <option value="5300" >5300 sqft (492.37 sqm)</option>
              <option value="5350" >5350 sqft (497.02 sqm)</option>
              <option value="5400" >5400 sqft (501.66 sqm)</option>
              <option value="5450" >5450 sqft (506.31 sqm)</option>
              <option value="5500" >5500 sqft (510.95 sqm)</option>
              <option value="5550" >5550 sqft (515.60 sqm)</option>
              <option value="5600" >5600 sqft (520.24 sqm)</option>
              <option value="5650" >5650 sqft (524.89 sqm)</option>
              <option value="5700" >5700 sqft (529.53 sqm)</option>
              <option value="5750" >5750 sqft (534.18 sqm)</option>
              <option value="5800" >5800 sqft (538.82 sqm)</option>
              <option value="5850" >5850 sqft (543.47 sqm)</option>
              <option value="5900" >5900 sqft (548.11 sqm)</option>
              <option value="5950" >5950 sqft (552.76 sqm)</option>
              <option value="6000" >6000 sqft (557.40 sqm)</option>
              <option value="6050" >6050 sqft (562.05 sqm)</option>
              <option value="6100" >6100 sqft (566.69 sqm)</option>
              <option value="6150" >6150 sqft (571.34 sqm)</option>
              <option value="6200" >6200 sqft (575.98 sqm)</option>
              <option value="6250" >6250 sqft (580.63 sqm)</option>
              <option value="6300" >6300 sqft (585.27 sqm)</option>
              <option value="6350" >6350 sqft (589.92 sqm)</option>
              <option value="6400" >6400 sqft (594.56 sqm)</option>
              <option value="6450" >6450 sqft (599.21 sqm)</option>
              <option value="6500" >6500 sqft (603.85 sqm)</option>
              <option value="6550" >6550 sqft (608.50 sqm)</option>
              <option value="6600" >6600 sqft (613.14 sqm)</option>
              <option value="6650" >6650 sqft (617.79 sqm)</option>
              <option value="6700" >6700 sqft (622.43 sqm)</option>
              <option value="6750" >6750 sqft (627.08 sqm)</option>
              <option value="6800" >6800 sqft (631.72 sqm)</option>
              <option value="6850" >6850 sqft (636.37 sqm)</option>
              <option value="6900" >6900 sqft (641.01 sqm)</option>
              <option value="6950" >6950 sqft (645.66 sqm)</option>
              <option value="7000" >7000 sqft (650.30 sqm)</option>
              </select> to 
              <select name="fps_h" class="area_advanced_srh_list_select">
              <option value="">Max</option>
              <option value="100" >100 sqft (9.29 sqm)</option>
              <option value="150" >150 sqft (13.94 sqm)</option>
              <option value="200" >200 sqft (18.58 sqm)</option>
              <option value="250" >250 sqft (23.23 sqm)</option>
              <option value="300" >300 sqft (27.87 sqm)</option>
              <option value="350" >350 sqft (32.52 sqm)</option>
              <option value="400" >400 sqft (37.16 sqm)</option>
              <option value="450" >450 sqft (41.81 sqm)</option>
              <option value="500" >500 sqft (46.45 sqm)</option>
              <option value="550" >550 sqft (51.10 sqm)</option>
              <option value="600" >600 sqft (55.74 sqm)</option>
              <option value="650" >650 sqft (60.39 sqm)</option>
              <option value="700" >700 sqft (65.03 sqm)</option>
              <option value="750" >750 sqft (69.68 sqm)</option>
              <option value="800" >800 sqft (74.32 sqm)</option>
              <option value="850" >850 sqft (78.97 sqm)</option>
              <option value="900" >900 sqft (83.61 sqm)</option>
              <option value="950" >950 sqft (88.26 sqm)</option>
              <option value="1000" >1000 sqft (92.90 sqm)</option>
              <option value="1050" >1050 sqft (97.55 sqm)</option>
              <option value="1100" >1100 sqft (102.19 sqm)</option>
              <option value="1150" >1150 sqft (106.84 sqm)</option>
              <option value="1200" >1200 sqft (111.48 sqm)</option>
              <option value="1250" >1250 sqft (116.13 sqm)</option>
              <option value="1300" >1300 sqft (120.77 sqm)</option>
              <option value="1350" >1350 sqft (125.42 sqm)</option>
              <option value="1400" >1400 sqft (130.06 sqm)</option>
              <option value="1450" >1450 sqft (134.71 sqm)</option>
              <option value="1500" >1500 sqft (139.35 sqm)</option>
              <option value="1550" >1550 sqft (144.00 sqm)</option>
              <option value="1600" >1600 sqft (148.64 sqm)</option>
              <option value="1650" >1650 sqft (153.29 sqm)</option>
              <option value="1700" >1700 sqft (157.93 sqm)</option>
              <option value="1750" >1750 sqft (162.58 sqm)</option>
              <option value="1800" >1800 sqft (167.22 sqm)</option>
              <option value="1850" >1850 sqft (171.87 sqm)</option>
              <option value="1900" >1900 sqft (176.51 sqm)</option>
              <option value="1950" >1950 sqft (181.16 sqm)</option>
              <option value="2000" >2000 sqft (185.80 sqm)</option>
              <option value="2050" >2050 sqft (190.45 sqm)</option>
              <option value="2100" >2100 sqft (195.09 sqm)</option>
              <option value="2150" >2150 sqft (199.74 sqm)</option>
              <option value="2200" >2200 sqft (204.38 sqm)</option>
              <option value="2250" >2250 sqft (209.03 sqm)</option>
              <option value="2300" >2300 sqft (213.67 sqm)</option>
              <option value="2350" >2350 sqft (218.32 sqm)</option>
              <option value="2400" >2400 sqft (222.96 sqm)</option>
              <option value="2450" >2450 sqft (227.61 sqm)</option>
              <option value="2500" >2500 sqft (232.25 sqm)</option>
              <option value="2550" >2550 sqft (236.90 sqm)</option>
              <option value="2600" >2600 sqft (241.54 sqm)</option>
              <option value="2650" >2650 sqft (246.19 sqm)</option>
              <option value="2700" >2700 sqft (250.83 sqm)</option>
              <option value="2750" >2750 sqft (255.48 sqm)</option>
              <option value="2800" >2800 sqft (260.12 sqm)</option>
              <option value="2850" >2850 sqft (264.77 sqm)</option>
              <option value="2900" >2900 sqft (269.41 sqm)</option>
              <option value="2950" >2950 sqft (274.06 sqm)</option>
              <option value="3000" >3000 sqft (278.70 sqm)</option>
              <option value="3050" >3050 sqft (283.35 sqm)</option>
              <option value="3100" >3100 sqft (287.99 sqm)</option>
              <option value="3150" >3150 sqft (292.64 sqm)</option>
              <option value="3200" >3200 sqft (297.28 sqm)</option>
              <option value="3250" >3250 sqft (301.93 sqm)</option>
              <option value="3300" >3300 sqft (306.57 sqm)</option>
              <option value="3350" >3350 sqft (311.22 sqm)</option>
              <option value="3400" >3400 sqft (315.86 sqm)</option>
              <option value="3450" >3450 sqft (320.51 sqm)</option>
              <option value="3500" >3500 sqft (325.15 sqm)</option>
              <option value="3550" >3550 sqft (329.80 sqm)</option>
              <option value="3600" >3600 sqft (334.44 sqm)</option>
              <option value="3650" >3650 sqft (339.09 sqm)</option>
              <option value="3700" >3700 sqft (343.73 sqm)</option>
              <option value="3750" >3750 sqft (348.38 sqm)</option>
              <option value="3800" >3800 sqft (353.02 sqm)</option>
              <option value="3850" >3850 sqft (357.67 sqm)</option>
              <option value="3900" >3900 sqft (362.31 sqm)</option>
              <option value="3950" >3950 sqft (366.96 sqm)</option>
              <option value="4000" >4000 sqft (371.60 sqm)</option>
              <option value="4050" >4050 sqft (376.25 sqm)</option>
              <option value="4100" >4100 sqft (380.89 sqm)</option>
              <option value="4150" >4150 sqft (385.54 sqm)</option>
              <option value="4200" >4200 sqft (390.18 sqm)</option>
              <option value="4250" >4250 sqft (394.83 sqm)</option>
              <option value="4300" >4300 sqft (399.47 sqm)</option>
              <option value="4350" >4350 sqft (404.12 sqm)</option>
              <option value="4400" >4400 sqft (408.76 sqm)</option>
              <option value="4450" >4450 sqft (413.41 sqm)</option>
              <option value="4500" >4500 sqft (418.05 sqm)</option>
              <option value="4550" >4550 sqft (422.70 sqm)</option>
              <option value="4600" >4600 sqft (427.34 sqm)</option>
              <option value="4650" >4650 sqft (431.99 sqm)</option>
              <option value="4700" >4700 sqft (436.63 sqm)</option>
              <option value="4750" >4750 sqft (441.28 sqm)</option>
              <option value="4800" >4800 sqft (445.92 sqm)</option>
              <option value="4850" >4850 sqft (450.57 sqm)</option>
              <option value="4900" >4900 sqft (455.21 sqm)</option>
              <option value="4950" >4950 sqft (459.86 sqm)</option>
              <option value="5000" >5000 sqft (464.50 sqm)</option>
              <option value="5050" >5050 sqft (469.15 sqm)</option>
              <option value="5100" >5100 sqft (473.79 sqm)</option>
              <option value="5150" >5150 sqft (478.44 sqm)</option>
              <option value="5200" >5200 sqft (483.08 sqm)</option>
              <option value="5250" >5250 sqft (487.73 sqm)</option>
              <option value="5300" >5300 sqft (492.37 sqm)</option>
              <option value="5350" >5350 sqft (497.02 sqm)</option>
              <option value="5400" >5400 sqft (501.66 sqm)</option>
              <option value="5450" >5450 sqft (506.31 sqm)</option>
              <option value="5500" >5500 sqft (510.95 sqm)</option>
              <option value="5550" >5550 sqft (515.60 sqm)</option>
              <option value="5600" >5600 sqft (520.24 sqm)</option>
              <option value="5650" >5650 sqft (524.89 sqm)</option>
              <option value="5700" >5700 sqft (529.53 sqm)</option>
              <option value="5750" >5750 sqft (534.18 sqm)</option>
              <option value="5800" >5800 sqft (538.82 sqm)</option>
              <option value="5850" >5850 sqft (543.47 sqm)</option>
              <option value="5900" >5900 sqft (548.11 sqm)</option>
              <option value="5950" >5950 sqft (552.76 sqm)</option>
              <option value="6000" >6000 sqft (557.40 sqm)</option>
              <option value="6050" >6050 sqft (562.05 sqm)</option>
              <option value="6100" >6100 sqft (566.69 sqm)</option>
              <option value="6150" >6150 sqft (571.34 sqm)</option>
              <option value="6200" >6200 sqft (575.98 sqm)</option>
              <option value="6250" >6250 sqft (580.63 sqm)</option>
              <option value="6300" >6300 sqft (585.27 sqm)</option>
              <option value="6350" >6350 sqft (589.92 sqm)</option>
              <option value="6400" >6400 sqft (594.56 sqm)</option>
              <option value="6450" >6450 sqft (599.21 sqm)</option>
              <option value="6500" >6500 sqft (603.85 sqm)</option>
              <option value="6550" >6550 sqft (608.50 sqm)</option>
              <option value="6600" >6600 sqft (613.14 sqm)</option>
              <option value="6650" >6650 sqft (617.79 sqm)</option>
              <option value="6700" >6700 sqft (622.43 sqm)</option>
              <option value="6750" >6750 sqft (627.08 sqm)</option>
              <option value="6800" >6800 sqft (631.72 sqm)</option>
              <option value="6850" >6850 sqft (636.37 sqm)</option>
              <option value="6900" >6900 sqft (641.01 sqm)</option>
              <option value="6950" >6950 sqft (645.66 sqm)</option>
              <option value="7000" >7000 sqft (650.30 sqm)</option>
              </select><br>
              <label class="checkbox_label"><input type="checkbox" name="one" class="checkbox_input">ワンルーム</label>
              <label class="checkbox_label"><input type="checkbox" name="rank" class="checkbox_input">所在2階以上</label>
              <hr class="hr_default">
              <label class="checkbox_label"><input type="checkbox" name="pf4" class="checkbox_input">一棟売りアパート</label>
              <label class="checkbox_label"><input type="checkbox" name="pf7" class="checkbox_input">賃貸併用住宅</label>
              <label class="checkbox_label"><input type="checkbox" name="pf5" class="checkbox_input">一棟売りマンション</label>
              <label class="checkbox_label"><input type="checkbox" name="pf8" class="checkbox_input">戸建賃貸</label>
              <label class="checkbox_label"><input type="checkbox" name="pf6" class="checkbox_input">一棟売りビル</label>
              <label class="checkbox_label"><input type="checkbox" name="pf9" class="checkbox_input">倉庫・工場・その他</label>
              <br>土地面積：
              <select name="las_l" class="area_advanced_srh_list_select">
              <option value="">下限なし</option>
              <option value="50"   >50m2</option>
              <option value="75"   >75m2</option>
              <option value="100"  >100m2</option>
              <option value="125"  >125m2</option>
              <option value="150"  >150m2</option>
              <option value="175"  >175m2</option>
              <option value="200"  >200m2</option>
              <option value="250"  >250m2</option>
              <option value="300"  >300m2</option>
              <option value="400"  >400m2</option>
              <option value="500"  >500m2</option>
              <option value="750"  >750m2</option>
              <option value="1000" >1,000m2</option>
              <option value="1500" >1,500m2</option>
              <option value="2000" >2,000m2</option>
              </select> to 

              <select name="las_h" class="area_advanced_srh_list_select">
              <option value="">上限なし</option>
              <option value="50"   >50m2</option>
              <option value="75"   >75m2</option>
              <option value="100"  >100m2</option>
              <option value="125"  >125m2</option>
              <option value="150"  >150m2</option>
              <option value="175"  >175m2</option>
              <option value="200"  >200m2</option>
              <option value="250"  >250m2</option>
              <option value="300"  >300m2</option>
              <option value="400"  >400m2</option>
              <option value="500"  >500m2</option>
              <option value="750"  >750m2</option>
              <option value="1000" >1,000m2</option>
              <option value="1500" >1,500m2</option>
              <option value="2000" >2,000m2</option>
              </select>
              <hr class="hr_default">
              <label class="checkbox_label"><input type="checkbox" name="pf11" class="checkbox_input">土地</label>
            </td>
          </tr>
          <tr>
            <td class="area_advanced_srh_list1">地域選択</td>
            <td class="area_advanced_srh_list2">
              <label class="checkbox_label"><input type="checkbox" name="" id="group_01" class="checkbox_input"><span class="big orange"><a href="./list.php?src=city&area=23ku">東京都23区</span></label>
              <table>
                <tr>
                  <td><label class="checkbox_label"><input type="checkbox" name="" id="group_02" class="checkbox_input group_01"><span class="bg_pink"><a href="./list.php?src=city&area=Center23ku">都心すべて</a></span></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="" id="group_03" class="checkbox_input group_01"><span class="bg_pink"><a href="./list.php?src=city&area=South23ku">23区南すべて</a></span></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="" id="group_04" class="checkbox_input group_01"><span class="bg_pink"><a href="./list.php?src=city&area=West23ku">23区西すべて</a></span></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="" id="group_05" class="checkbox_input group_01"><span class="bg_pink"><a href="./list.php?src=city&area=East23ku">23区東すべて</a></span></label></td>
                </tr>
                <tr>
                  <td><label class="checkbox_label"><input type="checkbox" name="c1" class="checkbox_input group_01 group_02"><a href="./list.php?src=city&area=Chiyoda">Chiyoda City</a></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c7" class="checkbox_input group_01 group_03"><a href="./list.php?src=city&area=Shinagawa">Shinagawa City</a></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c11" class="checkbox_input group_01 group_04"><a href="./list.php?src=city&area=Suginami">Suginami City</a></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c17" class="checkbox_input group_01 group_05"><a href="./list.php?src=city&area=Daito">Daito City</a></label></td>
                </tr>
                <tr>
                　<td><label class="checkbox_label"><input type="checkbox" name="c2" class="checkbox_input group_01 group_02"><a href="./list.php?src=city&area=Chuo">Chuo City</label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c8" class="checkbox_input group_01 group_03"><a href="./list.php?src=city&area=Ota">Ota City</a></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c12" class="checkbox_input group_01 group_04"><a href="./list.php?src=city&area=Nakano">Nakano City</a></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c18" class="checkbox_input group_01 group_05"><a href="./list.php?src=city&area=Sumida">Sumida City</a></label></td>
                </tr>
                <tr>
                  <td><label class="checkbox_label"><input type="checkbox" name="c3" class="checkbox_input group_01 group_02"><a href="./list.php?src=city&area=Minato">Minato City</a></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c9" class="checkbox_input group_01 group_03"><a href="./list.php?src=city&area=Meguro">Meguro City</a></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c13" class="checkbox_input group_01 group_04"><a href="./list.php?src=city&area=Nerima">Nerima City</a></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c19" class="checkbox_input group_01 group_05"><a href="./list.php?src=city&area=Arakawa">Arakawa City</a></label></td>
                </tr>
                <tr>
                  <td><label class="checkbox_label"><input type="checkbox" name="c4" class="checkbox_input group_01 group_02"><a href="./list.php?src=city&area=Shinjuku">Shinjuku City</a></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c10" class="checkbox_input group_01 group_03"><a href="./list.php?src=city&area=Setagaya">Setagaya City</a></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c14" class="checkbox_input group_01 group_04"><a href="./list.php?src=city&area=Toshima">Toshima City</a></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c20" class="checkbox_input group_01 group_05"><a href="./list.php?src=city&area=Koto">Koto City</a></label></td>
                </tr>
                <tr>
                  <td><label class="checkbox_label"><input type="checkbox" name="c5" class="checkbox_input group_01 group_02"><a href="./list.php?src=city&area=Shibuya">Shibuya City</a></label></td>
                  <td></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c15" class="checkbox_input group_01 group_04"><a href="./list.php?src=city&area=Itabashi">Itabashi City</a></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c21" class="checkbox_input group_01 group_05"><a href="./list.php?src=city&area=Adachi">Adachi City</a></label></td>
                </tr>
                <tr>
                  <td><label class="checkbox_label"><input type="checkbox" name="c6" class="checkbox_input group_01 group_02"><a href="./list.php?src=city&area=Bunkyo">Bunkyo City</a></label></td>
                  <td></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c16" class="checkbox_input group_01 group_04"><a href="./list.php?src=city&area=Kita">Kita City</a></label></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c22" class="checkbox_input group_01 group_05"><a href="./list.php?src=city&area=Katushika">Katushika City</a></label></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><label class="checkbox_label"><input type="checkbox" name="c23" class="checkbox_input group_01 group_05"><a href="./list.php?src=city&area=Edogawa">Edogawa City</a></label></td>
                </tr>
                <tr>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td class="area_advanced_srh_list1">首都圏路線</td>
            <td class="area_advanced_srh_list2">
              <select name="sr" class="area_advanced_srh_list_select2">
              <option value="0">鉄道会社を選択</option>
              <option value="1">JR</option>
              <option value="2">東京メトロ</option>
              <option value="3">都営地下鉄</option>
              <option value="4">西武鉄道</option>
              <option value="5">京王電鉄</option>
              <option value="6">東急電鉄</option>
              <option value="7">東武鉄道</option>
              <option value="8">小田急電鉄</option>
              <option value="9">京浜急行</option>
              <option value="10">京成電鉄</option>
              <option value="11">バス</option>
              <option value="12">その他</option>
              </select>
              <select name="sl1" class="area_advanced_srh_list_select2 jquery_line_flg">
              <option value="0">路線を選択</option>
              <option value="1">山手線</option>
              <option value="2">京浜東北線・根岸線</option>
              <option value="3">中央線</option>
              <option value="4">総武線</option>
              <option value="5">埼京線</option>
              <option value="6">常磐線</option>
              <option value="7">東海道線</option>
              <option value="8">横須賀線</option>
              <option value="9">京葉線</option>
              <option value="10">宇都宮線（東北線）</option>
              <option value="11">東海道新幹線</option>
              <option value="12">東北新幹線</option>
              <option value="13">中央本線</option>
              <option value="14">湘南新宿ライン</option>
              </select>
              <select name="sl2" class="area_advanced_srh_list_select2 jquery_line_flg">
              <option value="0">路線を選択</option>
              <option value="15">銀座線</option>
              <option value="16">丸ノ内線</option>
              <option value="17">日比谷線</option>
              <option value="18">東西線</option>
              <option value="19">千代田線</option>
              <option value="20">有楽町線</option>
              <option value="21">半蔵門線</option>
              <option value="22">南北線</option>
              <option value="23">副都心線</option>
              </select>
              <select name="sl3" class="area_advanced_srh_list_select2 jquery_line_flg">
              <option value="0">路線を選択</option>
              <option value="24">浅草線</option>
              <option value="25">三田線</option>
              <option value="26">新宿線</option>
              <option value="27">大江戸線</option>
              <option value="28">都電荒川線</option>
              <option value="29">日暮里・舎人ライナー</option>
              </select>
              <select name="sl4" class="area_advanced_srh_list_select2 jquery_line_flg">
              <option value="0">路線を選択</option>
              <option value="30">池袋・豊島線</option>
              <option value="31">有楽町線</option>
              <option value="32">新宿線</option>
              </select>
              <select name="sl5" class="area_advanced_srh_list_select2 jquery_line_flg">
              <option value="0">路線を選択</option>
              <option value="33">京王線</option>
              <option value="34">井の頭線</option>
              <option value="35">新線</option>
              </select>
              <select name="sl6" class="area_advanced_srh_list_select2 jquery_line_flg">
              <option value="0">路線を選択</option>
              <option value="36">東横線</option>
              <option value="37">多摩川線</option>
              <option value="38">大井町線</option>
              <option value="39">田園都市線</option>
              <option value="40">池上線</option>
              <option value="41">世田谷線</option>
              <option value="42">目黒線</option>
              </select>
              <select name="sl7" class="area_advanced_srh_list_select2 jquery_line_flg">
              <option value="0">路線を選択</option>
              <option value="43">東上線</option>
              <option value="44">伊勢崎・大師線</option>
              <option value="45">亀戸線</option>
              </select>
              <select name="sl8" class="area_advanced_srh_list_select2 jquery_line_flg">
              <option value="0">路線を選択</option>
              <option value="46">小田原線</option>
              </select>
              <select name="sl9" class="area_advanced_srh_list_select2 jquery_line_flg">
              <option value="0">路線を選択</option>
              <option value="47">京急本線</option>
              <option value="48">空港線</option>
              </select>
              <select name="sl10" class="area_advanced_srh_list_select2 jquery_line_flg">
              <option value="0">路線を選択</option>
              <option value="49">京成本線</option>
              <option value="50">押上線</option>
              <option value="51">金町線</option>
              <option value="52">成田スカイアクセス線</option>
              </select>
              <select name="sl11" class="area_advanced_srh_list_select2 jquery_line_flg">
              <option value="0">路線を選択</option>
              <option value="99">バス</option>
              </select>
              <select name="sl12" class="area_advanced_srh_list_select2 jquery_line_flg">
              <option value="0">路線を選択</option>
              <option value="53">りんかい線</option>
              <option value="54">東京モノレール</option>
              <option value="55">ゆりかもめ</option>
              <option value="56">つくばエクスプレス</option>
              <option value="57">埼玉高速線</option>
              <option value="58">北総線</option>
              </select>
              <p class="btn_advanced_srh2"><a href="#">Search</a></p>
              <input type="submit" value="railway_b" name="src"/><!-- 送信ボタン -->
              <br class="clearfloat">
            </td>
          </tr>
          <tr>
            <td class="area_advanced_srh_list1">利回り</td>
            <td class="area_advanced_srh_list2">
              <table>
                <tr>
                  <td><label class="radio_label_default1"><input type="radio" name="yld" value="0" class="radio_input" checked="checked"><span class="orange">指定なし</span></label></td>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="5">5%以上</label></td>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="6">6%以上</label></td>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="7">7%以上</label></td>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="8">8%以上</label></td>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="9">9%以上</label></td>
                </tr>
                <tr>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="10">10%以上</label></td>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="11">11%以上</label></td>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="12">12%以上</label></td>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="13">13%以上</label></td>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="14">14%以上</label></td>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="15">15%以上</label></td>
                </tr>
                <tr>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="16">16%以上</label></td>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="17">17%以上</label></td>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="18">18%以上</label></td>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="19">19%以上</label></td>
                  <td><label class="radio_label1"><input type="radio" name="yld" class="radio_input" value="20">20%以上</label></td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td class="area_advanced_srh_list1">築年月</td>
            <td class="area_advanced_srh_list2">
              <label class="radio_label_default4"><input type="radio" name="bd" class="radio_input" value=""><span class="orange">指定なし</span></label>
              <label class="radio_label4"><input type="radio" name="bd" class="radio_input" value="3">3年以内</label>
              <label class="radio_label4"><input type="radio" name="bd" class="radio_input" value="5">5年以内</label>
              <label class="radio_label4"><input type="radio" name="bd" class="radio_input" value="10">10年以内</label>
              <label class="radio_label4"><input type="radio" name="bd" class="radio_input" value="15">15年以内</label>
              <label class="radio_label4"><input type="radio" name="bd" class="radio_input" value="20">20年以内</label>
              <label class="radio_label4"><input type="radio" name="bd" class="radio_input" value="25">25年以内</label>
              <label class="radio_label4"><input type="radio" name="bd" class="radio_input" value="30">30年以内</label>
              <br>範囲で指定：
                <select name="bd_l" class="area_advanced_srh_list_select">
                <option value="">下限なし</option><option value="1" >築1年</option>
                <option value="2" >築2年</option>
                <option value="3" >築3年</option>
                <option value="4" >築4年</option>
                <option value="5" >築5年</option>
                <option value="6" >築6年</option>
                <option value="7" >築7年</option>
                <option value="8" >築8年</option>
                <option value="9" >築9年</option>
                <option value="10" >築10年</option>
                <option value="11" >築11年</option>
                <option value="12" >築12年</option>
                <option value="13" >築13年</option>
                <option value="14" >築14年</option>
                <option value="15" >築15年</option>
                <option value="16" >築16年</option>
                <option value="17" >築17年</option>
                <option value="18" >築18年</option>
                <option value="19" >築19年</option>
                <option value="20" >築20年</option>
                <option value="21" >築21年</option>
                <option value="22" >築22年</option>
                <option value="23" >築23年</option>
                <option value="24" >築24年</option>
                <option value="25" >築25年</option>
                <option value="26" >築26年</option>
                <option value="27" >築27年</option>
                <option value="28" >築28年</option>
                <option value="29" >築29年</option>
                <option value="30" >築30年</option>
                <option value="31" >築31年</option>
                <option value="32" >築32年</option>
                <option value="33" >築33年</option>
                <option value="34" >築34年</option>
                <option value="35" >築35年</option>
                <option value="36" >築36年</option>
                <option value="37" >築37年</option>
                <option value="38" >築38年</option>
                <option value="39" >築39年</option>
                <option value="40" >築40年</option>
                </select> to 

                <select name="bd_h" class="area_advanced_srh_list_select">
                <option value="">上限なし</option><option value="1" >築1年</option>
                <option value="2" >築2年</option>
                <option value="3" >築3年</option>
                <option value="4" >築4年</option>
                <option value="5" >築5年</option>
                <option value="6" >築6年</option>
                <option value="7" >築7年</option>
                <option value="8" >築8年</option>
                <option value="9" >築9年</option>
                <option value="10" >築10年</option>
                <option value="11" >築11年</option>
                <option value="12" >築12年</option>
                <option value="13" >築13年</option>
                <option value="14" >築14年</option>
                <option value="15" >築15年</option>
                <option value="16" >築16年</option>
                <option value="17" >築17年</option>
                <option value="18" >築18年</option>
                <option value="19" >築19年</option>
                <option value="20" >築20年</option>
                <option value="21" >築21年</option>
                <option value="22" >築22年</option>
                <option value="23" >築23年</option>
                <option value="24" >築24年</option>
                <option value="25" >築25年</option>
                <option value="26" >築26年</option>
                <option value="27" >築27年</option>
                <option value="28" >築28年</option>
                <option value="29" >築29年</option>
                <option value="30" >築30年</option>
                <option value="31" >築31年</option>
                <option value="32" >築32年</option>
                <option value="33" >築33年</option>
                <option value="34" >築34年</option>
                <option value="35" >築35年</option>
                <option value="36" >築36年</option>
                <option value="37" >築37年</option>
                <option value="38" >築38年</option>
                <option value="39" >築39年</option>
                <option value="40" >築40年</option>
                </select>
            </td>
          </tr>
          <tr>
            <td class="area_advanced_srh_list1">駅から徒歩時間</td>
            <td class="area_advanced_srh_list2">
              <label class="radio_label_default5"><input type="radio" name="wm" class="radio_input" value="0"><span class="orange">指定なし</span></label>
              <label class="radio_label5"><input type="radio" name="wm" class="radio_input" value="5">5分以内</label>
              <label class="radio_label5"><input type="radio" name="wm" class="radio_input" value="10">10分以内</label>
              <label class="radio_label5"><input type="radio" name="wm" class="radio_input" value="15">15分以内</label>
              <label class="radio_label5"><input type="radio" name="wm" class="radio_input" value="20">20分以内</label>
            </td>
          </tr>
          <tr>
            <td class="area_advanced_srh_list1">建物構造</td>
            <td class="area_advanced_srh_list2">
              <label class="checkbox_label"><input type="checkbox" name="bs_w" class="checkbox_input">木造</label>
              <label class="checkbox_label"><input type="checkbox" name="bs_s" class="checkbox_input">鉄骨造（S造）</label>
              <label class="checkbox_label"><input type="checkbox" name="bs_rc" class="checkbox_input">鉄筋コンクリート造（RC造）</label>
              <label class="checkbox_label"><input type="checkbox" name="bs_src" class="checkbox_input">鉄骨鉄筋コンクリート造（SRC造）</label>
            </td>
          </tr>
          <tr>
            <td class="area_advanced_srh_list1">総戸数</td>
            <td class="area_advanced_srh_list2">
              <select name="tu_l" class="area_advanced_srh_list_select">
                <option value="">下限なし</option>
                <option value="1" >1戸</option>
                <option value="2" >2戸</option>
                <option value="3" >3戸</option>
                <option value="4" >4戸</option>
                <option value="5" >5戸</option>
                <option value="6" >6戸</option>
                <option value="7" >7戸</option>
                <option value="8" >8戸</option>
                <option value="9" >9戸</option>
                <option value="10" >10戸</option>
                <option value="12" >12戸</option>
                <option value="14" >14戸</option>
                <option value="16" >16戸</option>
                <option value="18" >18戸</option>
                <option value="20" >20戸</option>
                <option value="25" >25戸</option>
                <option value="30" >30戸</option>
                <option value="35" >35戸</option>
                <option value="40" >40戸</option>
                <option value="45" >45戸</option>
                <option value="50" >50戸</option>
                <option value="60" >60戸</option>
                <option value="70" >70戸</option>
                <option value="80" >80戸</option>
                <option value="90" >90戸</option>
                <option value="100" >100戸</option>
                <option value="150" >150戸</option>
                <option value="200" >200戸</option>
                <option value="300" >300戸</option>
                </select> to 

                <select name="tu_h" class="area_advanced_srh_list_select">
                <option value="">上限なし</option>
                <option value="1" >1戸</option>
                <option value="2" >2戸</option>
                <option value="3" >3戸</option>
                <option value="4" >4戸</option>
                <option value="5" >5戸</option>
                <option value="6" >6戸</option>
                <option value="7" >7戸</option>
                <option value="8" >8戸</option>
                <option value="9" >9戸</option>
                <option value="10" >10戸</option>
                <option value="12" >12戸</option>
                <option value="14" >14戸</option>
                <option value="16" >16戸</option>
                <option value="18" >18戸</option>
                <option value="20" >20戸</option>
                <option value="25" >25戸</option>
                <option value="30" >30戸</option>
                <option value="35" >35戸</option>
                <option value="40" >40戸</option>
                <option value="45" >45戸</option>
                <option value="50" >50戸</option>
                <option value="60" >60戸</option>
                <option value="70" >70戸</option>
                <option value="80" >80戸</option>
                <option value="90" >90戸</option>
                <option value="100" >100戸</option>
                <option value="150" >150戸</option>
                <option value="200" >200戸</option>
                <option value="300" >300戸</option>
                </select>
            </td>
          </tr>
          <tr>
            <td class="area_advanced_srh_list1">土地権利</td>
            <td class="area_advanced_srh_list2">
              <label class="radio_label_default6"><input type="radio" name="lr" class="radio_input" value=""><span class="orange">指定なし</span></label>
              <label class="radio_label6"><input type="radio" name="lr" class="radio_input" value="owner">所有権</label>
              <label class="radio_label6"><input type="radio" name="lr" class="radio_input" value="excepting">所有権以外</label>
            </td>
          </tr>
          <tr>
            <td class="area_advanced_srh_list1">その他条件</td>
            <td class="area_advanced_srh_list2">
              <label class="checkbox_label"><input type="checkbox" name="img" class="checkbox_input">画像あり</label>
            </td>
          </tr>
        </table>
      </div>
      <p class="btn_advanced_srh3"><a href="#">Search</a></p>
      <input type="submit" value="main" name="src"/><!-- 送信ボタン -->
      </form>
    </div>
    <div id="tab2" class="tabbox">
      <div class="area_line_srh">
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>JR線</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Yamanote">山手線</a>（934）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Keihin-Tōhoku">京浜東北線</a>（668）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Chuō">中央線</a>（606）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Sōbu">総武線</a>（726）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Saikyō">埼京線</a>（233）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Jōban">常磐線</a>（423）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tōkaidō">東海道線</a>（153）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Yokosuka">横須賀線</a>（110）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Keiyō">京葉線</a>（61）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Utsunomiya">宇都宮線（東北線）</a>（112）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=">あああああ高崎線</a>（154）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tōkaidō">東海道新幹線</a>（6）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tōhoku">東北新幹線</a>（5）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=ChuōRapid">中央線本線</a>（5）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Shinjuku">湘南新宿ライン</a>（23）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>東京メトロ</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Ginza">銀座線</a>（178）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Marunouchi">丸ノ内線</a>（439）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Hibiya">日比谷線</a>（298）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tozai">東西線</a>（376）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Chiyoda">千代田線</a>（260）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Yūrakuchō">有楽町線</a>（322）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Hanzōmon">半蔵門線</a>（149）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Namboku">南北線</a>（184）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Fukutoshin">副都心線</a>（173）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>都営地下鉄</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Asakusa">浅草線</a>（214）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Mita">三田線</a>（342）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=ToeiShinjuku">新宿線</a>（221）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Ōedo">大江戸線</a>（573）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=TodenArakawa">都電荒川線</a>（55）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Nippori-Toneri">日暮里・舎人ライナー</a>（42）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>西武鉄道</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=IkebukuroToshima">池袋・豊島線</a>（395）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Yūrakuchō">有楽町線</a>（17）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=SeibuShinjuku">新宿線</a>（531）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>京王電鉄</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Keiō">京王線</a>（471）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Inogashira">井の頭線</a>（158）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=New">新線</a>（13）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>東急電鉄</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tōyoko">東横線</a>（288）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tamagawa">多摩川線</a>（37）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Ōimachi">大井町線</a>（92）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Denentoshi">田園都市線</a>（290）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Ikegami">池上線</a>（149）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Setagaya">世田谷線</a>（70）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Meguro">目黒線</a>（80）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>東武鉄道</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tōjō">東上線</a>（511）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=IsesakiDaishi">伊勢崎・大師線</a>（407）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Kameido">亀戸線</a>（43）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>小田急電鉄</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Odakyū">小田原線</a>（552）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>京浜急行</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=KeikyūMain">京急本線</a>（537）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Airport">空港線</a>（23）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>京成電鉄</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=KeiseiMain">京成本線</a>（378）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Oshiage">押上線</a>（77）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Kanamachi">金町線</a>（32）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=NaritaSkyAccess">成田スカイアクセス線</a>（2）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>バス</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="/">バス</a>（3）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>その他</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Rinkai">りんかい線</a>（24）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=TōkyōMonorail">東京モノレール</a>（12）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Yurikamome">ゆりかもめ</a>（19）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=TsukubaExpress">つくばエクスプレス</a>（128）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=SaitamaRapid">埼玉高速線</a>（42）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=HokusōHokusō">北総線</a>（33）</td>
          </tr>
        </table>
      </div>
    </div>
    <div id="tab3" class="tabbox">
      <div class="area_line_srh">
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>東京都（23区内）</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Chiyoda">千代田区</a>（97）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Chuo">中央区</a>（194）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Minato">港区</a>（315）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Shinjuku">新宿区</a>（471）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Bunkyo">文京区</a>（224）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Daito">台東区</a>（196）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Sumida">墨田区</a>（220）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Koto">江東区</a>（132）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Shinagawa">品川区</a>（253）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Meguro">目黒区</a>（181）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Ota">大田区</a>（325）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Setagaya">世田谷区</a>（392）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Shibuya">渋谷区</a>（330）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Nakano">中野区</a>（368）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Suginami">杉並区</a>（363）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Toshima">豊島区</a>（393）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Kita">北区</a>（130）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Arakawa">荒川区</a>（67）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Itabashi">板橋区</a>（252）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Nerima">練馬区</a>（327）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Adachi">足立区</a>（228）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Katushika">葛飾区</a>（249）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Edogawa">江戸川区</a>（148）</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- ●main contents END● -->

<!-- ●footer START● -->
<div id="area_footer">
  <!-- ●footer navi START -->
  <div id="area_footer_navi">
    <div class="btn_return"><a href="#area_face"><img src="/img/site/common/btn_to_top.jpg" alt="Back to Top"></a></div>
    <div class="layout_navi">
      <dl id="area_footer_list">
        <dt>物件種別</dt>
        <dd>
          <ul>
            <li><a href="#">投資用マンション</a></li>
            <li><a href="#">売り店舗・売り事務所</a></li>
            <li><a href="#">売りアパート</a></li>
            <li><a href="#">売りマンション</a></li>
            <li><a href="#">売りビル</a></li>
            <li><a href="#">賃貸併用住宅</a></li>
            <li><a href="#">戸建賃貸</a></li>
            <li><a href="#">倉庫・工場・その他</a></li>
            <li><a href="#">売りホテル・ペンション</a></li>
            <li><a href="#">土地</a></li>
          </ul>
        </dd>
      </dl>
      <dl id="area_footer_list">
        <dt>不動産投資おすすめ物件</dt>
        <dd>
          <ul>
            <li><a href="#">利回り15%以上</a></li>
            <li><a href="#">新築の収益物件</a></li>
            <li><a href="#">ワンルームマンション</a></li>
          </ul>
        </dd>
      </dl>
      <dl id="area_footer_list">
        <dt>人気の区から探す</dt>
        <dd>
          <ul>
            <li><a href="#">Minato-City</a></li>
            <li><a href="#">Shibuya-City</a></li>
            <li><a href="#">Meguro-City</a></li>
            <li><a href="#">Setagaya-City</a></li>
            <li><a href="#">Chiyoda-City</a></li>
            <li><a href="#">Shinagawa-City</a></li>
            <li><a href="#">Shinjuku-City</a></li>
            <li><a href="#">Chuo-City</a></li>
            <li><a href="#">Ota-City</a></li>
            <li><a href="#">Bunkyo-City</a></li>
          </ul>
        </dd>
      </dl>
      <dl id="area_footer_list">
        <dt>人気の路線から探す</dt>
        <dd>
          <ul>
            <li><a href="#">JR 山手線</a></li>
            <li><a href="#">東京メトロ 銀座線</a></li>
            <li><a href="#">東京メトロ 丸の内線</a></li>
            <li><a href="#">東京メトロ 日比谷線</a></li>
            <li><a href="#">東京メトロ 南北線</a></li>
            <li><a href="#">東急東横線</a></li>
            <li><a href="#">東急田園都市線</a></li>
            <li><a href="#">京王電鉄 京王線</a></li>
            <li><a href="#">京王電鉄 井の頭戦</a></li>
            <li><a href="#">小田急小田原線</a></li>
          </ul>
        </dd>
      </dl>
      <dl id="area_footer_list">
        <dt>Corporate Information</dt>
        <dd>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Column</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Infomation</a></li>
            <li><a href="#">Site Map</a></li>
            <!--<li><a href="#">Visit us on Facebook</a></li>
            <li><a href="#">Follow us on Twitter</a></li>-->
            <li><a href="#">Link</a></li>
          </ul>
        </dd>
      </dl>
      <br class="clearfloat">
    </div>
  </div>
  <!-- ●footer navi END -->

  <!-- ●copyright START -->
  <div id="area_copyright">
    <div class="layout_copyright">
      Copyright &copy; 2012 THEATSITE Co.,Ltd　All rights reserved.
    </div>
  </div>
  <!-- ●copyright navi END -->
</div>
<!-- ●footer END● -->

</body>
</html>
