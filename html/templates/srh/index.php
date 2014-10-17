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

<meta http-equiv="Content-Script-Type" content="text/javascript">
<script language="JavaScript" type="text/javascript">
{literal}
<!--
//＜クリックした時に実行される関数＞
//*** キーワード検索
function search_key(form){
document.form_key.key.value =form1.key.value;
document.form_key.submit();
}
//*** 路線検索
function search_railway(form){
var sr = form1.sr.value;
document.form_railway.sr.value = form1.sr.value;
document.form_railway.sl.value = form1["sl" + sr.toString()].value;
document.form_railway.submit();
}
//-->
{/literal}
</script>
</head>

<body>
{include file='header.html'}
<!-- ●main contents START● -->
<div id="area_main">
  <ul id="tab">
    <li class="selected"><a href="#tab1">Advanced search</a></li>
    <li><a href="#tab2">Search by train line</a></li>
    <li><a href="#tab3">Search by city</a></li>
  </ul>
    {include file='search_detail.html'}
    <div id="tab2" class="tabbox">
      <div class="area_line_srh">
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>JR</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Yamanote">Yamanote Line</a>（{$railway_id[1]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Keihin-Tōhoku">Keihin-Tōhoku Line</a>（{$railway_id[2]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Chuō">Chuō Line(Tōkyō-Nishiogikubo)</a>（{$railway_id[3]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Sōbu">Sōbu Line</a>（{$railway_id[4]}）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Saikyō">Saikyō Line</a>（{$railway_id[5]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Jōban">Jōban Line</a>（{$railway_id[6]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tōkaidō">Tōkaidō Line</a>（{$railway_id[7]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Yokosuka">Yokosuka Line</a>（{$railway_id[8]}）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Keiyō">Keiyō Line</a>（{$railway_id[9]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Utsunomiya">Utsunomiya Line(Tōhoku Line)</a>（{$railway_id[10]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tōkaidō">Tōkaidō Shinkansen</a>（{$railway_id[11]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tōhoku">Tōhoku Sinkansen</a>（{$railway_id[12]}）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=ChuōRapid">Chuō Line(Rapid)</a>（{$railway_id[13]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Shinjuku">Shonan-Shinjuku Line</a>（{$railway_id[14]}）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Tōkyō Metro</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Ginza">Ginza Line</a>（{$railway_id[15]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Marunouchi">Marunouchi Line</a>（{$railway_id[16]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Hibiya">Hibiya Line</a>（{$railway_id[17]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tozai">Tozai Line</a>（{$railway_id[18]}）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Chiyoda">Chiyoda Line</a>（{$railway_id[19]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Yūrakuchō">Yūrakuchō Line</a>（{$railway_id[20]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Hanzōmon">Hanzōmon Line</a>（{$railway_id[21]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Namboku">Namboku Line</a>（{$railway_id[22]}）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Fukutoshin">Fukutoshin Line</a>（{$railway_id[23]}）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Toei Subway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Asakusa">Asakusa Line</a>（{$railway_id[24]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Mita">Mita Line</a>（{$railway_id[25]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=ToeiShinjuku">Shinjuku Line</a>（{$railway_id[26]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Ōedo">Ōedo Line</a>（{$railway_id[27]}）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=TodenArakawa">Toden Arakawa Line</a>（{$railway_id[28]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Nippori-Toneri">Nippori-Toneri Liner</a>（{$railway_id[29]}）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Seibu Railway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=IkebukuroToshima">Ikebukuro Line・Toshima Line</a>（{$railway_id[30]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Yūrakuchō">Yūrakuchō Line</a>（{$railway_id[31]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=SeibuShinjuku">Shinjuku Line</a>（{$railway_id[32]}）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Keiō Railway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Keiō">Keiō Line</a>（{$railway_id[33]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Inogashira">Inogashira Line</a>（{$railway_id[34]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=New">New Line</a>（{$railway_id[35]}）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Tōkyū Railway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tōyoko">Tōyoko Line</a>（{$railway_id[36]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tamagawa">Tamagawa Line</a>（{$railway_id[37]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Ōimachi">Ōimachi Line</a>（{$railway_id[38]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Denentoshi">Denentoshi Line</a>（{$railway_id[39]}）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Ikegami">Ikegami Line</a>（{$railway_id[40]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Setagaya">Setagaya Line</a>（{$railway_id[41]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Meguro">Meguro Line</a>（{$railway_id[42]}）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Tōbu Railway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tōjō">Tōjō Line</a>（{$railway_id[43]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=IsesakiDaishi">Isesaki Line・Daishi Line</a>（{$railway_id[44]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Kameido">Kameido Line</a>（{$railway_id[45]}）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Odakyū Railway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Odakyū">Odakyū Line</a>（{$railway_id[46]}）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Keikyū Railway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=KeikyūMain">Keikyū Main Line</a>（{$railway_id[47]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Airport">Airport Line</a>（{$railway_id[48]}）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Keisei Railway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=KeiseiMain">Keisei main Line</a>（{$railway_id[49]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Oshiage">Oshiage Line</a>（{$railway_id[50]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Kanamachi">Kanamachi Line</a>（{$railway_id[51]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=NaritaSkyAccess">Narita Sky Access Line</a>（{$railway_id[52]}）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Bus</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="/">Bus</a>（3）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Other</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Rinkai">Rinkai Line</a>（{$railway_id[53]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=TōkyōMonorail">Tōkyō Monorail</a>（{$railway_id[54]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Yurikamome">Yurikamome</a>（{$railway_id[55]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=TsukubaExpress">Tsukuba Express</a>（{$railway_id[56]}）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=SaitamaRapid">Saitama Rapid Railway Line</a>（{$railway_id[57]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=HokusōHokusō">Hokusō Railway Hokusō Line</a>（{$railway_id[58]}）</td>
          </tr>
        </table>
      </div>
    </div>
    <div id="tab3" class="tabbox">
      <div class="area_line_srh">
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>23 wards in Tokyo</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Chiyoda">Chiyoda City</a>（{$city_id[1]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Chuo">Chuo City</a>（{$city_id[2]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Minato">Minato City</a>（{$city_id[3]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Shinjuku">Shinjuku City</a>（{$city_id[4]}）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Bunkyo">Bunkyo City</a>（{$city_id[6]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Daito">Daito City</a>（{$city_id[17]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Sumida">Sumida City</a>（{$city_id[18]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Koto">Koto City</a>（{$city_id[20]}）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Shinagawa">Shinagawa City</a>（{$city_id[7]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Meguro">Meguro City</a>（{$city_id[9]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Ota">Ota City</a>（{$city_id[8]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Setagaya">Setagaya City</a>（{$city_id[10]}）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Shibuya">Shibuya City</a>（{$city_id[5]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Nakano">Nakano City</a>（{$city_id[12]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Suginami">Suginami City</a>（{$city_id[11]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Toshima">Toshima City</a>（{$city_id[14]}）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Kita">Kita City</a>（{$city_id[16]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Arakawa">Arakawa City</a>（{$city_id[19]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Itabashi">Itabashi City</a>（{$city_id[15]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Nerima">Nerima City</a>（{$city_id[13]}）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Adachi">Adachi City</a>（{$city_id[21]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Katushika">Katsushika City</a>（{$city_id[22]}）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Edogawa">Edogawa City</a>（{$city_id[23]}）</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- ●main contents END● -->
{include file='footer.html'}
</body>
</html>
